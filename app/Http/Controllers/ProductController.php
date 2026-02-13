<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;
use App\Repositories\SettingThemeRepository;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

class ProductController extends Controller
{
    protected $pathUpload = 'admin/uploads/images/product/';

    public function index(Request $request)
    {
        $settingTheme = (new SettingThemeRepository())->settingTheme();

        if(
            !Auth::user()->hasRole('Super') && 
            !Auth::user()->can('usuario.tornar usuario master') && 
            !Auth::user()->hasPermissionTo('noticias.visualizar')
        ){
            return view('admin.error.403', compact('settingTheme'));
        }

        $categories = ProductCategory::active()->sorting()->get();

        // Query base
        $productsQuery = Product::with([
            'category',
        ]);

        // 🔎 Aplicar filtros
        if ($request->filled('title')) {
            $productsQuery->where('title', 'like', '%' . $request->title . '%');
        }

        if ($request->filled('product_category_id')) {
            $productsQuery->where('product_category_id', $request->product_category_id);
        }

        // Paginação
        $products = $productsQuery->orderBy('sorting', 'desc')->paginate(60)->withQueryString();

        // Array simples de categorias [id => title]
        $productCategory = [];
        foreach ($categories as $category) {
            $productCategory[$category->id] = $category->title;
        }

        return view('admin.blades.product.index', compact(
            'products', 
            'categories', 
            'productCategory',
            'settingTheme'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $settingTheme = (new SettingThemeRepository())->settingTheme();
        if(!Auth::user()->hasRole('Super') && 
          !Auth::user()->can('usuario.tornar usuario master') &&  
          !Auth::user()->hasPermissionTo('noticias.visualizar') &&
          !Auth::user()->hasPermissionTo('noticias.criar')){
            return view('admin.error.403', compact('settingTheme'));
        }

        $categories = ProductCategory::active()->sorting()->get();
        $brands = Brand::active()->sorting()->get();

        $productCategory = [];

        foreach ($categories as $category) {
            $productCategory[$category->id] = $category->title;
        }
        
        $productBrand = [];

        foreach ($brands as $brand) {
            $productBrand[$brand->id] = $brand->title;
        }
        return view('admin.blades.product.create', compact('categories', 'productCategory', 'productBrand'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sizes'   => 'array|nullable',
            'sizes.*' => 'string|max:50|nullable',
            'path_image' => ['nullable', 'file', 'image', 'max:2048', 'mimes:jpg,jpeg,png,gif'],
            'path_file' => ['nullable', 'file', 'mimes:pdf', 'max:3072'] 
        ]);
        
        $data = $request->all();
        $data['active'] = $request->active ? 1 : 0;
        $data['slug'] = Str::slug($request->title);

        if (isset($data['sizes'])) {
            // Limpa e valida os tamanhos antes de converter para JSON
            $sizes = array_values(array_filter($request->sizes, function($size) {
                return !is_null($size) && trim($size) !== '';
            }));
            
            // Se não houver tamanhos, salva como JSON vazio
            $data['sizes'] = !empty($sizes) ? json_encode($sizes) : json_encode([]);    
        }else{
            $data['sizes'] = null;
        }

        $manager = new ImageManager(new GdDriver());

        // Imagem principal
        if ($request->hasFile('path_image')) {
            $file = $request->file('path_image');
            $mime = $file->getMimeType();
            $filename = Str::uuid() . '.webp';

            if ($mime === 'image/svg+xml') {
                Storage::disk('public')->putFileAs($this->pathUpload, $file, $filename);
            } else {
                $image = $manager->read($file)
                    ->resize(null, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->toWebp(quality: 95)
                    ->toString();

                Storage::disk('public')->put($this->pathUpload . $filename, $image);
            }

            $data['path_image'] = $this->pathUpload . $filename; 
        }

        if ($request->hasFile('path_file')) {
            $file = $request->file('path_file');
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.pdf';

            // Salva direto no storage
            Storage::putFileAs($this->pathUpload, $file, $filename);

            $data['path_file'] = $this->pathUpload . $filename;
        }
        
        try {
            DB::beginTransaction();            
                $product = Product::create($data);
            DB::commit();

            session()->flash('success', __('dashboard.response_item_create'));
            return redirect()->route('admin.dashboard.product.edit', $product->id);
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Alert::error('error', __('dashboard.response_item_error_create'));
            return redirect()->back();
        }
    }

    public function edit(Product $product)
    {
        $settingTheme = (new SettingThemeRepository())->settingTheme();
        if(!Auth::user()->hasRole('Super') && 
          !Auth::user()->can('usuario.tornar usuario master') && 
          !Auth::user()->hasPermissionTo('noticias.visualizar') && 
          !Auth::user()->hasPermissionTo('noticias.editar')){
            return view('admin.error.403', compact('settingTheme'));
        }

        $product = $product->with(['galleries' => function($query){
            $query->orderBy('sorting', 'ASC');
        }])->find($product->id);
        
        $categories = ProductCategory::active()->sorting()->get();
        $brands = Brand::active()->sorting()->get();

        $productCategory = [];

        foreach ($categories as $category) {
            $productCategory[$category->id] = $category->title;
        }

        $productBrand = [];

        foreach ($brands as $brand) {
            $productBrand[$brand->id] = $brand->title;
        }
        return view('admin.blades.product.edit', compact('product', 'categories', 'productCategory', 'productBrand'));
    }

     public function uploadImageCkeditor(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $mime = $file->getMimeType();

            // Nome do arquivo sem extensão + .webp
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.webp';

            // Caminho de armazenamento
            $pathUpload = 'uploads/product_images/';

            $manager = ImageManager::gd(); // ou ->imagick() se preferir

            if ($mime === 'image/svg+xml') {
                // Apenas copiar o SVG sem conversão
                Storage::disk('public')->putFileAs($pathUpload, $file, $filename);
            } else {
                // Converter em WEBP
                $image = $manager->read($file)
                    ->resize(null, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->toWebp(quality: 95)
                    ->toString();

                Storage::disk('public')->put($pathUpload . $filename, $image);
            }

            $url = asset('storage/' . $pathUpload . $filename);

            return response()->json([
                'uploaded' => 1,
                'fileName' => $filename,
                'url' => $url
            ]);
        }

        return response()->json([
            'uploaded' => 0,
            'error' => ['message' => 'Upload falhou.']
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->all();
        $data['active'] = $request->active ? 1 : 0;
        $data['slug'] = Str::slug($request->title);

        $manager = new ImageManager(new GdDriver());

        $request->validate([
            'sizes'   => 'array|nullable',
            'sizes.*' => 'string|max:50|nullable',
            'path_image' => ['nullable', 'file', 'image', 'max:2048', 'mimes:jpg,jpeg,png,gif'],
            'path_file' => ['nullable', 'file', 'mimes:pdf', 'max:3072'] 
        ]);

        // Imagem principal
        if ($request->hasFile('path_image')) {
            $file = $request->file('path_image');
            $mime = $file->getMimeType();
            $filename = Str::uuid() . '.webp';

            if ($mime === 'image/svg+xml') {
                Storage::disk('public')->putFileAs($this->pathUpload, $file, $filename);
            } else {
                $image = $manager->read($file)
                    ->resize(null, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->toWebp(quality: 95)
                    ->toString();

                Storage::disk('public')->put($this->pathUpload . $filename, $image);
            }

            if (!empty($product->path_image)) {
                Storage::disk('public')->delete($product->path_image);
            }

            $data['path_image'] = $this->pathUpload . $filename; 
        }

        if ($request->has('delete_path_image')) {
            if (!empty($product->path_image)) {
                Storage::disk('public')->delete($product->path_image);
            }
            $data['path_image'] = null;
        }

        if ($request->hasFile('path_file')) {
            $file = $request->file('path_file');
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.pdf';

            // Apaga o arquivo anterior (se existir)
            if (!empty($product->path_file) && Storage::exists($product->path_file)) {
                Storage::delete($product->path_file);
            }

            // Salva o novo PDF
            Storage::putFileAs($this->pathUpload, $file, $filename);

            $data['path_file'] = $this->pathUpload . $filename;
        }

                // Se o usuário pediu para remover via Dropify
        if ($request->has('delete_path_file')) {
            if (!empty($product->path_file) && Storage::exists($product->path_file)) {
                Storage::delete($product->path_file);
            }
            $data['path_file'] = null;
        }

        try {
            DB::beginTransaction();
            // dd($data);
                $product->fill($data)->save();
            DB::commit();

            session()->flash('success', __('dashboard.response_item_update'));
            return redirect()->route('admin.dashboard.product.index');
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Alert::error('error', __('dashboard.response_item_error_update'));
            return redirect()->back();
        }
    }


    public function destroy(Product $product)
    {
        Storage::delete(isset($product->path_image)??$product->path_image);
        Storage::delete(isset($product->path_file)??$product->path_file);
        $product->delete();
        Session::flash('success',__('dashboard.response_item_delete'));
        return redirect()->back();
    }

    public function destroySelected(Request $request)
    {    
        foreach ($request->deleteAll as $productId) {
            $product = Product::find($productId);
    
            if ($product) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($product)
                    ->event('multiple_deleted')
                    ->withProperties([
                        'attributes' => [
                            'id' => $productId,
                            'title' => $product->title,
                            'slug' => $product->slug,
                            'sizes' => $product->sizes,
                            'description' => $product->description,
                            'text' => $product->text,
                            'path_image' => $product->path_image,
                            'path_file' => $product->path_file,
                            'active' => $product->active,
                            'sorting' => $product->sorting,
                            'event' => 'multiple_deleted',
                        ]
                    ])
                    ->log('multiple_deleted');
            } else {
                \Log::warning("Item com ID $productId não encontrado.");
            }
        }
    
        $deleted = Product::whereIn('id', $request->deleteAll)->delete();
    
        if ($deleted) {
            return Response::json(['status' => 'success', 'message' => $deleted . ' '.__('dashboard.response_item_delete')]);
        }
    
        return Response::json(['status' => 'error', 'message' => 'Nenhum item foi deletado.'], 500);
    }

    public function sorting(Request $request)
    {
        foreach($request->arrId as $sorting => $id) {
            $product = Product::find($id);
    
            if ($product) {
                $product->sorting = $sorting;
                $product->save();
            } else {
                Log::warning("Item com ID $id não encontrado.");
            }

            if($product) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($product)
                    ->event('order_updated')
                    ->withProperties([
                        'attributes' => [
                            'id' => $id,
                            'title' => $product->title,
                            'slug' => $product->slug,
                            'sizes' => $product->sizes,
                            'description' => $product->description,
                            'text' => $product->text,
                            'path_image' => $product->path_image,
                            'active' => $product->active,
                            'sorting' => $product->sorting,
                            'event' => 'order_updated',
                        ]
                    ])
                    ->log('order_updated');
            } else {
                \Log::warning("Item com ID $id não encontrado.");
            }
        }
    
        return Response::json(['status' => 'success']);
    }
}

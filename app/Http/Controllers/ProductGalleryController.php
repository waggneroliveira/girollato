<?php

namespace App\Http\Controllers;

use App\Models\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductGalleryController extends Controller
{
    protected $pathUploadImage = 'admin/uploads/productGallery/file';
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();

            $request->validate([
                'file.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'product_id' => 'required|exists:products,id'
            ]);
            // dd($data);
            
            foreach ($request->file('file') as $file) {
                $path = $file->store($this->pathUploadImage, 'public');
                
                ProductGallery::create([
                    'product_id' => $request->product_id,
                    'file' => $path,
                    'active' => 1,
                ]);
            }

            DB::commit();
            return redirect()->back()->with('success', 'Arquivos enviados com sucesso!');
            
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao enviar arquivos: ' . $e->getMessage());
        }
    }

    public function update(Request $request, ProductGallery $productGallery)
    {
        //
    }

    public function destroy(ProductGallery $productGallery)
    {
        Storage::delete(isset($productGallery->file) ? $productGallery->file : '');
        $productGallery->delete();

        Session::flash('success','Arquivo(s) deletado com sucesso!');
        return redirect()->route('admin.dashboard.galleryApprovalRequest');
    }

        public function destroySelected(Request $request)
    {
        if($deleted = ProductGallery::whereIn('id', $request->deleteAll)->delete()){
            return Response::json
            (
                [
                    'status' => 'success',
                    'message' => $deleted.' itens deletados com sucessso!'
                ]
            );
        }
    }

    public function sorting(Request $request)
    {
        foreach($request->arrId as $sorting => $id) {
            $productGallery = ProductGallery::find($id);
    
            if ($productGallery) {
                $productGallery->sorting = $sorting;
                $productGallery->save();
            } else {
                Log::warning("Item com ID $id não encontrado.");
            }

            if($productGallery) {
                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($productGallery)
                    ->event('order_updated')
                    ->withProperties([
                        'attributes' => [
                            'id' => $id,
                            'path_image' => $productGallery->path_image,
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

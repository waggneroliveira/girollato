<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function productAll(Request $request)
    {
        $category = $request->get('category');
        $brand = $request->get('brand');
        $search = $request->get('search');

        $products = Product::with(['category', 'brand'])
        ->whereHas('category', fn($q) => $q->active()) // só pega produto se a categoria estiver ativa
        ->whereHas('brand', fn($q) => $q->active())    // só pega produto se a marca estiver ativa
        ->when($category && $category !== 'all', fn($query) => 
            $query->whereHas('category', fn($q) => $q->where('slug', $category)->active())
        )
        ->when($brand && $brand !== 'all', fn($query) => 
            $query->whereHas('brand', fn($q) => $q->where('slug', $brand)->active())
        )
        ->when($search, fn($query) => 
            $query->where(fn($q) => 
                $q->where('title', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%")
            )
        )
        ->active()
        ->sorting()
        ->get();

        // Categorias só aparecem se tiver produto ativo e marca ativa
        $productCategories = ProductCategory::whereHas('products', function($query){
            $query->active()->whereHas('brand', fn($q) => $q->active());
        })
        ->active()
        ->sorting()
        ->get();

        // Marcas só aparecem se tiver produto ativo e categoria ativa
        $brands = Brand::whereHas('products', function($query){
            $query->active()->whereHas('category', fn($q) => $q->active());
        })
        ->active()
        ->sorting()
        ->get();

        $title = 'Todos os Produtos';

        if ($category && $brand) {
            $categoryModel = ProductCategory::active()->where('slug', $category)->first();
            $brandModel = Brand::active()->where('slug', $brand)->first();

            if (!$categoryModel || !$brandModel) {
                $products = collect();
                $title = 'Nenhum produto encontrado';
            } else {
                $title = "{$categoryModel->title} - {$brandModel->title}";
            }
        } elseif ($category) {
            $categoryModel = ProductCategory::active()->where('slug', $category)->first();
            if ($categoryModel) {
                $title = $categoryModel->title;
            } else {
                $products = collect();
                $title = 'Nenhum produto encontrado';
            }
        } elseif ($brand) {
            $brandModel = Brand::active()->where('slug', $brand)->first();
            if ($brandModel) {
                $title = $brandModel->title;
            } else {
                $products = collect();
                $title = 'Nenhum produto encontrado';
            }
        } else {
            $title = 'Todos os Produtos';
        }

        if ($request->ajax()) {
            return response()->json([
                'html' => view('client.includes.products', compact('products', 'title'))->render(),
                'title' => $title
            ]);
        }

        return view('client.blades.products', compact(
            'products',
            'productCategories',
            'brands',
            'title',
        ));
    }

    public function productView($category = null, $slug = null){
        if (!$category || !$slug) {
            return view('client.errors.404');
        }else{
            
        }

        $product = Product::with(['category', 'brand', 'galleries' => fn($q) => $q->active()->sorting()])
        ->whereHas('category', fn($q) => $q->active())
        ->whereHas('brand', fn($q) => $q->active())
        ->where('slug', $slug)
        ->active()
        ->first();

        // $product = Product::with(['category' => function($query) use ($category) {
        //     $query->where('slug', '=', $category)->active()->sorting();
        // }])
        // ->with(['galleries' => function($query){
        //     $query->sorting();
        // }])
        // ->where('slug', $slug)
        // ->active()
        // ->first();

        if ($product == null) {
            return view('client.errors.404');
        }
        
        return view('client.blades.product', compact(
            'product'
        ));
    }
}

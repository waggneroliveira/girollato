<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{

    public function productView($category = null, $slug = null){
        
        if (!$category && !$slug) {
            return view ('client.errors.404');
        }
        $product = Product::with(['category' => function($query ) use ($category, $slug) {
            $query->where('slug', '=', $category);
        }])
        ->where('slug', $slug)
        ->first();
        dd($product);
        return view('client.blades.product', compact(
            'product'
        ));
    }
}

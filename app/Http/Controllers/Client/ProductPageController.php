<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{

    public function productView($category = null, $slug = null){
        if (!$category || !$slug) {
            return view('client.errors.404');
        }else{
            
        }

        $product = Product::with(['category' => function($query ) use ($category) {
            $query->where('slug', '=', $category)->sorting();
        }])
        ->with(['galleries' => function($query){
            $query->sorting();
        }])
        ->where('slug', $slug)
        ->first();

        if ($product == null) {
            return view('client.errors.404');
        }
        
        return view('client.blades.product', compact(
            'product'
        ));
    }
}

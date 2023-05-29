<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {
        $product = Product::find($request->id);
        // dd($product);
        $brede = ['title' => $product->product_name, 'link' => 'single?id=' . $product->id];
        return view('website.single', compact('product','brede'));
    }
}

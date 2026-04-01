<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Product $product, Request $request){
        $data = $request->validate([
            'title' => 'string|required',
            'description' => 'string|required',
            'price' => 'required|decimal:0,2'
        ]);
        $product->create($data);
        return redirect()->back();
    }

    public function show(Product $product){
        return view('product.show', compact('product'));
    }
}
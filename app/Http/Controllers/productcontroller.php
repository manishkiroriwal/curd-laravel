<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productcontroller extends Controller
{
    public function index(){
        $products = Product::all();
        return view('index',['products' => $products]);

    }
    public function store(Request $request){
        // dd($request->name);
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:2',
            'description' => 'required'
        ]);
        $newProduct = Product::create($data);
        return redirect('/products');
    }
    public function create(){
        return view('form');
    }
    public function edit(Product $product){
        return view('edit',['product' => $product]);
    }
    public function update(Product $product,Request $request){
        // dd($request);
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:2',
            'description' => 'required'
        ]);

        $product->update($data);
        return redirect(route('product.index'))->with('success','Product updated successfully');
    }
    public function delete(Product $product){
        $product->delete();
        return redirect(route('product.index'));
    }

}

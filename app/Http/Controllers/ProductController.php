<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\Common;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    use Common ;

    
    public function create(){
        return view('add_product');
    }
    public function index()
    {
        $products = Product::get();
        return view('products', compact('products'));
    }

    
    public function fashion(){
        $products = Product::latest() ->take(3)->get();
        return view('fashion_index', compact('products'));
    }
    
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|max:1000',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);
       
        $data['image'] =$this->uploadFile($request->image,'assets/images/product');
       Product::create($data);
       return "Product added successfully";
    }
    public function edit(string $id)
    {
    
        $product = Product::findOrFail($id);
        return view('edit_product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'sometimes|string',
            'price' => 'sometimes|numeric|min:0',
            'description' => 'sometimes|string|max:1000',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
           
        ]);

    if ($request->hasFile('image')) {
        $data['image'] =$this->uploadFile($request->image,'assets/images/product');
    }
        Product::where('id', $id)->update($data);
        return redirect()->route('index');
    }
}

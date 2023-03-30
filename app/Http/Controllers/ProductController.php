<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Product= Product::all();
        return response()->json(['massage'=>'success' ,
        'data'=> $Product]);
    }

    public function store(Request $request)
    {
        $Products= Product::create($request->all());
        return response()->json(['massage'=>'data inserted' ,
        'data'=> $Products]);
    }

    /**
     * Display the specified resource.
     */
        public function show(product $product)
    {
        $product= product::find($product);
        return response()->json(['massage'=>'show data' ,
        'data'=> $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $product->update($request->all());
        return response()->json(['massage'=>'data updated' ,
        'data'=> $product]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return response()->json(['massage'=>'data deleted' ,
        'data'=> $product]);
    }
}

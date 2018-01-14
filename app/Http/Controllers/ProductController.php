<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StoreProductRequest;

    
use Illuminate\Support\Collection as Collection;
use App\Product;
use App\Categorie;
use App\Provider;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $category= Categorie::all();
        $provider= Provider::all();              
        return view('admin.product.index', compact('products','category','provider')); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= Categorie::all()->lists('category_name','id');
        $provider= Provider::all()->lists('supplier_name','id');
        return view('admin.product.create',compact('category','provider'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {               
        $product= new \App\Product($request->all());
        $product->save();
        return redirect()->route('product_index');    

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $product;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category= Categorie::all()->lists('category_name','id');
        $provider= Provider::all()->lists('supplier_name','id');
        return view('admin.product.edit',compact('product','category','provider'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductRequest $request,Product $product) 
    {
        $product->fill($request->all());
        $product->save();
        $message ='Producto actualizado correctamente!';        
        return redirect()->route('product_index')->with('message', $message);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $deleted = $product->delete();        
        $message = $deleted ? 'Producto eliminado correctamente!' : 'La Producto NO pudo eliminarse!';        
        return redirect()->route('product_index')->with('message', $message);
    }
}

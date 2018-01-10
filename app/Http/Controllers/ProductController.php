<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StorageProductRequest;

    
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
    public function store(StorageProductRequest $request)
    {
        
          $this->validate($request, [
            'product_code'  => 'required|max:100',
            'providers_id' => 'required|max:100',
            'categories_id'  => 'required|max:100',
            'product_name'  => 'required|max:100',
            'quatity'  => 'required|max:100',
            'purchase_price'  => 'required|max:100'
            
        ]);
        $product= new \App\Product($request->all());
        $product->save();
        return redirect()->route('product_index');    

        dd("hola");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

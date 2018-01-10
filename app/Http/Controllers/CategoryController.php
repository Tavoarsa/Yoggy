<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Categorie;
use App\Http\Requests\StoreCategoyRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys= Categorie::all();
        return view('admin.category.index', compact('categorys')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoyRequest $request)
    {        
        $this->validate($request, [
            'category_name'  => 'required|max:100',
            'descrition' => 'required|max:100'
            
        ]);        
        $category= new \App\Categorie($request->all());
        $category->save();
        return redirect()->route('category_index');       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $category)
    {
        return view('admin.category.edit',compact('category'));       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoyRequest $request, Categorie $category)
    {
        $category->fill($request->all());
        $category->save();
        $message ='Categoria actualizada correctamente!';        
        return redirect()->route('category_index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $category)
    {
        $deleted = $category->delete();
        
        $message = $deleted ? 'Categoria eliminado correctamente!' : 'El Categoria NO pudo eliminarse!';
        
        return redirect()->route('category_index')->with('message', $message);
    }
}

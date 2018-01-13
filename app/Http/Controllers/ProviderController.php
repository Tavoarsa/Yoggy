<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\StoreProviderRequest;
use App\Provider;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::all();
        return view('admin.provider.index', compact('providers')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.provider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProviderRequest $request, Provider $provider)
    {
        $provider= new \App\Provider($request->all());                 
        $provider= $provider->save();           
        $message = $provider ? 'Proveedor agregado correctamente!' : 'El proveedor NO pudo agregarse!';
        
        return redirect()->route('provider_index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Provider $provider)
    {
        return $provider;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Provider $provider)
    {
       return view('admin.provider.edit',compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProviderRequest $request, Provider $provider)
    { 
        $provider->fill($request->all());  
        $updated = $provider->save();        
        $message = $updated ? 'Proveedor actualizado correctamente!' : 'El Proveedor NO pudo actualizarse!';        
        return redirect()->route('provider_index')->with('message', $message);    
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        $deleted = $provider->delete();
        
        $message = $deleted ? 'Proveedor eliminado correctamente!' : 'El Proveedor NO pudo eliminarse!';
        
        return redirect()->route('provider_index')->with('message', $message);
    }
}

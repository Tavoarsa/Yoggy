<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProviderRequest;
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
    public function store(ProviderRequest $request, Provider $provider)
    {    
        $provider->supplier_name = $request->get('supplier_name');
        $provider->contact_name = $request->get('contact_name');
        $provider->supplier_position = $request->get('supplier_position');
        $provider->address = $request->get('address');
        $provider->phone = $request->get('phone');
        $provider->postal_code = $request->get('postal_code');    
        $provider->city = $request->get('city');
        $provider->status = $request->get('status');
        $provider->way_pay = $request->get('way_pay');
        $provider->notes = $request->get('notes');
        $provider->email = $request->get('email');        
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
    public function update(Request $request, Provider $provider)
    {
       // dd($provider);
        $this->validate($request, [
            'supplier_name'  => 'required|max:100',
            'phone' => 'required|max:100',
            'email'     => 'required|email',
            'contact_name'      => 'required|min:4|max:20',            
            
        ]);
        

        $provider->supplier_name = $request->get('supplier_name');
        $provider->contact_name = $request->get('contact_name');
        $provider->supplier_position = $request->get('supplier_position');
        $provider->address = $request->get('address');
        $provider->phone = $request->get('phone');
        $provider->postal_code = $request->get('postal_code');    
        $provider->city = $request->get('city');
        $provider->status = $request->get('status');
        $provider->way_pay = $request->get('way_pay');
        $provider->notes = $request->get('notes');
        $provider->email = $request->get('email');        
       

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

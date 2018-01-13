<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\EditUserRequest;

class UserController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::orderBy('first_name')->paginate(5);
        return view('admin.user.index',compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request, User $user)
    {
         $user= new \App\User($request->all());
        $user->password=  bcrypt($request->get('password'));
        $user= $user->save();    
        $message = $user ? 'Usuario agregado correctamente!' : 'El usuario NO pudo agregarse!';        
        return redirect()->route('user_index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit',compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, User $user)
    {
        $user->fill($request->all()); 
        if($request->get('password') != "") 
            $user->password=  bcrypt('password');
            //$user->password = $request->get('password');        
        $updated = $user->save();        
        $message = $updated ? 'Usuario actualizado correctamente!' : 'El Usuario NO pudo actualizarse!';        
        return redirect()->route('user_index')->with('message', $message);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{
    public function index(){

    	$users= User::orderBy('first_name')->paginate(5);
    	

    	return view('admin.user.index',compact('users'));

    }

    public function show(User $user){

    	return $user;
    }

    public function edit($id){

    	$users= User::where('id',$id)->get();

    	return view('admin.user.edit',compact('users'));
}


}

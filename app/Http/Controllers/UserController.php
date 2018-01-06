<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{
    function index(){

    	$users= User::orderBy('first_name')->paginate(5);
    	

    	return view('admin.user.index',compact('users'));

    }
}

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {


Route::get('/', function () {
    return view('/home');
});





Route::group(['middleware' => 'auth'], function (){


	Route::get('/yoggy', function () {
    return view('/yoggy');
});


Route::group(['middleware' => 'admin'], function () {

/*------------------User----------------*/
/*Rutas para controlar el modulo de Usuario
	Registrar, Editar*/

Route::get('admin',[

	  'as'=>'admin',
	  'uses'=>'AdminController@index'
	]);

Route::get('admin/user',[

	  'as'=>'user_index',
	  'uses'=>'UserController@index'
]);

Route::get('user/edit/{id}',[

	  'as'=>'user_edit',
	  'uses'=>'UserController@edit'
]);

/*---------------------End User------------*/

});

/*---------------------End  middleware admin------------*/

});

Route::auth();

});











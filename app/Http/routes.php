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
/*------------------ Midlewere Web----------------*/
Route::group(['middleware' => ['web']], function () {


Route::get('/', function () {
    return view('/home');
});

Route::group(['middleware' => 'auth'], function (){

//Tiene que estar registrado para poder ingresar a  esta ruta.
	Route::get('/yoggy', function () {
    return view('/yoggy');
});
/*------------------ Midlewere Admin----------------*/
Route::group(['middleware' => 'admin'], function () {
Route::get('admin',[

	  'as'=>'admin',
	  'uses'=>'AdminController@index'
	]);
/*------------------User----------------*/
/*Rutas para controlar el modulo de Usuario
	Registrar, Editar*/
Route::resource('user','UserController');
Route::get('user',[

	  'as'=>'user_index',
	  'uses'=>'UserController@index'
]);
/*---------------------End User------------*/

/*------------------Provider----------------*/
Route::resource('provider','ProviderController');

Route::get('provider',[

	  'as'=>'provider_index',
	  'uses'=>'ProviderController@index'
]);
/*---------------------End provider------------*/

/*------------------Category----------------*/
Route::resource('category','CategoryController');

Route::get('category',[

	  'as'=>'category_index',
	  'uses'=>'CategoryController@index'
]);
/*---------------------End Category------------*/
});

/*---------------------End  middleware admin------------*/

});

Route::auth();

});
/*---------------------End  middleware web------------*/










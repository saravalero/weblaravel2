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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/productos', function () {
   $productos = DB::table('productos')->paginate(6);
    return view('listadoproductos', ['productos' => $productos]);
});
Route::post('/guardaproducto','ProductosController@store');
Route::get('/insertaproducto','ProductosController@create');
Route::get('/actualizaproducto/{id}','ProductosController@edit');

Route::auth();

Route::get('/home', 'HomeController@index');

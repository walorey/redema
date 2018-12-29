<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');//no hace falta poner welcome.blade.php, si esta dentro de una carpeta se usa '.' en vez de '/' aunque tambien se puede
});

Route::group(['prefix'=>'Admin'], function(){

	//averiguar como hacer que se llame la ruta crear en vez de create
	Route::resource('Usuarios','UsersController');
	Route::get('Usuarios/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'Usuarios.destroy'
	]);

	Route::resource('Categorias', 'CategoriesController');
	Route::get('Categorias/{id}/destroy', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'Categorias.destroy'
	]);

});

//app/provider/appserviceprovider.php ahi cambie create por crear
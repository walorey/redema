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
    return view('index');//no hace falta poner welcome.blade.php, si esta dentro de una carpeta se usa '.' en vez de '/' aunque tambien se puede
});

Route::group(['prefix'=>'Admin', 'middleware'=>'auth'], function(){

	//averiguar como hacer que se llame la ruta crear en vez de create
	//app/provider/appserviceprovider.php ahi cambie create por crear
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

	Route::resource('Tags', 'TagsController');
	Route::get('Tags/{id}/destroy', [
		'uses' => 'TagsController@destroy',
		'as' => 'Tags.destroy'
	]);

	Route::resource('Publicaciones', 'PublicacionesController');

});


// Auth::routes();

//para iniciar como administrador

Route::get('/Admin', 'HomeController@index');

Route::get('Admin/auth/login', [
    'uses'  => 'Auth\LoginController@showLoginForm',
    'as'    => 'Admin.auth.login'
]);

Route::post('Admin/auth/login', [
    'uses'  => 'Auth\LoginController@login',
    'as'    => 'Admin.auth.login'
]);

Route::get('Admin/auth/logout', [
    'uses'  => 'Auth\LoginController@logout',
    'as'    => 'Admin.auth.logout'
]);
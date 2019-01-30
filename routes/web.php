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

//rutas front

Route::get('/', [
    'uses' => 'FrontController@index',
    'as'   => '/'
]);

Route::get('/login',[

	'uses'  => 'loginFrontController@showLoginForm',
    'as'    => 'auth.login'

]);

Route::post('/login', [
    'uses'  => 'loginFrontController@login',
    'as'    => 'auth.login'
]);

Route::get('registrarse', function(){
	return view('auth.register');
});

Route::get('/Publicaciones', [
	'uses' => 'FrontController@index2',
    'as'   => 'front.publicaciones.index'
]);

Route::get('Categorias/{name}', [
	'uses' => 'FrontController@buscarCategoria',
	'as'   => 'front.buscar.categoria'
]);


Route::get('Tag/{name}', [
	'uses' => 'FrontController@buscarTag',
	'as'   => 'front.buscar.tag'
]);


//este no funciona

Route::post('/register',[
	'uses' =>'Auth\RegisterController@validator',
	'as'   =>'auth.register'
]);

//rutas admin


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
	Route::get('Publicaciones/{id}/destroy', [
		'uses' => 'PublicacionesController@destroy',
		'as' => 'Publicaciones.destroy'
	]);

	Route::get('Imagenes',[
		'uses' => 'ImagenesController@index',
		'as' => 'Imagenes.index'
	]);

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
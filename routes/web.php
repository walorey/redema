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
Route::group(['prefix'=>'publicaciones'], function(){

	Route::get('view/{id}',[
		'uses' => 'TestController@view',
		'as' => 'publicacionesView'
	]);

});
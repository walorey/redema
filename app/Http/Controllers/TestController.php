<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;

class TestController extends Controller
{	//de esta forma se relaciona todo, si vos pones el id de la publicacion te tira quien la hizo, con que tag y categoria
    public function view($id)
    {
    	$publicacion = Publicacion::find($id);
    	
    	$publicacion->categoria;
    	$publicacion->usuario;
    	$publicacion->tags;
    	
    	return view('test.index', ['publicacion' => $publicacion]);
    }
}

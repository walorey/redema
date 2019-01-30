<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;
use Carbon\Carbon;
use App\Categoria;

class FrontController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function index()
    {
        $publicaciones = Publicacion::orderBy('id', 'DES')->get()->take(6);
        $publicaciones->each(function($publicaciones){
            $publicaciones->categoria;
            $publicaciones->imagenes;
        });
        return view('front.index')
            ->with('publicaciones', $publicaciones);
    }

    public function index2()
    {
        $publicaciones = Publicacion::orderBy('id', 'DES')->paginate(9);
        $publicaciones->each(function($publicaciones){
            $publicaciones->categoria;
            $publicaciones->imagenes;
        });
        return view('front.publicaciones.index')
            ->with('publicaciones', $publicaciones);
    }
    
    public function buscarCategoria($name)
    {
        $categoria = Categoria::BuscarCategoria($name)->first();
        $publicaciones = $categoria->publicaciones;
        dd($publicaciones);
    }
    
}

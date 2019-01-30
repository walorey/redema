<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagen;

class ImagenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $imagenes = Imagen::orderBy('id', 'ASC')->paginate(5);;
        $imagenes->each(function($imagenes){
            $imagenes->publicacion;
        });

        return view('admin.imagenes.index')
            ->with('imagenes', $imagenes);
    }

}

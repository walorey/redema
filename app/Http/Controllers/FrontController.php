<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;
use Carbon\Carbon;
use App\Categoria;
use App\Tag;

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
        return view('index')
            ->with('publicaciones', $publicaciones);
    }
 // ABRE LAU URL testp tienes doble pantalla?
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


/*esoera mi encendedor no prende deja busco otro
    1.- No hace falta que uses each, cuando puedes usar compact en ves de with.
    2.- Cree la vista categoria que es la misma que index, de hecho espera.
    // AUN HAY UN PROBLEMA.
    Estas usando first y first no tiene, desde cuando ese tutorial que siges .-. 2015, igu a.l- creo que te fuiste demasiado xd no se que estas haciendo con las iamgenes, funciona asi como esta.
    El problema es que el scope es first, y first no es una coleccion de datos
    entonces para paginar luego esta otro problema que es de una version ya vieja
    lo que se debe de hacer, es mezclar por cada publicacion en categoria
    mezclas las imagenes de esa ublicacion pero dejame veo jaja o ya te vas? tengo tiempo
    OK

    DEJA HAGO ESTO EN MI PC ES QUE EN MI PC TENGO EL JSON VIEWER 
ESPERA CREO QUE YA METIERON ESTO EN LA ANTERIOR, PERO NO RECUERDO DEJAME VEO LA DOCUMENTACIONplo
*/
    public function buscarCategoria($name)
    {
         $publicaciones = Categoria::with(['publicaciones.imagenes','publicaciones'])->where(
            'name', $name)->paginate(2);

        $categoria = Categoria::BuscarCategoria($name)->get();
        $tags = Tag::get();
        $categorias = Categoria::get();
       return view('front.publicaciones.categoria', compact('publicaciones','categorias','tags'));
    }
    
}

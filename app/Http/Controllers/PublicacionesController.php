<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Tag;
use App\Publicacion;
use Illuminate\Support\Facades\Auth;
use App\Imagen;
use App\Http\Requests\PublicacionRequest;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $publicaciones = Publicacion::orderBy('id', 'DESC')->paginate(5);
        $publicaciones->each(function($publicaciones){
            $publicaciones->categoria;
            $publicaciones->usuario;
        });

        dd($publicaciones);
        return view('admin.publicaciones.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categorias = Categoria::orderBy('name','ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name','ASC')->pluck('name', 'id');

        return view('admin.publicaciones.create')
            ->with('categorias', $categorias)   
            ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicacionRequest $request)//$request es todo lo que recibo del formulario
    {   
        //Manipulacion de imagen
        if ($request->file('image'))
        {
            $file = $request->file('image');
            $name = 'reddema.imagen_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path(). '/img/publicaciones/';
            $file->move($path, $name);
        }

        $publicacion = new Publicacion($request->all());
        $publicacion->user_id = \Auth::user()->id;
        $publicacion->save();

        //ahora puedo rellenar la tabla pibote (tags)
        $publicacion->tags()->sync($request->tags);

        $image = new Imagen();
        $image->name = $name;
        $image->publicacion()->associate($publicacion);
        $image->save();

        flash("Se ha publicado con éxito la publicación" .' '.$publicacion->title)->success()->important();

        return redirect()->route('Publicaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

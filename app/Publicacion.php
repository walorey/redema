<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table = "publicaciones";

    protected $fillable = ['title','content','category_id','user_id'];

    //RELACIONES
    //como es una relacion uno con muchos, el uno seria la categoria por eso la funcion se llama categoria en singular

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria');
    }

    public function usuario()
    {
    	return $this->belongsTo('App\User','id','id');
    }

    public function imagenes()
    {
    	return $this->hasMany('App\Imagen');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }
}

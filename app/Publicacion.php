<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Publicacion extends Model
{   
    use Sluggable;

    protected $table = "publicaciones";

    protected $fillable = ['title','content','categoria_id','user_id', 'imagen'];

    //RELACIONES
    //como es una relacion uno con muchos, el uno seria la categoria por eso la funcion se llama categoria en singular xd

    public function categoria()
    {	//como segundo parametro se pone la llave foranea
    	return $this->belongsTo('App\Categoria');
    }

    public function usuario()
    {
    	return $this->belongsTo('App\User','user_id');
    }

    public function imagenes()
    {
    	return $this->hasMany('App\Imagen');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function scopeSearch($query, $title)
    {
        $query->where('title', 'LIKE', '%'.$title.'%');
    }
}

//$publicacion->tags()->attach(1) attach recibe como parametro el id o la variable donde se encuentra el tag

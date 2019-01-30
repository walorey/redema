<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";

    protected $fillable = ['name'];

 	//como es una relacion uno con muchos, muchos serian las publicaciones por eso la funcion se llama categoria en plural

    public function publicaciones()
    {
    	return $this->hasMany('App\Publicacion');
    }

    public function scopeBuscarCategoria($query, $name)
    {
    	return $query->where('name', '=', $name);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table ="comentarios";

    protected $fillable = ['content','user_id','publicacion_id'];

    public function usuario()
    {
    	return $this->belongsTo('App\User','user_id');
    }

    public function publicacion()
    {
    	return $this->belongsTo('App\Publicacion','publicacion_id');
    }
}

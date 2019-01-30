<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Categoria;
use App\Tag;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   //asi le cambio el nombre a la ruta definida
        Route::resourceVerbs([
        'create' => 'crear',
        'edit' => 'editar',
        ]);

     view()->composer('front.publicaciones.index', function ($view) {

        $categorias = Categoria::orderBy('name', 'asc')->get();
        $tags = Tag::orderBy('name', 'asc')->get();
        $view->with('categorias', $categorias )->with('tags', $tags);

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

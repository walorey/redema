<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/iconos/ico.png') }}">

    <title>Reddema, Red de Mascotas!</title>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/inicio.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
  </head>
  <body>
  
  @include('includes.barrainicio')



<div class="container conteiner1">
  <div class="row">
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h1 class="hcentrado">Únete a </h1>
    </div>
  </div>
  <div class="row">
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <img src="{{ asset('img/logoreddema300x90.png') }}" class="logochico">
      <img src="{{ asset('img/reddema400x120.png') }}" class="logogrande">
    </div>
  </div>
    <div class="row">
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h1 class="hcentrado">Red de Mascotas!</h1>
      
    </div>
  </div>
    <div class="row">
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h2 class="hcentrado">¡Sé parte de la comunidad mascotera más grande del país!</h2>
    </div>
  </div>
</div>
  
 

<!-- Seccion servicios -->
<div class="container seccionservicios">

 <section >
      
        <ul class="listacirculo">
          <li>
            <div class="circuloservicios cirimg1">
              <div class="cirinfo info1">
                <h4>Comparte tu dia a dia y el de tus mascotas!</h4>
                
              </div>
            </div>
            <p> Comparte</p>
          </li>
          <li>
            <div class="circuloservicios cirimg2">
              <div class="cirinfo info2">
                <h4>Adopta animales que buscan una familia</h4>
               </div>
            </div>
            <p>Adopta</p>
          </li>
          <li>
            <div class="circuloservicios cirimg3">
              <div class="cirinfo info3">
                <h4>Ayuda a animales perdidos o en estado crítico</h4>
              </div>
            </div>
            <p>Ayuda</p>
          </li>
          <li>
            <div class="circuloservicios cirimg4">
              <div class="cirinfo info4">
                <h4>descubre las novedades y consejos sobre nuestros amigos de cuatro patas</h4>
              </div>
            </div>
            <p>Descubre</p>
          </li>
        </ul>
        
      </section>
  
</div>




@extends('includes.footer')






  <script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('img/iconos/ico.png') }}">


    <title>Reddema, Red de Mascotas!</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}" >
    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">

   
  </head>

  <body class="iniciarsesion">

 @include('includes.barrainicio')




<div class="formulariosesion">
  
<div class="container">

      <form class="form-signin"  method="POST" action="{{ route('auth.login') }}">
        <h2 class="form-signin-heading fuenteform">Iniciar Sesión en Reddema</h2>
        @csrf
        <label for="inputEmail" class="sr-only ">Email</label>
        <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name ="email" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        <label for="inputPassword" class="sr-only ">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" name="password" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
        <button class="btn btn-lg btn-primary btn-block botonform" type="submit">Entrar</button>
        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
      </form>

    </div> <!-- /container -->



</div>

   
@extends('includes.footer')
    

  <script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
  </body>
</html>

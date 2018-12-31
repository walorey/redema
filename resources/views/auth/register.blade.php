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

  <body class="registrarse">


    @include('includes.barrainicio')

    <div class="formulariosesion">
      
        <div class="container">

              <form class="form-signin" method="POST" action="{{ route('register') }}">
                <h2 class="form-signin-heading fuenteformr">Crear una cuenta en Reddema</h2>

               @csrf
                 <input placeholder="Nombre"  id="name" type="text" class=" sinbordes form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                 <!-- aca deberia tirar el error del nombre pero no lo esta tirando -->

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif

                <input type="text" name="lastname" class=" sinbordes form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" value="{{ old('lastname') }}" id="lastname" required placeholder="Apellido">

                @if ($errors->has('lastname'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                @endif

                <!-- aca deberia tirar el error del apellido pero no lo esta tirando -->

                <label for="inputEmail" class="sr-only ">Email</label>
                <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} sinbordes" name="email" placeholder="Email" required>

                 @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <label for="inputPassword" class="sr-only ">Contraseña</label>
                <input type="password" name="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} contrados sinbordes" placeholder="Contraseña" required>
                
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <label for="inputPassword2" class="sr-only ">Reingrese la contraseña</label>
                <input id="password-confirm" type="password" name="password_confirmation" class="form-control contrados sinbordes" placeholder="Reingrese la contraseña" required>

                <button class="btn btn-lg btn-primary btn-block botonform" type="submit">Registrarse</button>
              </form>

        </div> <!-- /container -->



    </div>



    @extends('includes.footer')

    <script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
  </body>
</html>

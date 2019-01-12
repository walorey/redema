<nav class="navbar navbar-default contenedor-barra">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <a class="navbar-left" href="#"><img src="{{ asset('img/admin/reddema.png')}}"></a>

<!--       <form class="navbar-form navbar-left buscador-admin">
        <div class="form-group">
          <input type="text" class="form-control buscador-admin" placeholder="Buscar como administrador">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form> -->

@if(Auth::user())

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#212121;background-color:  #757575;" role="button" aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->name}}
          <span class="caret"></span>
        </a>
          <ul class="dropdown-menu">
            <li><a href="#" class="opciones-de-usuario"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Panel administrativo </a></li>
            <li><a href="#" class="opciones-de-usuario"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil </a></li>
            <li><a href="#" class="opciones-de-usuario"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Configuración </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('Admin.auth.logout')}}" class="opciones-de-usuario"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Salir </a></li>
          </ul>
        </li>
      </ul>

      <div class="btn-group navbar-right notificaciones-admin" role="group" aria-label="...">
        <button type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
        </button>
        <button type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
        </button>
      </div>
@else
<!--     <ul>
      <li>
        <button class="btn btn-info">
         <a href="{{route('Admin.auth.login')}}">Iniciar sesión</a>
        </button>
      </li>
    </ul> -->


@endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@if(Auth::user())
<div class="collapse navbar-collapse center-block" id="bs-example-navbar-collapse-1" style="background-color: #BDBDBD;">
  <ul class="nav navbar-nav lista-de-datos" >
    <li><a href="{{ route('Usuarios.index')}}">Usuarios</a></li>
    <li><a href="{{ route('Publicaciones.index')}}">Publicaciones</a></li>
    <li><a href="#">Comentarios</a></li>
    <li><a href="#">Imagenes</a></li>
    <li><a href="{{ route('Categorias.index')}}">Categorías</a></li>
    <li><a href="{{ route('Tags.index')}}">Tags</a></li>
  </ul>
</div>
@endif
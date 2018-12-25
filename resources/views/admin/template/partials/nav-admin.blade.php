<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <a class="navbar-left" href="#"><img src="{{ asset('img/admin/reddema.png')}}"></a>

      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar como administrador">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

    <div class="btn-group navbar-left" role="group" aria-label="...">

      <button type="button" class="btn btn-default">
        <span class="glyphicon glyphicon-bell" aria-hidden="true"></span
      </button>
      <button type="button" class="btn btn-default">
        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
      </button>
      
    </div>

    <div class="notificaciones navbar-left">
       <span class="glyphicon glyphicon-eye-open ojo-admin" aria-hidden="true"></span>
    </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Panel administrativo</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Configuración</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
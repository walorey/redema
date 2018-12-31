
<nav class="navbar navbar-default barraprincipal">
  <div class="container-fluid">
    <div class="navbar-header">
       <a class="navbar-brand logoinicio" href="index.php"><img src="img/reddema.png"></a>
    </div>

    <ul class="nav navbar-nav navbar-right">

      <li class="nav-item ">
        <button type="button" class="btn btn-info" style=" margin-top: 8px; margin-right: 5px;"><a class="nav-link boton-inicio" href="{{ route('login') }}">Iniciar Sesión</a></button>
        
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-success" style=" margin-top: 8px; margin-left: 5px;margin-right: 5px;"><a class="nav-link boton-inicio" href="{{ route('register') }}">Registrarse</a></button>
      </li>
    </ul>
  </div>
</nav>
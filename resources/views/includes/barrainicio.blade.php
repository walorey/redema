<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse barraprincipal">
  <button class="navbar-toggler navbar-toggler-right hidden-lg-up botonmenu" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Parte movil -->
  <div id="contenedor">
  	<div class="item item-1">
  		<a href="index.php" class="iconomovil"><img src="{{ asset('img/iconos/ico.png') }}" ></a>
  	</div>
  	<div class="item item-2">
  		<form class=" buscadorchico">
		          <input class="form-control inputbuscadorchico" type="text" placeholder="Buscar ">
		          <button class="btn btn-outline-success  botondebusqueda" type="submit"><img src="img/iconos/ico/glyphicons-28-search.png"></button>
		        </form>
  	</div>
  </div>

<!-- Fin parte movil -->

  <a class="navbar-brand logoinicio" href="index.php"><img src="img/reddema.png"></a>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">

  	<form class="form-inline mt-2 mt-md-0 buscadorgrande">
      <input class="form-control mr-sm-2 inputbuscador" type="text" placeholder="Buscar en Reddema">
      <button class="btn btn-outline-success my-2 my-sm-0 botondebusqueda" type="submit"><img src="img/iconos/ico/glyphicons-28-search.png"></button>
    </form>

    <ul class="navbar-nav ml-auto botonesderechos ">

    	

      <li class="nav-item ">
        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
      </li>
    </ul>
    


  </div>
</nav>

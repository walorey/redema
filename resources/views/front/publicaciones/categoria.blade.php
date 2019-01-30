<!DOCTYPE html>
<html>
<head>
	<title>Publicaciones</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
</head>
<body class="body-publicaciones">

  @include('includes.barrainicio')

  <form class="form-inline buscador-publicaciones">
	  <div class="form-group has-success has-feedback">
	    <div class="input-group">
	      <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
	      <input type="text" class="form-control" id="inputGroupSuccess3" aria-describedby="inputGroupSuccess3Status">
	    </div>
	    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	    <span id="inputGroupSuccess3Status" class="sr-only">(success)</span>
	  </div>
  </form>
  <div class="container">
  		
  	  <div class="row">
		  <div class="col-xs-6 col-md-2">
			@include('front.partials.aside')
		  </div>


		  <div class="col-xs-6 col-md-8">

		  	<div class="row">
			  @foreach($publicaciones as $publicacion)
			    <div class="col-sm-6 col-md-4">
			      <div class="thumbnail">
			        @foreach($publicacion['publicaciones'] as $publicImage)
			          @foreach($publicImage['imagenes'] as $imagen)
			            <img src="/img/publicaciones/{{ $imagen->name }}" alt="..."style="height: 200px!important;">
			           @endforeach
			        @endforeach
			        <div class="caption">
			          <h3>{{ $publicacion->title }}</h3>
			          <p>{{ $publicacion->categoria->name }}</p>
			          <p>{{ $publicacion->created_at->diffForHumans() }}</p>
			          <p><a href="#" class="btn btn-primary" role="button">Ver</a></p>
			        </div>
			      </div>
			    </div>
			    @endforeach 
			</div>
		
		  </div>


		  <div class="col-xs-6 col-md-2">
		  	@include('front.partials.aside-tag')
		  </div>
  	</div>

  </div>


  <script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js') }}"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
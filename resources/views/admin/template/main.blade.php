<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title' , 'Defecto')| Panel de administración</title>
	<link rel="stylesheet" href="{{ asset('css/admin/barra.css')}}">
	<link rel="stylesheet" href="{{ asset('css/general.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">

</head>
<body>

	@include('admin.template.partials.nav-admin')

	

	<div class="container">
		<h1>@yield( 'Encabezado')</h1>
		<br>
		@include('flash::message')
		@include('admin.template.partials.errores')
		@yield('content')
	</div>


	

	<script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	

</body>
</html>
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
		@yield('content')
	</div>

	<script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	
	<div class="footer-bottom">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<div class="copyright">

					© 2018, Reddema, Todos los derechos reservados

				</div>

			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<div class="design">

					 <!-- <a href="#">Franchisee </a> |  <a target="_blank" href="http://www.webenlance.com">Web Design & Development by Webenlance</a> -->
					 Reddema | Red de mascotas

				</div>

			</div>

		</div>

</body>
</html>
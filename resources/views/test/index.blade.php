<!DOCTYPE html>
<html>
<head>
	<title>{{ $publicacion->title }}</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">
</head>
<body>
"River campeon"
<br>
<h3>{{ $publicacion->usuario->name}} {{$publicacion->usuario->lastname}}</h3>
<h1>{{ $publicacion->title }}</h1> 
<hr>
{{ $publicacion->content}} | {{ $publicacion->categoria->name}} | 
@foreach($publicacion->tags as $tag)
	 {{$tag->name}}
@endforeach
</body>
</html>

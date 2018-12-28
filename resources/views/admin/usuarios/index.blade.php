@extends('admin.template.main')

@section('title', 'Listado')

@section('content')
	<table class="table">
  		<thead>
  			<th>Id</th>
  			<th>Nombre</th>
  			<th>Apellido</th>
  			<th>Email</th>
  			<th>Tipo</th>
  			<th>Acción</th>
  		</thead>
  		<tbody>
  			@foreach($usuarios as $usuario)
  				<tr>
	  				<td>{{$usuario->id}}</td>
	  				<td>{{$usuario->name}}</td>
	  				<td>{{$usuario->lastname}}</td>
	  				<td>{{$usuario->email}}</td>
	  				<td>{{$usuario->type}}</td>
	  				<td>hola</td>
  				</tr>
  			@endforeach
  		</tbody>
	</table>
@endsection
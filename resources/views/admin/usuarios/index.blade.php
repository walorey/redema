@extends('admin.template.main')

@section('title', 'Listado ')

@section('content')
	<br>
	<a href="{{ route('Usuarios.create')}}" class="btn btn-success">Registrar nuevo usuario</a>
	<br>
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
	  				<td>
	  					@if($usuario->type == "admin")
	  						<span class="label label-danger">{{$usuario->type}}</span>
	  					@else
	  						<span class="label label-primary">{{$usuario->type}}</span>
	  					@endif
	  					
	  				</td>
	  				<td>
	  					<a href="" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
	  					<a href="" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
	  				</td>
  				</tr>
  			@endforeach
  		</tbody>
	</table>
	{!! $usuarios->render()!!}
@endsection
@extends('admin.template.main')

@section('title', 'Listado ')
@section('Encabezado' , 'Lista de usuarios')
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
	  						<span class="label label-danger" title="Administrador">Administrador</span>
	  					@else
	  						<span class="label label-primary" title="Miembro">Miembro</span>
	  					@endif
	  					
	  				</td>
	  				<td>
	  					<a href="{{ route('Usuarios.destroy', $usuario->id) }}" class="btn btn-danger" onclick="return confirm('Estas seguro que deseas eliminarlo?')" title="Eliminar"><span class="glyphicon glyphicon-remove" ></span></a>
	  					<a href="{{ route('Usuarios.edit', $usuario->id)}}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
	  				</td>
  				</tr>
  			@endforeach
  		</tbody>
	</table>
	{!! $usuarios->render()!!}
@endsection
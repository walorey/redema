@extends('admin.template.main')

@section('title','Editar usuario | Panel de administración')

@section('content')

<h1>Editar a {{$usuario->name.' '.$usuario->lastname}}</h1>

{!! Form::open(['route' => ['Usuarios.update', $usuario], 'method' => 'PUT']) !!}

	
	<div class="form-group">
		<label class="exampleInputName">Nombre</label>
		<input type="text" class="form-control" name="name" value="{{ $usuario->name }}" required>
	</div>
	<div class="form-group">
		<label class="exampleInputName">Apellido</label>
		<input type="text" class="form-control" name="lastname" value="{{ $usuario->lastname }}" required>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Email</label>
		<input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $usuario->email }}" required>
	</div>
	<div class="form-group">
		<label class="exampleInputName">Seleccione un tipo</label>
		<select class="form-control" name="type">
			@if($usuario->type == 'admin')
				<option value="admin">Administrador</option>
				<option value="member">Miembro</option>
			@else
				<option value="member">Miembro</option>
				<option value="admin">Administrador</option>
			@endif
		</select>
	</div>
	<button type="submit" class="btn btn-default">Crear</button>
	
{!! Form::close() !!}


@endsection
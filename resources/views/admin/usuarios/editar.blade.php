@extends('admin.template.main')

@section('title','Editar usuario | Panel de administración')

@section('content')

<h1>Editar a {{$usuario->name.' '.$usuario->lastname}}</h1>

{!! Form::open(['route' => ['Usuarios.update', $usuario], 'method' => 'PUT']) !!}

	
	<div class="form-group">
		<label class="exampleInputName">Nombre</label>
		<input type="text" class="form-control" name="name" placeholder="" required>
	</div>
	<div class="form-group">
		<label class="exampleInputName">Apellido</label>
		<input type="text" class="form-control" name="lastname" placeholder="" required>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Email</label>
		<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="" required>
	</div>
	<div class="form-group">
		<label class="exampleInputName">Seleccione un tipo</label>
		{!! Form::select('type', ['' => 'Seleccionar un tipo', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control'])!!}
	</div>
	<button type="submit" class="btn btn-default">Crear</button>
	
{!! Form::close() !!}


@endsection
@extends('admin.template.main')

@section('title','Crea usuario | Panel de administración')

@section('Encabezado','Crear usuario')
@section('content')

{!! Form::open(['route' => 'Usuarios.store', 'method' => 'POST']) !!}
{!! Form::open(['route' => 'Admin.auth.login', 'method' => 'POST']) !!}
	
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
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="" required>
	</div>
	<div class="form-group">
		<label class="exampleInputName">Seleccione un tipo</label>
		{!! Form::select('type', ['' => 'Seleccionar un tipo', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control'])!!}
	</div>
	<button type="submit" class="btn btn-default">Crear</button>
	
{!! Form::close() !!}


@endsection
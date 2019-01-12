@extends('admin.template.main')

@section('title','Iniciar sesión | Panel de administración')

@section('Encabezado' , 'Iniciar sesión como administrador')

@section('content')

	{!! Form::open(['route' => 'Admin.auth.login', 'method' => 'POST']) !!}
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Contraseña</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="password">
	  </div>
	  <button type="submit" class="btn btn-default">Entrar</button>
	</form>
	{!! Form::close() !!}
@endsection
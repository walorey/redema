@extends('admin.template.main')

@section('title','Crea Categoria | Panel de administración')

@section('content')
@section('Encabezado','Crear categoria')


{!! Form::open(['route' => 'Categorias.store', 'method' => 'POST']) !!}

	
	<div class="form-group">
		<label class="exampleInputName">Nombre</label>
		<input type="text" class="form-control" name="name" placeholder="" required>
	</div>
	
	<button type="submit" class="btn btn-default">Crear</button>
	
{!! Form::close() !!}


@endsection
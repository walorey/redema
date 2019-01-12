@extends('admin.template.main')

@section('title', 'Crear tag ')

@section('Encabezado','Crear Tag ')

@section('content')

{!! Form::open(['route' => 'Tags.store', 'method' => 'POST']) !!}
	<div class="form-group">
		<label class="exampleInputName">Nombre</label>
		<input type="text" class="form-control" name="name" placeholder="" required>
	</div>
	<button type="submit" class="btn btn-default">Crear</button>
	
{!! Form::close() !!}


@endsection
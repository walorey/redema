@extends('admin.template.main')

@section('title','Crea Categoria | Panel de administración')

@section('content')
<h1>Editar a {{$categoria->name}}</h1>

{!! Form::open(['route' => ['Categorias.update',$categoria], 'method' => 'PUT']) !!}

	
	<div class="form-group">
		<label class="exampleInputName">Nombre</label>
		<input type="text" class="form-control" name="name" value="{{ $categoria->name}}" required>
	</div>
	
	<button type="submit" class="btn btn-default">Guardar</button>
	
{!! Form::close() !!}


@endsection
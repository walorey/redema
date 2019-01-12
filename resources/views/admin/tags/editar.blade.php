@extends('admin.template.main')

@section('title','Editar Tag | Panel de administración')

@section('content')

<h1>Editar a {{$tag->name.' '.$tag->lastname}}</h1>

{!! Form::open(['route' => ['Tags.update', $tag], 'method' => 'PUT']) !!}

	
	<div class="form-group">
		<label class="exampleInputName">Nombre</label>
		<input type="text" class="form-control" name="name" value="{{ $tag->name }}" required>
	</div>
	<button type="submit" class="btn btn-default">Guardar</button>
	
{!! Form::close() !!}


@endsection
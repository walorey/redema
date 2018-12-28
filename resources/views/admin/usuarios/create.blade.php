@extends('admin.template.main')

@section('title','Crea usuario | Panel de administración')

@section('content')

{!! Form::open(['route' => 'Usuarios.store', 'method' => 'POST']) !!}
	<div class="form-group">
		{!! Form::label('name','Nombre') !!}
	</div>
{!! Form::close() !!}


@endsection
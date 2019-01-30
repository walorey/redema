@extends('admin.template.main')

@section('title', 'Imagenes ')
@section('Encabezado' , 'Imagenes')
@section('content')
	<div class="row">
		@foreach($imagenes as $imagen)
			<div class="col-md-4">
				<div class="panel panel-primary">
				  <div class="panel-body">
				    <img src="/img/publicaciones/{{ $imagen->name }}" class="img-responsive">
				  </div>
				  <div class="panel-footer">{{ $imagen->publicacion->title }}</div>
				</div>
			</div>
		@endforeach
	</div>
	{!! $imagenes->render()!!}
@endsection
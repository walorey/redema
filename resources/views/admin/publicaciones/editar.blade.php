@extends('admin.template.main')

@section('title','Editar publicación | Panel de administración')

@section('Encabezado','Editar publicación ' .'"'.$publicacion->title.'"')
@section('content')

	{!! Form::open (['route' => ['Publicaciones.update',$publicacion], 'method' => 'PUT']) !!}
		<div class="form-group">
			<label>Título</label>
			<input class="form-control input-lg"  value="{{ $publicacion->title }}" type="text" placeholder="Por ejemplo: 'Perro perdido'" name="title" required="">
		</div>

		<div class="form-group">
			{!! Form::label('categoria_id', 'Categoría') !!}
			{!! Form::select('categoria_id', $categorias, $publicacion->categoria->id, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción', 'required']) !!}
		</div>

		<div class="form-group">
			<label>Contenido</label>
			{!! Form::textarea('content', $publicacion->content, ['class' => 'form-control'])!!}

		</div>	
		<div class="form-group">
			  <img src="{{asset('/img/publicaciones/'.$publicacion->imagen)}}" width="100px" height="100px" class="img-fit-cover" alt="">
		</div>
		<div class="form-group">
				<input id="input-id" type="file" class="file" data-preview-file-type="text" name="imagen" >
		</div>

		<div class="form-group">
			{!! Form::label('tags', 'Tags') !!}
			{!! Form::select('tags[]', $tags, $mis_tags, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
		</div>

		<button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
	{!! Form::close() !!}

@endsection

@section('js')
<script>
	$(".select-tag").chosen({
		placeholder_text_multiple: 'Seleccione al menos un tag',
		no_results_text: 'No se ha encontrado el tag'
	});
	// initialize with defaults
	$("#input-id").fileinput();
	$("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});
</script>
@endsection
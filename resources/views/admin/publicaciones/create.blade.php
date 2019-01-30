@extends('admin.template.main')

@section('title','Crea publicación | Panel de administración')

@section('Encabezado','Crear publicación')
@section('content')

	{!! Form::open (['route' => 'Publicaciones.store', 'method' => 'POST', 'files' => true]) !!}
		<div class="form-group">
			<label>Título</label>
			<input class="form-control input-lg" type="text" placeholder="Por ejemplo: 'Perro perdido'" name="title" required="">
		</div>

		<div class="form-group">
			{!! Form::label('categoria_id', 'Categoría') !!}
			{!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción', 'required']) !!}
		</div>

		<div class="form-group">
			<label>Contenido</label>
			<textarea class="form-control" rows="3" name="content" placeholder="Cuentanos que pasa" required></textarea>
		</div>	

		<div class="form-group">
		  <label for="exampleInputFile">Seleccione un archivo</label>
		  <!-- <input id="input-b3" name="input-b3[]" type="file" class="file" 
    data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..."> -->
		  <!-- <input type="file" id="exampleInputFile" name="image" required> -->
		  <input id="input-id" type="file" class="file" data-preview-file-type="text" name="imagen" >
		  <!-- <p class="help-block">Example block-level help text here.</p> -->
		</div>



		<div class="form-group">
			{!! Form::label('tags', 'Tags') !!}
			{!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple']) !!}
		</div>

		<button type="submit" class="btn btn-primary btn-lg btn-block">Publicar</button>
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

<script type="text/javascript">

    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });
    });

</script>
@endsection
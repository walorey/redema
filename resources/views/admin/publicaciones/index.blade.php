@extends('admin.template.main')

@section('title', 'Listado ')
@section('Encabezado' , 'Lista de publicaciones')
@section('content')

<br>
	
	<div class="row">
		<div class=" col-md-6">
			<a href="{{ route('Publicaciones.create')}}" class="btn btn-success">Registrar nueva publicación</a>
		</div>

		<div class=" col-md-6">
			<form class="form-inline navbar-right" action="{{ route('Publicaciones.index') }}" method="GET">
			  <div class="form-group has-success has-feedback">
			    <div class="input-group">
			      <input type="text" class="form-control" id="inputGroupSuccess3" name="title" aria-describedby="inputGroupSuccess3Status">
			      <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
			    </div>
			    <span id="inputGroupSuccess3Status" class="sr-only">(success)</span>
			  </div>
			</form>
	</div>
		
	<br>
	<table class="table">
  		<thead>
  			<th>Id</th>
  			<th>Título</th>
  			<th>Usuario</th>
  			<th>Categoría</th>
  			<th>Acción</th>
  		</thead>
  		<tbody>
  			@foreach($publicaciones as $publicacion)
  				<tr>
	  				<td>{{$publicacion->id}}</td>
	  				<td>{{$publicacion->title}}</td>
	  				<td>{{$publicacion->usuario->name.' '.$publicacion->usuario->lastname}}</td>
	  				<td>{{$publicacion->categoria->name}}</td>
	  				<td>
	  					<a href="{{ route('Publicaciones.destroy', $publicacion->id) }}" class="btn btn-danger" onclick="return confirm('Estas seguro que deseas eliminarlo?')" title="Eliminar"><span class="glyphicon glyphicon-remove" ></span></a>
	  					<a href="{{ route('Publicaciones.edit', $publicacion->id)}}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
	  				</td>
  				</tr>
  			@endforeach
  		</tbody>
	</table>
	{!! $publicaciones->render()!!}
@endsection
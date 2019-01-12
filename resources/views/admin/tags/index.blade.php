@extends('admin.template.main')

@section('title', 'Listado ')
@section('Encabezado' , 'Lista de Tags')
@section('content')
	<br>
	<div class="row">
		<div class=" col-md-6">
			<a href="{{ route('Tags.create')}}" class="btn btn-success">Registrar nuevo tag</a>
		</div>

		<div class=" col-md-6">
			<form class="form-inline navbar-right" action="{{ route('Tags.index') }}" method="GET">
			  <div class="form-group has-success has-feedback">
			    <div class="input-group">
			      <input type="text" class="form-control" id="inputGroupSuccess3" name="name" aria-describedby="inputGroupSuccess3Status">
			      <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
			    </div>
			    <span id="inputGroupSuccess3Status" class="sr-only">(success)</span>
			  </div>
			</form>
		</div>
		
	</div>

	

	<br>
	<table class="table">
  		<thead>
  			<th>Id</th>
  			<th>Nombre</th>
  			<th>Acción</th>
  		</thead>
  		<tbody>
  			@foreach($tags as $tag)
  				<tr>
	  				<td>{{$tag->id}}</td>
	  				<td>{{$tag->name}}</td>
	  				<td>
	  					<a href="{{ route('Tags.destroy', $tag->id) }}" class="btn btn-danger" onclick="return confirm('Estas seguro que deseas eliminarlo?')" title="Eliminar"><span class="glyphicon glyphicon-remove" ></span></a>
	  					<a href="{{ route('Tags.edit', $tag->id)}}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
	  				</td>
  				</tr>
  			@endforeach
  		</tbody>
	</table>
	{!! $tags->render()!!}
@endsection
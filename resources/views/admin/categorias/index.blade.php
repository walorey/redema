@extends('admin.template.main')

@section('title', 'Listado ')
@section('Encabezado' , 'Lista de Categorias')
@section('content')
	<br>
	<a href="{{ route('Categorias.create')}}" class="btn btn-success">Registrar nueva categoria</a>
	<br>
	<table class="table">
  		<thead>
  			<th>Id</th>
  			<th>Nombre</th>
  			<th>Acción</th>
  		</thead>
  		<tbody>
  			@foreach($categorias as $categoria)
  				<tr>
	  				<td>{{$categoria->id}}</td>
	  				<td>{{$categoria->name}}</td>
	  				<td>
	  					<a href="{{ route('Categorias.destroy', $categoria->id) }}" class="btn btn-danger" onclick="return confirm('Estas seguro que deseas eliminarla?')" title="Eliminar"><span class="glyphicon glyphicon-remove" ></span></a>
	  					<a href="{{ route('Categorias.edit', $categoria->id)}}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
	  				</td>
  				</tr>
  			@endforeach
  		</tbody>
	</table>
	{!! $categorias->render()!!}
@endsection
<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title text-center">Categorias</h3>
	</div>
	<div class="panel-body">
		<div class="list-group">
			@foreach($categorias as $categoria)
				<button type="button" class="list-group-item">
					<a href="{{ route('front.buscar.categoria', $categoria->name) }}">{{ $categoria->name }}</a>
<!-- 					<span class="badge">
			aca tengo que poner la cantidad de publicaciones de cada categoria pero no me sale
					</span> -->
				</button>
			@endforeach
		</div>
		
	</div>
</div>
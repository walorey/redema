			<div class="panel panel-primary">
		  		<div class="panel-heading">
		  			<h3 class="panel-title text-center">Tags</h3>
		  		</div>
		  		<div class="panel-body">
		  			@foreach($tags as $tag)
		  			<a href="#" ><span class="label label-primary">{{ $tag->name }}</span></a>
		  			@endforeach
		  		</div>
		  	</div>
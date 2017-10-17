@extends ('partials.master')

@section ('content')
	<div class="col-sm-8">
		<h1>Publish a Post</h1>

		<hr>

		<form method="POST" action="/posts" enctype="multipart/form-data">
		{{ csrf_field() }}
		  <div class="form-group">
		    <label for="title">Title:</label>
		    <input type="text" class="form-control" id="title" name="title">
		  </div>

		  <div class="form-group">
		    <label for="body">Body:</label>
		    <textarea id="body" name="body" class="form-control"></textarea>
		  </div>

		  <div class="form-group">
		    <label for="featured_text">Featured Text:</label>
		    <textarea id="featured_text" name="featured_text" class="form-control"></textarea>
		  </div>

	  	<div class="form-group">
			<label for="featured_image">Select Image to Upload:</label>
			<input type="file" name="featured_image" id="featured_image" />
		</div>

		  <button type="submit" class="btn btn-primary">Publish</button>
		</form>

	</div>
@endsection
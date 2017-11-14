@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8">
		<h4>Add an image to the Gallery</h4>

		<hr>

		<form method="POST" action="/gallery" enctype="multipart/form-data">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="featured_image">Select Image to Upload:</label>
				<input type="file" name="featured_image[]" multiple="multiple" id="featured_image" />
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Upload</button>
			</div>
			
			@include ('partials.errors')

		</form>
	</div>
@endsection
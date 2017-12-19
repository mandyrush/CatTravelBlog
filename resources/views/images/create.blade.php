@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8">
		<h4>Add an image to the Gallery</h4>

		<hr>

		<form method="POST" action="/images" enctype="multipart/form-data">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="featured_image">Select Image to Upload:</label>
				<input type="file" name="featured_image[]" multiple="multiple" id="featured_image" />
			</div>

			<select class="form-group custom-select" name="tag">
				<option selected>Select Tag</option>
				@foreach($tags as $tag)
					{{-- @todo the value should be the tag id --}}
					<option value="{{ $tag->id }}">{{ $tag->name }}</option>
				@endforeach
			</select>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Upload</button>
			</div>
			
			@include ('partials.errors')

		</form>
	</div>
@endsection
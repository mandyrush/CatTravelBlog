@extends ('layouts.master')

@section ('content')

	<!-- ckEditor 5 -->
	<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>

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
				<textarea id="editor" name="body" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<label for="featured_text">Featured Text:</label>
				<textarea id="featured_text" name="featured_text" class="form-control"></textarea>
			</div>

		  	<div class="form-group">
				<label for="featured_photo">Select Featured Photo to Upload:</label>
				<input type="file" name="featured_photo" id="featured_photo" />
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Publish</button>
			</div>

			@include ('partials.errors')
			
		</form>
	</div>

	<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
            console.error( error );
        } );
	</script>
@endsection


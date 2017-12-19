@extends ('layouts.master')

@section ('content')
	<div class="container-fluid">
		<div class="row">

			@foreach($albums as $album)
				<div class="col-sm-4 album-tile">
					<img src="{{Storage::disk('local')->url( $album->cover_image )}}" class="img-fluid" alt="Responsive image">
					@foreach($album->tags as $tag)
						<a href="/images/tags/{{$tag->name}}">{{$tag->name}}</a>
					@endforeach
				</div>
			@endforeach

		</div>
	</div>
@endsection
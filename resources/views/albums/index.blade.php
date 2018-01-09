@extends ('layouts.master')

@section ('content')
	<div class="container-fluid album-index">
		<div class="row">

			@foreach($albums as $album)
				<div class="col-md-4 album">
					
						@foreach($album->tags as $tag)
							<a href="/images/tags/{{$tag->name}}">
								
									<div class="album-content">
										
											<img src="{{Storage::disk('local')->url( $album->cover_image )}}" class="img-fluid" alt="Responsive image">
										
											<div class="album-title">
												{{$album->title}}
											</div>
											
											<div class="white-border">
												<div></div>
											</div>
									</div>

							</a>
						@endforeach
					
				</div>
			@endforeach

		</div>
	</div>
@endsection
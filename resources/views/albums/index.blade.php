@extends ('layouts.master')

@section ('content')
	<div class="container-fluid album-index">
		<div class="row mb10">
			<div class="col-sm-7">
				<a href="javascript:history.back()" class="btn btn-sm btn-secondary"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
			</div>
		</div>

		<div class="row">

			{{-- Album linking to all photos --}}
			<div class="col-md-4 album">
				<a href="/photos">
					<div class="border-shadow">

					<div class="album-content">
						
						<img class="img-fluid" src="http://eskipaper.com/images/maine-coon-kittens-4.jpg" alt="Responsive image">
					
						<div class="white-border">
							<div></div>
						</div>

					</div>

					<div class="album-title text-center">
						All Photos
					</div>

					</div>
				</a>
			</div>

			{{-- Albums created based on photo tags --}}
			@foreach($albums as $album)
				<div class="col-md-4 album">
					
					@foreach($album->tags as $tag)
						<a href="/photos/tags/{{$tag->name}}">
							<div class="border-shadow">
							
								<div class="album-content">

									<img src="{{Storage::disk('local')->url( $album->cover_photo )}}" class="img-fluid" alt="Responsive image">

									<div class="white-border">
										<div></div>
									</div>

								</div>

								<div class="album-title text-center">
									{{$album->title}}
								</div>

							</div>
						</a>
					@endforeach
					
				</div>
			@endforeach

			<div class="container">
				{{ $albums->render("pagination::bootstrap-4") }}
			</div>

		</div>
	</div>
@endsection

@section ('scripts')
	<script src="/js/app.js"></script>
@endsection
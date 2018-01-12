@extends ('layouts.master')

@section ('content')
	
	<div class="masonry">

		@foreach ($photos as $photo)
			<div class="masonry-panel">
				<div class="masonry-panel_content">
					<a href="{{Storage::disk('local')->url( $photo->featured_photo )}}" target="_blank">
						<img src="{{Storage::disk('local')->url( $photo->featured_photo )}}" class="img-fluid" alt="Responsive image">
					</a>
				</div>
			</div>
		@endforeach

	</div>
@endsection

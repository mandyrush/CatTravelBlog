@extends ('layouts.master')

@section ('content')
	
	<div class="masonry">

		@foreach ($images as $image)
			<div class="masonry-panel">
				<div class="masonry-panel_content">
					<a href="{{Storage::disk('local')->url( $image->featured_image )}}" target="_blank">
						<img src="{{Storage::disk('local')->url( $image->featured_image )}}" class="img-fluid" alt="Responsive image">
					</a>
				</div>
			</div>
		@endforeach

	</div>
@endsection

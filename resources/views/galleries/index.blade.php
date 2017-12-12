@extends ('layouts.master')

@section ('content')
	
	{{-- <div>
		@foreach($tags as $tag)
			{{ $tag }}
		@endforeach
	</div> --}}
	
	<div class="masonry">

		@foreach ($galleries as $gallery)
			<div class="masonry-panel">
				<div class="masonry-panel_content">
					<a href="{{Storage::disk('local')->url( $gallery->featured_image )}}">
						<img src="{{Storage::disk('local')->url( $gallery->featured_image )}}" class="img-fluid" alt="Responsive image">
					</a>
				</div>
			</div>
		@endforeach

	</div>
@endsection

@extends ('layouts.master')

@section ('content')
	
	<div class="masonry">

		<div class="masonry-panel flip-med flip">
			<div class="masonry-panel_content flip-content">
				<div class="flip-panel flip-panel-front">
					<p>Nessie say...</p>
				</div>
				<div class="flip-panel flip-panel-back">
					<p>A stick in the paw is worth 2 under the fridge.</p>
				</div>
			</div>
		</div>

		@foreach ($photos as $photo)
			<div class="masonry-panel">
				<div class="masonry-panel_content">
					<a href="{{Storage::disk('local')->url( $photo->featured_photo )}}" target="_blank">
						<img class="img-fluid" src="{{Storage::disk('local')->url( $photo->featured_photo )}}" alt="Responsive image">
					</a>
				</div>
			</div>
		@endforeach

	</div>

@endsection

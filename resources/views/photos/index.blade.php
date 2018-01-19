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

					{{--Trigger Modal--}}
					<button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">
						<img class="img-fluid" src="{{Storage::disk('local')->url( $photo->featured_photo )}}" alt="Responsive image">
					</button>

					{{--Modal--}}
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog">

							{{--Modal Content--}}
							<div class="modal-content">

								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Title</h4>
								</div>

								<div class="modal-body">
									Body
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>

							</div>

						</div>
					</div>

				</div>
			</div>
		@endforeach

	</div>

@endsection

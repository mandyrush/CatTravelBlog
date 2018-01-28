@extends ('layouts.master')

@section ('content')

	<div class="masonry">
		@foreach ($photos as $key => $photo)

			@if ($key % 7 == 1)
				@include ('partials.nessiesays')
			@endif

			<div class="masonry-panel">
				<div class="masonry-panel_content">

					{{--Trigger Modal--}}
					<button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal{{$photo->id}}">
						<img class="img-fluid" src="{{Storage::disk('local')->url( $photo->featured_photo )}}" alt="Responsive image">
					</button>

					{{--Modal--}}
					<div id="myModal{{$photo->id}}" class="modal fade" role="dialog">
						<div class="modal-dialog modal-lg">

							{{--Modal Content--}}
							<div class="modal-content">

								@foreach($photo->tags as $tag)

									<div class="modal-header">
										<h4 class="modal-title">{{ $tag->name }}</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

								@endforeach

								<div class="modal-body">
									<img class="img-fluid" src="{{Storage::disk('local')->url( $photo->featured_photo )}}" alt="Responsive image">
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
								</div>

							</div>

						</div>
					</div>

				</div>
			</div>

		@endforeach

	</div>

@endsection

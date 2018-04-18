@extends ('layouts.master')

@section ('content')
	<div class="col-sm-7" style="margin-left: 25px">
		<a href="javascript:history.back()" class="btn btn-sm btn-secondary"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
	</div>

	<div class="masonry">

		@foreach ($photos as $key => $photo)

			@if ($key % 15 == 5)
				@include ('partials.nessiesays')
			@endif

			<div class="masonry-panel">
				<div class="masonry-panel_content">

					{{--Trigger Modal--}}
					<button type="button" class="myBtn btn btn-link" data-toggle="modal" data-target="#myModal{{$photo->id}}">
						<img class="img-fluid" src="{{Storage::disk('local')->url( $photo->featured_photo )}}" alt="Responsive image">
					</button>

					{{--Modal--}}
					<div id="myModal{{$photo->id}}" class="modal fade" role="dialog">
						<div class="modal-dialog modal-lg">

							{{--Modal Content--}}
							<div class="modal-content">
								<button type="button" class="modal-close close btn" data-dismiss="modal">&times;</button>

								@include ('partials.carousel')

								<div class="modal-footer">
									<button type="button" class="modal-close btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>

		@endforeach

	</div>

	<div class="container">
		{{ $photos->render("pagination::bootstrap-4") }}
	</div>

@endsection

@section ('scripts')
    <script src="/js/app.js"></script>
@endsection

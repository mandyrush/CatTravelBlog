@extends ('layouts.master')
@section('title', 'Gallery')
@section ('content')
<div class="photo-index">
	<div class="col-sm-7" style="margin-left: 25px">
		<a href="javascript:history.back()" class="btn btn-sm btn-secondary"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
	</div>

	<div class="masonry">

		@foreach ($photos as $key => $photo)

			@if ($key % 15 == 5)
				@include ('partials.nessiesays')
			@endif

			<div class="masonry-panel">
				<div class="masonry-panel-content">

					{{--Trigger Modal--}}
					<button type="button" class="myBtn btn btn-link" data-toggle="modal" data-target="#myModal{{$photo->id}}">
						<img class="img-fluid" src="{{Storage::disk('s3')->url($photo->featured_photo)}}" alt="Responsive image">
					</button>

					{{--Modal--}}
					<div id="myModal{{$photo->id}}" class="modal fade" role="dialog">
						<div class="modal-dialog">

							{{--Modal Content--}}
							<div class="modal-content">
								<button type="button" class="modal-close close btn" data-dismiss="modal">&times;</button>

								@include ('partials.carousel')

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
</div>
@endsection

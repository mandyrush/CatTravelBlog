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
					<button type="button" class="myBtn btn btn-link" data-toggle="modal" data-target="#myModal{{$photo->id}}" data-photo-id="{{$photo->id}}">
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
									{{--<div><a class="prev" data-photo-prev="{{$photo->id - 1}}">&#10094;</a></div>--}}

									<div><img class="img-fluid" src="{{Storage::disk('local')->url( $photo->featured_photo )}}" alt="Responsive image"></div>

									{{--<div><a class="next" data-photo-next="{{$photo->id + 1}}">&#10095;</a></div>--}}
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

	{{--<script>--}}

        {{--$(document).ready(function(){--}}
            {{--$(".myBtn").click(function(){--}}
                {{--var $el = $(this);--}}

                {{--console.log($el.data('photo-id'), $el.data('target'));--}}




                {{--$($el.data('photoId')).on('show.bs.modal', function (event) {--}}
                    {{--console.log("here!");--}}
                    {{--var button = $(event.relatedTarget) // Button that triggered the modal--}}
                    {{--var recipient = button.data('whatever') // Extract info from data-* attributes--}}
                    {{--// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).--}}
                    {{--// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.--}}
                    {{--var modal = $(this)--}}
                    {{--modal.find('.modal-title').text('New message to ' + recipient)--}}
                    {{--modal.find('.modal-body input').val(recipient)--}}
                {{--});--}}

					{{--$('#myModal92').modal('toggle')--}}
                {{--$($el.data('target')).on('show.bs.modal', function (e) {--}}
                    {{--if (!data) return e.preventDefault() // stops modal from being shown--}}
                {{--})--}}
            {{--});--}}
        {{--});--}}
	{{--</script>--}}
	<div class="container">
		{{ $photos->render("pagination::bootstrap-4") }}
	</div>

@endsection

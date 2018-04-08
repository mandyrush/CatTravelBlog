@extends ('layouts.master')
@section('title', $post->title)
@section ('content')
	<div class="container-fluid post-show">
			
			<div class="col-md-7 post-heading">
				<h2>{{ $post->title }}</h2>
				<p>
					{{ $post->user->name }} on
					{{ $post->created_at->toFormattedDateString() }}
				</p>

				<hr>

				<div class="post-body">
					<div class="postBodyImg">
						<img class="img-fluid" src="{{Storage::disk('local')->url( $post->featured_photo )}}" alt="Responsive image">
					</div>
					<p>
						{!! $post->body !!}
					</p>
				</div>
			
		</div>

	</div>

		@include ('partials.comments')

		@include('partials.errors')

@endsection
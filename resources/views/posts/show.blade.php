@extends ('layouts.master')

@section ('content')
	<div class="container-fluid post-show">
		<div class="row post-row">
			
			<div class="col-sm-8 post-heading">
				<h2>{{ $post->title }}</h2>
				<p>
					{{ $post->user->name }} on
					{{ $post->created_at->toFormattedDateString() }}
				</p>

				<hr>

				<div class="post-body">
					<p>
						{!! $post->body !!}
					</p>
				</div>
			</div>

			<div class="col-sm-3 nessie-say">
				<p align="center">
					Nessie Say "A stick in the paw is worth two under the fridge..."
				</p>
			</div>
			
		</div>

		@include ('partials.comments')

		@include('partials.errors')
	</div>
@endsection
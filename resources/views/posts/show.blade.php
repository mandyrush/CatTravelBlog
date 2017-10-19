@extends ('partials.master')

@section ('content')
	<div class="col-sm-10">
		{{$post->body}}

		<hr>

		<div class="comments">
			<ul class="list-group">
				@foreach($post->comments as $comment)
					<li class="list-group-item">
						<strong>
							{{ $comment->created_at->DiffForHumans() }}: &nbsp;
						</strong>
						{{ $comment->body }}
					</li>
				@endforeach
			</ul>
		</div>
	</div>
@endsection
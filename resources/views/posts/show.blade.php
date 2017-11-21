@extends ('layouts.master')

@section ('content')
	<div class="col-sm-9 post-show">
		<h2>{{ $post->title }}</h2>
		<p>
			{{ $post->user->name }} on
			{{ $post->created_at->toFormattedDateString() }}
		</p>
		{{$post->body}}

		<hr>

		<div class="comments">
			<ul class="list-group">
				@foreach($post->comments as $comment)
					<li class="list-group-item">
						<strong>
							{{ $comment->user->name }}: &nbsp;
						</strong>
						<strong>
							{{ $comment->created_at->DiffForHumans() }} &nbsp;
						</strong>
						{{ $comment->body }}
					</li>
				@endforeach
			</ul>
		</div>

		{{-- Add a comment --}}
		<hr>
		@if (Auth::check())			
			<form method="POST" action="/posts/{{ $post->id }}/comments">
				{{ csrf_field() }} 

				<div class="form-group">
					<textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Comment</button>
				</div>
			</form>
		@else	
			<div class="form-group">
				<a href="/login">
					<button class="btn btn-primary">Login a to add a comment</button>
				</a>			
			</div>
		@endif

		@include('partials.errors')
	</div>
@endsection
@extends ('layouts.master')

@section ('content')
	<div class="container-fluid post-show">
		<div class="row justify-content-center">
			
			<div class="col-sm-8 post-heading">
				<h2>{{ $post->title }}</h2>
				<p>
					{{ $post->user->name }} on
					{{ $post->created_at->toFormattedDateString() }}
				</p>

				<hr>

				<div class="post-body">
					<p>
						{{$post->body}}
					</p>
				</div>
			</div>

			<div class="col-sm-3 nessie-say">
				<p align="center">
					Nessie Say "A stick in the paw is worth two under the fridge..."
				</p>
			</div>
			
		</div>

		{{-- Posted Comments --}}
		<div class="col-sm-5 comments">
			
			<div class="user-comments">
				<ul class="list-group">
					@foreach($post->comments as $comment)
						<li class="list-group-item">
							<strong>
								{{ $comment->user->name }}: &nbsp;
							</strong>
							<strong>
								{{ $comment->created_at->DiffForHumans() }} &nbsp;
							</strong>
							<p>
								{{ $comment->body }}
							</p>
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
		</div>

		@include('partials.errors')
	</div>
@endsection
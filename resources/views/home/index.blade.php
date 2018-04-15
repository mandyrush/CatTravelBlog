@extends ('layouts.home')
@section('title', 'Welcome to')

@section ('content')

	<div class="container-fluid" style="overflow: hidden">
		{{-- Posts --}}
		@foreach ($posts as $key => $post)
			@if ($key % 2 == 1)
				@include ('posts.post_odd')
			@elseif ($key % 2 == 0)
				@include ('posts.post_even')
			@endif
		@endforeach

		<div class="more_posts">
			<a href="/posts">More Posts</a>
		</div>
	</div>

@endsection

@section ('scripts')
	<script src="/js/app.js"></script>
@endsection
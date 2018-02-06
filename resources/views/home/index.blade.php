@extends ('layouts.home')

@section ('content')
	
{{-- Posts --}}
	<section> 
		<div class="post-layout">

			@foreach ($posts as $key => $post)
				@if ($key % 2 == 1)
					@include ('posts.post_odd')
				@elseif ($key % 2 == 0)
					@include ('posts.post_even')
				@endif		
			@endforeach

		</div>
	</section>

	<div class="more_posts">
		<a href="/posts">More Posts</a>
	</div>

@endsection
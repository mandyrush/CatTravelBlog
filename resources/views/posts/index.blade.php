@extends ('layouts.master')

@section ('content')

{{-- Posts --}}
	<section> 
		<div class="post-layout">

			@foreach ($posts as $key => $post)
				@if ($key % 2 == 1)
					@include ('posts.post-odd')
				@elseif ($key % 2 == 0)
					@include ('posts.post-even')
				@endif		
			@endforeach

		</div>
	</section>

@endsection
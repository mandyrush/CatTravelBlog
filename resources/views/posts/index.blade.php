@extends ('layouts.master')

@section ('content')

<!-- Posts -->
	<section class="container-fluid"> 
		<div class="row justify-content-center">

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
<!-- Posts-odd -->

<div class="container-fluid">
	<div class="row posts odd justify-content-center">

		<div class="col-md-6 post-info">
			<h2>
				<a href="/posts/{{ $post->id }}" class="post-title">{{ $post->title }}</a>
			</h2>
			<h6> Written by {{ $post->user->name }} </h6>
			<h6>{{ $post->created_at->toFormattedDateString() }}</h6>
			<h5>{{ $post->featured_text }}</h5>
			<h6>
				<a href="/posts/{{ $post->id }}" class="read-more">READ MORE...</a>
			</h6>
		</div>

		<figure class="col-md-4">
			<a href="/posts/{{ $post->id }}">
				<img src="{{Storage::disk('local')->url( $post->featured_photo )}}" class="img-fluid" alt="Responsive image">
			</a>
		</figure>

	</div>
</div>

			
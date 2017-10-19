<!-- Posts -->
<figure class="col-sm-4">
	<a href="/posts/{{ $post->id }}">
		<img src="{{Storage::disk('local')->url( $post->featured_image )}}" class="img-fluid" alt="Responsive image">
	</a>
</figure>

<div class="col-sm-6 post-info">
	<h2>{{ $post->title }}</h2>
	<h6>{{ $post->created_at->toFormattedDateString() }}</h6>
	<h5>{{ $post->featured_text }}</h5>
	<h6>
		<a href="/posts/{{ $post->id }}" class="read-more">READ MORE...</a>
	</h6>
</div>
			
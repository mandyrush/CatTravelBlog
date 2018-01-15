<!-- Posts-even -->

<div class="container-fluid">
	<div class="row posts even">

		<figure class="col-md-6">
			<a href="/posts/{{ $post->id }}">
				<img src="{{Storage::disk('local')->url( $post->featured_photo )}}" class="img-fluid" alt="Responsive image">
			</a>
		</figure>
		
		<div class="col-md-6 post-info aligner">
			<div class="aligner-item">
				<h2>
					<a href="/posts/{{ $post->id }}" class="post-title">{{ $post->title }}</a>
				</h2>
				<h6> Written by {{ $post->user->name }} </h6>
				<h6 class="post-created">{{ $post->created_at->toFormattedDateString() }}</h6>
				<h5>{{ $post->featured_text }}</h5>
				<h6>
					<a href="/posts/{{ $post->id }}" class="read-more">READ MORE...</a>
				</h6>
			</div>
		</div>

	</div>
</div>

			
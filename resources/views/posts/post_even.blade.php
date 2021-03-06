<!-- Posts-even -->

<div class="container-fluid">
	<div class="row posts even">

		<div class="col-md-6 img aligner">
			<a href="/posts/{{ $post->id }}" class="aligner-item">

				<div class="post-img">
					<img class="img-fluid" src="{{Storage::disk('s3')->url($post->featured_photo)}}" alt="Responsive image">

					<div class="white-border">
						<div></div>
					</div>
				</div>

			</a>
		</div>
		
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

			
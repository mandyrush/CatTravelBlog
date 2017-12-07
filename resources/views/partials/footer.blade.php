<footer class="container-fluid">
		
		<div class="row">
			<h3 class="col-sm-12"></h3>
			<h4>Archives</h4>

			<ol class="list-unstyled">
				@foreach($archives as $stats)
					<li>
						<a class="archives-link" href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
							{{ $stats['month'] . ' ' . $stats['year'] }}
						</a>
					</li>
				@endforeach
			</ol>
		</div>

		<div class="row">
			<h3 class="col-sm-12"></h3>
			<h4>Tags</h4>

			<ol class="list-unstyled">
				@foreach($tags as $tag)
					<li>
						<a href="/posts/tags/{{ $tag }}">
							{{ $tag }}
						</a>
					</li>
				@endforeach
			</ol>
		</div>
</footer>
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
</footer>
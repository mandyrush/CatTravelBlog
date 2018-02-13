<nav class="col-sm-1 nav-menu">
	<div class="dropdown show ml-auto">
		<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fas fa-bars"></i>
		</a>

		<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<ul class="nav-list">
				<li><a class="dropdown-item" href="/">Home</a></li>
				<li><a class="dropdown-item" href="/posts">Posts</a></li>
				<li><a class="dropdown-item" href="/albums">Gallery</a></li>

				<li>
					<input id="kitties" type="checkbox" hidden />
					<label for="kitties">The Kitties</label>
					<ul class="group-list">
						<li>
							<a class="dropdown-item" href="/kitties/mozzie">The Mozzie</a>
						</li>
						<li>
							<a class="dropdown-item" href="/kitties/nessie">The Nessie</a>
						</li>
					</ul>
				</li>

				<li>
					<input id="humans" type="checkbox" hidden />
					<label for="humans">The Humans</label>
					<ul class="group-list">
						<li>
							<a class="dropdown-item" href="/humans/des">The Des</a>
						</li>
						<li>
							<a class="dropdown-item" href="/humans/amanda">The Amanda</a>
						</li>
					</ul>
				</li>

				<li>
					<div>
						@if (Auth::check())
							<a class="dropdown-item" href="/logout">Logout</a>
						@else ()
							<a class="dropdown-item" href="/login">{{ 'Login' }}</a>
						@endif
					</div>
				</li>

			</ul>
		</div>

	</div>
</nav>

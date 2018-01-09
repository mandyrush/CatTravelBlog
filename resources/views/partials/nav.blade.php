	<nav class="col-sm-1 nav-menu">
		<div class="dropdown show ml-auto">
			<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-bars"></i>
			</a>

			<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="/">Home</a>
				<a class="dropdown-item" href="/posts">Posts</a>
				<a class="dropdown-item" href="/albums">Gallery</a>
				<a class="dropdown-item" href="/kitties">The Kitties</a>
				<a class="dropdown-item" href="/humans">The Humans</a>
				
				<div>
					@if (Auth::check())
						<a class="dropdown-item" href="/logout">Logout</a>
					@else ()
						<a class="dropdown-item" href="/login">{{ 'Login' }}</a>
					@endif
				</div>	
			</div>

		</div>
	</nav>	

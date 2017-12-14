<header class="container-fluid">	
	<div class="nav-bar row justify-content-between">

		<nav class="col-sm-1 nav-menu">
			<div class="dropdown show ml-auto">
				<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-bars"></i>
				</a>

				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="/">Home</a>
					<a class="dropdown-item" href="/gallery">Gallery</a>
					<a class="dropdown-item" href="/kitties">Kitties</a>
					<a class="dropdown-item" href="/humans">The Humans</a>
				</div>
			</div>
		</nav>	

		<div class="login-btn aligner">
			<div class="col-sm-1 aligner-item">
				@if (Auth::check())
					<a href="/logout">Logout</a>
				@else ()
					<a href="/login">{{ 'Login' }}</a>
				@endif
			</div>	
		</div>
	
	</div>
</header>

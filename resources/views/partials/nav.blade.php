<div class="row">
	<a class="title-link" href="/">
		<h1 class="col-sm-12 title" align="left">Cats Wander</h1>
	</a>
</div>

<header class="container-fluid">	
	<div class="row">
		<nav class="col-sm-12 main-navbar">
			
			<a class="nav-link" href="/">Home</a>
			<a class="nav-link" href="/gallery">Gallery</a>
			<a class="nav-link" href="kitties.html">Kitties</a>
			<a class="nav-link" href="humans.html">The Humans</a>
			<a class="nav-link" href="contact.html">Contact Us</a>

			@if (Auth::check())
				<div class="dropdown show ml-auto">
					<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ 'Welcome ' .Auth::user()->name }}</a>

					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="/logout">Logout</a>
					</div>
				</div>
			@else ()
				<a class="nav-link ml-auto" href="/register">{{ 'Register' }}</a>
				<a class="nav-link" href="/login">{{ 'Login' }}</a>
			@endif
				
		</nav>	
	</div>
</header>

<!--Navbar-->
<nav class="navbar">

	<!-- Collapse button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
			aria-expanded="false" aria-label="Toggle navigation"><span><i class="fa fa-bars"></i></span></button>

	<!-- Collapsible content -->
	<div class="collapse navbar-collapse" id="navbarContent">

		<!-- Links -->
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/posts">Posts</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/albums">Gallery</a>
			</li>
			<li class="nav-level2">
				<button class="nav-btn" type="button" data-toggle="collapse" data-target="#collapseItem" aria-expanded="false" aria-controls="collapseItem">
					The Kitties
				</button>
				<ul class="collapse" id="collapseItem">
					<li class="nav-item"><a class="nav-link" href="/kitties/mozzie">Mozzie</a></li>
					<li class="nav-item"><a class="nav-link " href="/kitties/nessie">Nessie</a></li>
				</ul>
			</li>
			<li class="nav-level2">
				<button class="nav-btn" type="button" data-toggle="collapse" data-target="#collapseItem2" aria-expanded="false" aria-controls="collapseItem2">
					The Humans
				</button>
				<ul class="collapse" id="collapseItem2">
					<li class="nav-item"><a class="nav-link" href="/kitties/des">Des</a></li>
					<li class="nav-item"><a class="nav-link" href="/kitties/amanda">Amanda</a></li>
				</ul>
			</li>
			<li class="nav-item">
				@if (Auth::check())
					<a class="nav-link" href="/logout">Logout</a>
				@else ()
					<a class="nav-link" href="/login">{{ 'Login' }}</a>
				@endif
			</li>
		</ul>
		<!-- Links -->

	</div>
	<!-- Collapsible content -->

</nav>
<!--/.Navbar-->

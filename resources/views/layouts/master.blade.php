<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>
<body>
	<div class="master page-border">

		<div class="master-logo"><a href="/">Cats Wander</a></div>

		<header class="navbar-layout-1">
			<div class="nav-oval"></div>
			@include ('partials.nav')
			<div class="drop-shadow"></div>
		</header>

		@yield ('content')

		@include ('partials.footer')

	</div>

</body>
</html>
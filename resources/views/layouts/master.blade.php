<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>
<body>
	<div class="master page-border">

		<div class="master-logo"><a href="/">Cats Wander</a></div>

		<header class="navbar-layout-1">
			@include ('partials.nav')
		</header>

		@yield ('content')

		@include ('partials.footer')

	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>
<body>
	<div class="master page-border">

		<header>
			@include ('partials.nav')
			<div class="master-logo"><a href="/">Cats Wander</a></div>
		</header>

		@yield ('content')

		@include ('partials.footer')

	</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	@include('partials.head')
</head>
<body>
	<div class="home-nav">
		@include ('partials.nav')
	</div>

	@if ($flash = session('message'))
		<div id="flash-message" class="alert alert-success" role="alert">
			{{ $flash }}	
		</div>
	@endif

	@yield ('content')
</body>
</html>
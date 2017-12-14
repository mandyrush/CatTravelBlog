<!DOCTYPE html>
<html>
<head>
	@include('partials.head')
</head>
<body>
	<header class="home-nav container-fluid">	
		<div class="row justify-content-between">
			@include ('partials.nav')
		</div>
	</header>

	@if ($flash = session('message'))
		<div id="flash-message" class="alert alert-success" role="alert">
			{{ $flash }}	
		</div>
	@endif

	@yield ('content')
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	@include('partials.head')
</head>
<body>

	<div class="page-border">
		<div>
			@include ('partials.banner')
		</div>
		<header class="master-nav container-fluid">	
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
		@include ('partials.footer')
	</div>

</body>
</html>
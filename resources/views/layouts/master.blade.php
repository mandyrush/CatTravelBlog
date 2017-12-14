<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>
<body>
	<header class="master-nav container-fluid">	
		<div class="row justify-content-between">
			@include ('partials.nav')
		</div>
	</header>
	
	@yield ('content')
	@include ('partials.footer')
</body>
</html>
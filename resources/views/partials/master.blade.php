<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KittyTravelBlog</title>
	<!-- CSS -->
	<link href="../css/style.css" type="text/css" rel="stylesheet">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Cookie|Prociono" rel="stylesheet">
</head>
<body>
	@include ('partials.nav')
	@yield ('content')
	@include ('partials.footer')
</body>
</html>
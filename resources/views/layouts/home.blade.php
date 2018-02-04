<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	@include('partials.head')
</head>
<body>

	<div class="page-border">

		<section id="banner" class="section-class-name" data-section-name="banner">
			@include ('partials.banner')
		</section>

		<section id="body" class="section-class-name" data-section-name="body">
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
		</section>

	</div>

	<script>
		$.scrollify({
			section : ".section-class-name",
			sectionName : "section-name",
			interstitialSection : "",
			easing: "easeOutExpo",
			scrollSpeed: 1100,
			offset : 0,
			scrollbars: true,
			standardScrollElements: "",
			setHeights: true,
			overflowScroll: true,
			updateHash: true,
			touchScroll:true,
			before:function() {},
			after:function() {},
			afterResize:function() {},
			afterRender:function() {}
			});
    </script>
</body>

</html>
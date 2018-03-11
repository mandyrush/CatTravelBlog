<!--Navbar-->
<nav class="navbar">

	<!-- Open button -->
	<span class="hamburger" onclick="openNav()"><i class="fa fa-bars"></i></span>

	<!-- Overlay content-->
	<div id="myNav" class="overlay">

		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

		<!-- Links -->
		<div class="overlay-content container-fluid">
			<div class="row">

				<a class="nav-item col-md-4" href="/">
					<div class="nav-content">
						<div class="white-border">
							<div>Home</div>
						</div>
					</div>
				</a>

				<a class="nav-item col-md-4" href="/posts">
					<div class="nav-content">
						<div class="white-border">
							<div>Posts</div>
						</div>
					</div>
				</a>

				<a class="nav-item col-md-4" href="/albums">
					<div class="nav-content">
						<div class="white-border">
							<div>Gallery</div>
						</div>
					</div>
				</a>

			</div>

			<div class="row">
				<div class="nav-item nav-level2 col-md-4">
					<button class="nav-btn" type="button" data-toggle="collapse" data-target="#collapseItem" aria-expanded="false" aria-controls="collapseItem">
						The Kitties
					</button>
					<ul class="collapse" id="collapseItem">
						<li class="nav-item"><a class="nav-link" href="/kitties/mozzie">Mozzie</a></li>
						<li class="nav-item"><a class="nav-link " href="/kitties/nessie">Nessie</a></li>
					</ul>
				</div>
				<div class="nav-item nav-level2 col-md-4">
					<button class="nav-btn" type="button" data-toggle="collapse" data-target="#collapseItem2" aria-expanded="false" aria-controls="collapseItem2">
						The Humans
					</button>
					<ul class="collapse" id="collapseItem2">
						<li class="nav-item"><a class="nav-link" href="/kitties/des">Des</a></li>
						<li class="nav-item"><a class="nav-link" href="/kitties/amanda">Amanda</a></li>
					</ul>
				</div>
				<div class="nav-item col-md-4">
					@if (Auth::check())
						<a class="nav-link" href="/logout">Logout</a>
					@else ()
						<a class="nav-link" href="/login">{{ 'Login' }}</a>
					@endif
				</div>
			</div>
		</div>
		<!-- Links -->

	</div>
	<!-- Overlay content -->

</nav>
<!-- Navbar -->


<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
</script>

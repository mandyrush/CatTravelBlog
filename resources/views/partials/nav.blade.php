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

				<button class="nav-btn col-md-4" type="button" data-toggle="collapse" data-target="#collapseItem" aria-expanded="false" aria-controls="collapseItem">
					<div class="nav-item nav-level2">
						<div class="nav-content">
							<div class="white-border">
								<div>Kitties</div>
							</div>
							<ul class="collapse" id="collapseItem">
								<li><a href="/kitties/mozzie">Mozzie</a></li>
								<li><a href="/kitties/nessie">Nessie</a></li>
							</ul>
						</div>
					</div>
				</button>

				<button class="nav-btn col-md-4" type="button" data-toggle="collapse" data-target="#collapseItem2" aria-expanded="false" aria-controls="collapseItem">
					<div class="nav-item nav-level2">
						<div class="nav-content">
							<div class="white-border">
								<div>Humans</div>
							</div>
							<ul class="collapse" id="collapseItem2">
								<li><a href="/humans/des">Des</a></li>
								<li><a href="/humans/amanda">Amanda</a></li>
							</ul>
						</div>
					</div>
				</button>

				<div class="nav-item col-md-4">
					@if (Auth::check())
						<a href="/logout">
							<div class="nav-content">
								<div class="white-border">
									<div>Logout</div>
								</div>
							</div>
						</a>
					@else ()
						<a href="/login">
							<div class="nav-content">
								<div class="white-border">
									<div>{{ 'Login' }}</div>
								</div>
							</div>
						</a>
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
        document.body.style.overflow = "hidden";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
        document.body.style.overflow  = "auto";
    }
</script>

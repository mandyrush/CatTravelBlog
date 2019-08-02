<!--Navbar-->
<nav class="navbar">

    <div class="hamburger" onclick="openNav()">
        <i class="fas fa-bars hamburger-icon"></i>
    </div>

    <!-- Open button -->
    <!-- Overlay content-->
    <div id="myNav" class="overlay">

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <!-- Links -->
        <div class="overlay-content container-fluid">

            <div class="row nav-row1">

                <a class="nav-item col-md-3" href="/">
                    <div class="nav-content">
                        <div class="white-border">
                            <div>Home</div>
                        </div>
                    </div>
                </a>

                <a class="nav-item col-md-3" href="/posts">
                    <div class="nav-content">
                        <div class="white-border">
                            <div>Posts</div>
                        </div>
                    </div>
                </a>

                <a class="nav-item col-md-3" href="/albums">
                    <div class="nav-content">
                        <div class="white-border">
                            <div>Gallery</div>
                        </div>
                    </div>
                </a>

            </div>

            <div class="row nav-row2">

                <button class="nav-btn col-md-3" type="button" data-toggle="collapse" data-target="#collapseItem" aria-expanded="false" aria-controls="collapseItem">
                    <div class="nav-item nav-level2">
                        <div class="nav-content">
                            <div class="white-border">
                                <div>
                                    Kitties
                                    <ul class="collapse" id="collapseItem">
                                        <li class="nav-hr"><hr></li>
                                        <li><a href="/kitties/mozzie">Mozzie</a></li>
                                        <li><a href="/kitties/nessie">Nessie</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>

                <button class="nav-btn col-md-3" type="button" data-toggle="collapse" data-target="#collapseItem2" aria-expanded="false" aria-controls="collapseItem">
                    <div class="nav-item nav-level2">
                        <div class="nav-content">
                            <div class="white-border">
                                <div>
                                    Humans
                                    <ul class="collapse" id="collapseItem2">
                                        <li class="nav-hr"><hr></li>
                                        <li><a href="/humans/des">Des</a></li>
                                        <li><a href="/humans/amanda">Amanda</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </button>

                <div class="nav-item col-md-3">
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

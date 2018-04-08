<!--Navbar-->
<nav class="navbar">

    <div class="hamburger" onclick="openNav()">
        {{--<i class="fa fa-bars"></i>--}}
        {{--<i class="far fa-compass fa-lg"></i>--}}
        <section>
          <span class="icon" data-icon-name="explore">
            <svg version="1.1" class="icon-compass" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="40px" height="40px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
              <g>
                <rect x="16.787" y="48.787" fill="#FFFFFF" width="8.582" height="2.292"/>
                <rect x="48.853" y="74.562" fill="#FFFFFF" width="2.26" height="8.58"/>
                <rect x="48.853" y="16.562" fill="#FFFFFF" width="2.26" height="8.58"/>
                <rect x="74.587" y="48.787" fill="#FFFFFF" width="8.593" height="2.292"/>
                <path fill="#FFFFFF" d="M49.983,5C25.135,5,5,25.144,5,50.017C5,74.846,25.135,95,49.983,95C74.854,95,95,74.846,95,50.017
                  C95,25.144,74.854,5,49.983,5z M49.983,88.189c-21.031,0-38.177-17.133-38.177-38.172c0-21.073,17.147-38.206,38.177-38.206
                  c21.064,0,38.177,17.133,38.177,38.206C88.16,71.057,71.048,88.189,49.983,88.189z"/>
              </g>
              <path class="needle" fill="#FFFFFF" d="M33.701,22.563l9.606,29.698l20.947,23.198l-9.605-29.72L33.701,22.563z M48.983,52.044
                c-1.692,0-3.083-1.386-3.083-3.083c0-1.736,1.392-3.077,3.083-3.077c1.703,0,3.083,1.341,3.083,3.077
                C52.066,50.658,50.686,52.044,48.983,52.044z"/>
              </svg>
          </span>
        </section>
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
                            <div class="nav-title">Gallery</div>
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

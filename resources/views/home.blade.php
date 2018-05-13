
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> - Cats Wander</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cookie|Prociono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gaegu|Just+Me+Again+Down+Here|Life+Savers|Loved+by+the+King|Peralta" rel="stylesheet">


    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="/css/app.css" type="text/css" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
    <!-- jQuery -->

    <script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!-- Required plugin for Bootstrap dropdowns -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
<div class="master page-border">

    <header>
        <!--Navbar-->
        <nav class="navbar">

            <div class="hamburger" onclick="openNav()">
                <img class="shadow5" src="http://cattravelblog.test/images/svg/cat.svg" width="51" height="50" style="transform:rotate(-1deg) scale(1.12);" alt="cat" >
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
                            <a href="/login">
                                <div class="nav-content">
                                    <div class="white-border">
                                        <div>Login</div>
                                    </div>
                                </div>
                            </a>
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
    </header>

    <div class="container">
        <div class="row login">
            <div class="col-md-5 login-panel">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="http://cattravelblog.test/login">
                            <input type="hidden" name="_token" value="F7TI9KOWLifJoskoWOki47agUM8YMoH1CdkLuJrc">

                            <div class="form-group">
                                <label for="email" class="col-md-12 control-label">E-Mail Address</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-12 control-label">Password</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" > Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 login-btn">
                                    <button type="submit" class="btn btn-secondary btn-lg">
                                        <i class="fas fa-sign-in-alt"></i>
                                        Login
                                    </button>
                                    <br>
                                    <div class="register-link">
                                        <a href="/register">Register Here</a>
                                    </div>
                                    <div class="register-link">
                                        <a href="http://cattravelblog.test/password/reset">Forgot Your Password?</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="authFooter"></div>

</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('partials.head')
</head>
<body>

<section id="banner">
    @include ('partials.home_banner')
</section>

<section id="body">

    <header id="navbar" class="master-nav container-fluid">
        <div class="row justify-content-between">
            @include ('partials.nav')
        </div>
    </header>

    <div class="page-border">
        @if ($flash = session('message'))
            <div id="flash-message" class="alert alert-success" role="alert">
                {{ $flash }}
            </div>
        @endif

        @yield ('content')

        @include ('partials.footer')
    </div>

</section>

<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the navbar
    var navbar = document.getElementById("navbar");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
</body>
</html>
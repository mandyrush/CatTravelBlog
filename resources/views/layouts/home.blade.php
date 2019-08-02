<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
</head>

<script>
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
    });
</script>

<body>
    <div class="se-pre-con"></div>

    <section class="homeBanner">
        @include ('partials.home_banner')
    </section>

    <header class="navbar-layout-1">
        @include ('partials.nav')
    </header>

    <section class="homeBody">
        @yield ('content')
        @include ('partials.footer')
    </section>
</body>
</html>
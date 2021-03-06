<!DOCTYPE html>
<html lang="en">
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

    <div class="master page-border">

        <header class="navbar-layout-1">
            @include ('partials.nav')
        </header>

        <div class="master-logo"><a href="/">Cats Wander</a></div>

        @yield ('content')

        <div class="authFooter"></div>

    </div>

    @yield ('scripts')
</body>
</html>
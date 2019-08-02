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

    <header class=" kitties-humans-nav container-fluid">
        <div class="row navbar-layout-1">
            @include ('partials.nav')
        </div>
    </header>

    @yield ('content')

</body>
</html>
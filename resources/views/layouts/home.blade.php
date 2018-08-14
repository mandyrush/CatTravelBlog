<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
</head>

<body>
    <section class="homeBanner">
        @include ('partials.home_banner')
    </section>

    <header id="navbar">
        <div class="nav-oval"></div>
        @include ('partials.nav')
        <div class="drop-shadow"></div>
    </header>

    <section class="homeBody">
            @yield ('content')
            @include ('partials.footer')
    </section>
</body>
</html>
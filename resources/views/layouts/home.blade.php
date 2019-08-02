<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
</head>

<body>
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
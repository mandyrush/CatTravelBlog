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
        @include ('partials.nav')
    </header>

    <section class="homeBody">

            @yield ('content')

            @include ('partials.footer')

    </section>

    @yield('scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    <div class="master page-border">

        <header class="navbar-layout-1">
            <div class="nav-oval"></div>
                @include ('partials.nav')
            <div class="drop-shadow"></div>
        </header>

        <div class="master-logo"><a href="/">Cats Wander</a></div>

        @yield ('content')

        <div class="authFooter"></div>

    </div>

    @yield ('scripts')
</body>
</html>
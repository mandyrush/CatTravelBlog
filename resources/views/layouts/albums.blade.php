<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>

    <section>
        @include ('partials.albums_banner')
    </section>

    <header id="navbar" class="master-nav container-fluid">
        <div class="row justify-content-between">
            @include ('partials.nav')
        </div>
    </header>

    <div class="page-border">
        @yield ('content')
        @include ('partials.footer')
    </div>

    @yield ('scripts')
</body>
</html>
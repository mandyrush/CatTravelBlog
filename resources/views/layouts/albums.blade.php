<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
<div class="page-border">

    <section>
        @include ('partials.albums_banner')
    </section>

    <header class="master-nav container-fluid">
        <div class="row justify-content-between">
            @include ('partials.nav')
        </div>
    </header>

    @yield ('content')
    @include ('partials.footer')
</div>
</body>
</html>
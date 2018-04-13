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

<section class="body" id="body">

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

<script src="/js/app.js"></script>

</body>
</html>
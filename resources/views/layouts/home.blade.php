<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
</head>

<body>
    <section class="homeBanner">
        @include ('partials.home_banner')

        {{--@if ($flash = session('message'))--}}
            {{--<div id="flash-message" class="alert alert-success" role="alert">--}}
                {{--{{ $flash }}--}}
            {{--</div>--}}
        {{--@endif--}}

    </section>

    <section class="homeIntro">
        <div class="greeting pad50">
            Come with us! As me "Nessie", and my acquaintance Mozzie travel the world with our enslaved humans to the far reaching corners of the globe.
        </div>
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
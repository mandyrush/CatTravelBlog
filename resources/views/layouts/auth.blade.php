<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
<div class="master page-border">

    <header>
        @include ('partials.nav')
    </header>

    @yield ('content')

    <div class="authFooter"></div>

</div>

@yield ('scripts')
</body>
</html>
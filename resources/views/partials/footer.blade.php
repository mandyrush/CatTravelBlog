<footer class="main-footer">
    <div class="footerContent col-xl-9">

        <div class="footerLinks row col-sm-12">
            <a href="/">Home</a>
            <a href="/posts">Posts</a>
            <a href="/albums">Gallery</a>
            <a href="/kitties/mozzie">Mozzie</a>
            <a href="/kitties/nessie">Nessie</a>
            <a href="/humans/des">Des</a>
            <a href="/humans/amanda">Amanda</a>

            @if (Auth::check())
                <a href="/logout">Logout</a>
            @else ()
                <a href="/login">Login</a>
            @endif

            <a href="/register">Register</a>
        </div>

    </div>
</footer>
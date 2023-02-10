<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
    </head>

    <body>

        <header>
            <nav class="navbar navbar-expand-lg sticky-top container navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/ates_logo.png') }}" alt="">
                    </a>
                    <div class="" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a href="#contact" class="btn btnAtes" type="submit">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        @yield('content')

        @include ('layouts.footer')
    </body>
</html>

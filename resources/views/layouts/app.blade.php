<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

        @include('partials.header')
        @include('partials.preloader')
        @include('partials.search')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')

        <!-- **** All JS Files ***** -->
        <!-- jQuery 2.2.4 -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Popper -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All Plugins -->
        <script src="js/alime.bundle.js"></script>
        <!-- Active -->
        <script src="js/default-assets/active.js"></script>

    </body>
</html>

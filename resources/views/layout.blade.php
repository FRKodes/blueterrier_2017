<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        @include('partials.metas')
        @include('partials.styles')
        @include('partials.google')
    </head>
    <body id="top">
        <header>@include('partials.nav')</header>
        <section>@yield('content')</section>
        <footer>@include('partials.footer')</footer>
        <script src="js/app.js"></script>
        @include('partials.hotjar')
    </body>
</html>

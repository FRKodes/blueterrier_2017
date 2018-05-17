<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        @include('partials.metas_en')
        @include('partials.styles')
    </head>
    <body id="top">
        <header>@include('partials.nav_en')</header>
        <section>@yield('content')</section>
        <footer>@include('partials.footer_en')</footer>
        <script src="/js/app.js"></script>
        @include('partials.google')
        @include('partials.hotjar')
    </body>
</html>

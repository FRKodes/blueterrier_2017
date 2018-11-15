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
        <a target="_blank" class="whatsapp" href="https://api.whatsapp.com/send?phone=523317074070">
            <img src="/images/whatsapp-icon.png" alt="¿Tienes alguna duda? Escríbenos por WhatsApp">
        </a>
    </body>
</html>

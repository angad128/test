<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('frontendInclude/header')
        <title>Pllannepal - @yield('title')</title>
        @yield('styles')
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <div id="container">
            @include('frontendInclude/navbar')

           @yield('contents')
           
            @include('frontendInclude/footer')
        </div>
        @include('frontendInclude/scripts')
        @yield('scripts')
    </body>
</html>
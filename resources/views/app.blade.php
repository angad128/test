<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('include/header')
        @yield('styles')
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <div id="container">
            @include('include/navbar')

           @yield('contents')
           
            @include('include/footer')
        </div>

        
        @include('include/scripts')
        @yield('scripts')
    </body>
</html>
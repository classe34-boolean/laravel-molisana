<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page-title', 'Laravel Molisana')</title>

        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        @yield('head')
    </head>
    <body>
        
        @include('partials.header')    

        {{-- @dump($lunghe);
        @dump($corte);
        @dump($cortissime); --}}

        <main>
            @yield('main-content')
        </main>

        @include('partials.footer')

        @yield('scripts')

    </body>
</html>
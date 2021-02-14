<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @stack('meta')


        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/architect.css') }}">
        @stack('styles')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


    </head>
    <body class="font-sans antialiased">

        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header" style="background:rgb(224, 244, 255)">

            @include('layouts.navigation')

            <div class="app-main" id='app-main' style="margin-top: 70px">

            <div class="col-lg-3">
                @include('layouts.side-menu')

            </div>

                <div class="col-lg-9">

                    <div class="app-main__outer">
                            <div class="app-main__inner" style="background-color: white" style="padding-top:2000px">

                                @yield('content')
                            </div>
                    </div>
                </div>
            </div>

            @include('layouts.footer')
        </div>

        <script src="{{ asset('js/architect.js') }}" defer></script>



        @stack('modals')
        @stack('scripts')

    </body>
</html>

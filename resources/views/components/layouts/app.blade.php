<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        {{-- jquery --}}
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/5d3b1bfe4e.js" crossorigin="anonymous"></script>

        {{-- js and css files --}}
        <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css" >
        <script defer src="{{ asset('js/index.js') }}" type="text/javascript"></script>

        {{-- scripts --}}
        @vite('resources/css/app.css')
    </head>
    <body class="font-robotoMono">
        <div id="condiv">
            @include('components.layouts.navigation')

            {{ $slot }}
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="{{ asset('/storage/img/favicon.png') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Ethan Portfolio</title>

        <!-- Fonts -->
    </head>
    <body class="antialiased">
        <div id="app" class="background">
            <main-page />
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

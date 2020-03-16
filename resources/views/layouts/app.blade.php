<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Locale home</title>

        <script>
            window._locale = "{{ $locale }}";
        </script> 
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <h1>Locale: {{ $locale }}</h1>
            <div id="app">
                <h2>router-view</h2>
                <router-view></router-view>
            </div>
        </div>
    </body>
</html>

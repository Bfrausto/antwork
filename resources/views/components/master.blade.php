<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body,textarea {
        background-color:whitesmoke;
    }
    </style>
</head>
<body>
    <div id="app">
        <section class="px-8 pb-4 mb-6">
            <header class="container mx-auto pl-12">
                <h1>
                    <img src="/images/logo.png" alt="Antwort" width="130" height="24">
                </h1>
            </header>
        </section>
        {{$slot}}
    </div>
</body>
</html>

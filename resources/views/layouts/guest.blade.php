<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css2?family=Roboto:" rel="stylesheet">
        {{-- CSS bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        {{-- CSS da aplicação --}}
        <link rel="stylesheet" href="/css/style.css">
        

        <!-- Scripts -->
       
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            @yield('content')
        </div>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

        <script   script src="/js/script.js"></script>


        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

@vite([
    'resources/js/app.js',
    'resources/css/app.css',
    'resources/css/style.css',
    'resources/css/login.css'
])

    </body>
</html>

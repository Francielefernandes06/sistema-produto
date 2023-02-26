<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:" rel="stylesheet">
    {{-- CSS bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    {{-- CSS da aplicação --}}
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <div class="d-flex justi">
            <div>
                <a href="{{ url('/') }}">
                    <img src="/img/logo.png" alt="logo">
                </a>
            </div>
            <div>   
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                        @auth
                            <a href="{{ url('/dashboard') }}">Products</a>
                        @else
                            <a href="{{ route('login') }}">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" >Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
    
            </div>
        </div>
        
        
    </header>

    @vite([
    'resources/js/app.js',
    'resources/css/app.css',
    'resources/css/style.css',
])
</body>
</html>
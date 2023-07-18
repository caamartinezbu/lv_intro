<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="{{asset('../css/app.css')}}"> -->
    <!-- importamos nuestros estilos de vite y lo colocamos también en vite.config.js  -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Inicio Blog</title>
</head>

<body>
<div class="container px-4 mx-auto">

    <header class="flex justify-between items-center py-4 ">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{ route('home')}}">
                    <img src="{{ asset('images/logo1.png')}}" alt="" class="h-12">
                </a>
                    <form action="">
                        <input type="text" placeholder="Buscar">
                    </form>
             
            </div>
            @auth
            <a href="{{route('dashboard')}}">Dashboard</a>
    
            @else
            <a href="{{route('login')}}">Login</a>
    
            @endauth
    </header>
    @yield ('content')
</div>
<!-- 
    <p>
        <a href="{{ route('home')}}">Home</a>
        <a href="{{ route('blog')}}">Blog</a>
       
    </p>
    <hr> -->
</body>
</html>
<?php
use App\Http\Controllers\PizzaController;
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StonksPizza</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/src/styles/main.css">
    <!-- Include Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="flex flex-col min-h-screen items-center bg-black text-white">

<header class="bg-blue-500 p-4 w-full flex flex-col items-center">
    <h1 class="text-5xl mb-2">StonksPizza</h1>
    <nav class="mt-2">
        <ul class="flex">
            <li class="mr-4"><a href="{{route('index')}}" class="text-lg hover:text-gray-300">Home</a></li>
            <li class="mr-4"><a href="#" class="text-lg hover:text-gray-300">Menu</a></li>
            <li><a href="{{ route('status') }}" class="text-lg hover:text-gray-300">Status</a></li>
            @if (auth()->check())
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="bg-blue-500 border-blue-950 border-2 border-b-4 border-t-4 text-center text-4xl logoutImage">
                    @csrf
                    <button type="submit" class="loginImage">
                        <img src="{{asset('Assets/logout.png')}}" alt="Logout" class="loginImage">
                    </button>
                </form>
            @else
                <a href="{{route('login')}}" class="bg-blue-500 border-blue-950 border-2 border-b-4 border-t-4 text-center text-4xl"><img src="{{asset('Assets/5509636.png')}}" alt="Login" class="loginImage"></a>
            @endif

        </ul>
    </nav>
</header>

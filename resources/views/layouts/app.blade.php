<?php
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
            <li class="mr-4">
                <a href="{{route('index')}}" class="text-lg hover:text-gray-300">Home</a>
            </li>
            <li class="mr-4">
                <a href="#" class="text-lg hover:text-gray-300">Menu</a>
            </li>
            <li class="mr-4">
                <a href="{{ route('status') }}" class="text-lg hover:text-gray-300">Status</a>
            </li>
            <li class="mr-4">
                <a href="{{ route('order.index') }}" class="text-lg hover:text-gray-300">Order</a>
            </li>
            @if (auth()->check())
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="bg-blue-500 border-blue-950 border-2 border-b-4 border-t-4 text-center text-4xl logoutImage">
                    @csrf
                    <button type="submit" class="loginImage">
                        <img src="{{asset('Assets/logout.png')}}" alt="Logout" class="loginImage w-8 h-8"> <!-- Adjust width and height as needed -->
                    </button>
                </form>
            @else
                <a href="{{route('login')}}" class="bg-blue-500 border-blue-950 border-2 border-b-4 border-t-4 text-center text-4xl loginImage">
                    <img src="{{asset('Assets/login.png')}}" alt="Login" class="loginImage w-6 h-6"> <!-- Adjust width and height as needed -->
                </a>
            @endif
        </ul>
    </nav>
</header>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @yield ('content')
            </main>
        </div>
    </body>
    <footer class="bg-blue-500 text-white p-4 w-full mt-auto">
    <div class="flex justify-between items-center">
        <div>
            <h3 class="text-xl font-bold mb-2">Contact Us</h3>
            <p>Email: info@stonkspizza.com</p>
            <p>Phone: +1 123-456-7890</p>
        </div>
        <div class="flex items-center">
            <!-- Social Media Logos -->
            <a href="https://www.instagram.com/" class="text-white mx-2 hover:text-gray-300" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/" class="text-white mx-2 hover:text-gray-300" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.youtube.com/" class="text-white mx-2 hover:text-gray-300" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
            <!-- Add more social media logos as needed -->
        </div>
    </div>
</footer>
</html>

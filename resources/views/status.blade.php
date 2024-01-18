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
        </ul>
    </nav>
</header>

<div class="flex-grow flex items-center justify-center">
    <div class="w-64 h-64 border border-white bg-blue-500"></div>
</div>


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

</body>
</html>

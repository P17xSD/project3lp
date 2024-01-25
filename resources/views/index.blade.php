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
            <li class="mr-4"><a href="{{route('menu')}}" class="text-lg hover:text-gray-300">Menu</a></li>
            <li><a href="{{ route('status') }}" class="text-lg hover:text-gray-300">Status</a></li>
            <li><a href="{{ route('order.index') }}" class="text-lg hover:text-gray-300">Order</a></li>
        </ul>
    </nav>
</header>

<main class="flex flex-col items-center justify-center mx-auto mt-8 p-4 bg-blue-500 rounded-md shadow-md text-white">
    <h2 class="text-2xl font-bold mb-2">Welcome to StonksPizza</h2>
    <p>Explore our delicious pizza menu and place your order. From classic Margherita to innovative Stonks Special, we have a variety of pizzas to satisfy your cravings.</p>
    <p>We use the finest ingredients and traditional recipes to deliver a mouth-watering pizza experience. Don't miss out on our limited-time offers and exclusive deals.</p>
    <p>Visit us today and embark on a journey of flavor!</p>
</main>

<!-- New blank box -->
<div class="flex flex-col items-center justify-center mx-auto mt-8 p-4 bg-blue-500 rounded-md shadow-md">
    <!-- This box is blank -->
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

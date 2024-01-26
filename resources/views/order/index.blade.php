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
<body class="flex flex-col min-h-screen items-center bg-darkgray text-white">

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


<!-- New section with 8 random containers -->
<div class="flex flex-wrap justify-center mt-8">
    @php
        $pizzaImages = [
            'Pizza1.jpg',
            'Pizza2.jpg',
            'Pizza3.jpg',
            'Pizza4.jpg',
            'Pizza5.jpg',
            'Pizza6.jpg',
            'Pizza7.jpg',
            'Pizza8.jpg',

        ];
    @endphp

    @for($i = 0; $i < count($pizzaImages); $i++)
        <div class="max-w-sm rounded overflow-hidden shadow-lg m-4 bg-white">
            <!-- Use the array of image URLs with the correct path -->
            <img src="{{ asset('Assets/' . $pizzaImages[$i]) }}" alt="Pizza" class="w-full h-48 object-cover">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-black">Pizza Title {{$i + 1}}</div>
                <!-- Add more pizza information if needed -->
            </div>
            <div class="px-6 py-4">
                <button class="bg-blue-500 text-white py-2 px-4 rounded-full">
                    Add to Cart
                </button>
            </div>
        </div>
    @endfor
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

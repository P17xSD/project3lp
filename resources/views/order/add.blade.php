<!-- resources/views/order/create.blade.php -->
@vite('resources/css/app.css')

@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8 p-8 bg-white rounded-md shadow-md">
        <h2 class="text-3xl font-semibold mb-6">Create Pizza</h2>
        <form action="{{ route('order.create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Pizza Name:</label>
                <input type="text" name="name" class="mt-1 p-2 w-full border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="size" class="block text-sm font-medium text-gray-600">Pizza Size:</label>
                <input type="text" name="size" class="mt-1 p-2 w-full border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="toppings" class="block text-sm font-medium text-gray-600">Pizza Toppings:</label>
                <textarea name="toppings" class="mt-1 p-2 w-full border rounded-md" required></textarea>
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-sm font-medium text-gray-600">Pizza Photo:</label>
                <input type="file" name="photo" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Create Pizza</button>
            </div>
        </form>
    </div>
@endsection

<!-- resources/views/order/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Create Pizza</h2>
    <form action="{{ route('order.pizza.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Pizza Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="size">Pizza Size:</label>
        <input type="text" name="size" required>
        <br>
        <label for="toppings">Pizza Toppings:</label>
        <textarea name="toppings" required></textarea>
        <br>
        <label for="photo">Pizza Photo:</label>
        <input type="file" name="photo">
        <br>
        <button type="submit">Create Pizza</button>
    </form>
@endsection

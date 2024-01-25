@extends('layouts.app')

@section('content')
    <h2>Bewerk pizza</h2>
    <form action="{{ route('order.edit', $index) }}" method="post">
        @csrf
        <!-- Voeg hier formuliervelden toe voor het bewerken van de pizza -->
        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Bewerk</button>
    </form>
@endsection
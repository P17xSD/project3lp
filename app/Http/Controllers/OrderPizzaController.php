<?php

// OrderPizzaController.php


namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class OrderPizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        return view('order.index', compact('pizzas'));
    }

    public function create()
    {
        return view('order.add');
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'size' => 'required',
            'toppings' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
        }

        Pizza::create([
            'name' => $request->name,
            'size' => $request->size,
            'toppings' => $request->toppings,
            'photo' => isset($imageName) ? '/images/' . $imageName : null,
        ]);

        return redirect()->route('order.index')->with('success', 'Pizza created successfully');
    }
}
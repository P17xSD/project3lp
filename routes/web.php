<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('pizzapizza', PizzaController::class)->middleware('auth')->except(['index', 'show']);
Route::get('/pizzapizza', [PizzaController::class, 'index'])->name('index');
Route::get('/pizzapizza/show/{id}', [PizzaController::class, 'show'])->name('showMain');
Route::get('/pizzapizza/status', [PizzaController::class, 'show'])->name('status');
Route::get('/pizzapizza/menu', [PizzaController::class, 'show'])->name('menu');
Route::get('/second-page', [PizzaController::class,'show'])->name('second-page');



require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/property/create', [PropertyController::class, 'create'])->name('property.create');
    Route::post('/property', [PropertyController::class, 'store'])->name('property.store');
    Route::get('/property/{property}/edit', [PropertyController::class, 'edit'])->name('property.edit');
    Route::put('/property/{property}/update', [PropertyController::class, 'update'])->name('property.update');
    Route::delete('/property/{property}/destroy', [PropertyController::class, 'destroy'])->name('property.destroy');
});

Route::get('/property', [PropertyController::class, 'index'])->name('property.index');




require __DIR__ . '/auth.php';

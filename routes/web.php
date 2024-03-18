<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;



Route::get('/property', [PropertyController::class, 'index'])->name('property.index');
Route::get('/property/create', [PropertyController::class, 'create'])->name('property.create');
Route::post('/property', [PropertyController::class, 'store'])->name('property.store');
Route::get('/property/{property}/edit', [PropertyController::class, 'edit'])->name('property.edit');
Route::put('/property/{property}/update', [PropertyController::class, 'update'])->name('property.update');
Route::delete('/property/{property}/destroy', [PropertyController::class, 'destroy'])->name('property.destroy');

// Route::get('/property/home', [PropertyController::class, 'index'])->name('property.home');

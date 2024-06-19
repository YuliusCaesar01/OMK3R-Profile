<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

// About
Route::get('/about', function () {
    return view('about');
})->name('about');

// Information
Route::get('/information', function () {
    return view('information');
})->name('information');

// Gallery
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//content
Route::get('/content', function () {
    return view('layouts.content');
})->middleware(['auth'])->name('content');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';

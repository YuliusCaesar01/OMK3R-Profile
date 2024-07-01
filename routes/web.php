<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetupController;
use Illuminate\Support\Arr;

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

Route::get('/information/{id}', [SetupController::class, 'viewinformation'])->name('information.view');

// Gallery
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('contact.send', [MessageController::class, 'sendMessage'])->name('contact.send');

// Dashboard Admin
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//content | Information Admin
Route::get('/content', function () {
    return view('layouts.content');
})->middleware(['auth'])->name('content');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('createinformation', [SetupController::class, 'createinformation'])->name('createinformation');
    Route::post('storeinformation', [SetupController::class, 'storeinformation'])->name('storeinformation');
    Route::get('information/{id}/edit', [SetupController::class, 'editinformation'])->name('editinformation');
    Route::put('information/{id}', [SetupController::class, 'updateinformation'])->name('updateinformation');
    Route::delete('deleteinformation/{id}', [SetupController::class, 'deleteinformation'])->name('deleteinformation');
    Route::get('message', [MessageController::class, 'index'])->name('message');
    
});



require __DIR__.'/auth.php';

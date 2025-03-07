<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', function () {
    return view('about');
});
Route::get('/programs', function () {
    return view('programs');
});
Route::get('/dreamform', function () {
    return view('dreamform');
});
Route::get('/pilot2k23', function () {
    return view('pilot2k23');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/submitted', function () {
    return view('submit');
})->name('submitted');;


Route::post('/dreamform', [FormController::class, 'store'])->name('dreamform');
Route::post('/contactform', [FormController::class, 'storeContact'])->name('contactform');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/adminpanel', function () {
    return view('adminpanel');
})->middleware(['auth', 'verified'])->name('adminpanel');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

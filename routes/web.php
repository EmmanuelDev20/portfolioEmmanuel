<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/', [ContactController::class, 'store'])->name('contact');

Route::get('projects/{project}', function () {
    return view('projects.show');
})->name('projects-show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

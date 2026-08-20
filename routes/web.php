<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/instructor', [PageController::class, 'instructor'])->name('instructor');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

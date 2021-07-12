<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\PostController;

Route::view('/', 'welcome')->middleware('cacheResponse');
Route::view('/contact', 'pages.contact')->middleware('cacheResponse');
Route::view('/about', 'pages.about')->middleware('cacheResponse');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('posts', PostController::class);

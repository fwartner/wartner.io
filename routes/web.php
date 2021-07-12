<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\PostController;

Route::view('/', 'welcome')->middleware('cacheResponse');
Route::view('/contact', 'pages.contact')->middleware('cacheResponse');
Route::view('/about', 'pages.about')->middleware('cacheResponse');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('blog')->as('blog.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('posts');
    Route::resource('posts', PostController::class);
});

Route::feeds();

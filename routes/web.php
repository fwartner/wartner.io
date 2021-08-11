<?php

use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Cv\CVController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->middleware('cacheResponse');
Route::view('/contact', 'pages.contact')->middleware('cacheResponse');
Route::view('/about', 'pages.about')->middleware('cacheResponse');
Route::view('/imprint', 'pages.imprint')->middleware('cacheResponse');

Route::get('/cv', CVController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('blog')->as('blog.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('posts')->middleware('cacheResponse');
    Route::resource('posts', PostController::class)->middleware('cacheResponse');
});

Route::feeds();

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

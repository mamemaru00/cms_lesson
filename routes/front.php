<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     echo 'front';
// });

Route::get('/', [PostController::class, 'index'])->name('home');
// Route::resource('posts', [PostController::class])->only(['index','show']);
Route::resource('posts', PostController::class)->only(['index','show']);
// Route::resource('posts', 'PostController')->only(['index','show']);
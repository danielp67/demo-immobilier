<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', []);
});


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/posts/{id}/edit', [PostController::class, 'edit']);

Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

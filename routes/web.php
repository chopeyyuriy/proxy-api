<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/alerts', [IndexController::class, 'alerts'])->name('alerts');
Route::get('/live-search', [IndexController::class, 'liveSearch'])->name('live_search');
Route::get('/tasks', [IndexController::class, 'tasks'])->name('tasks');

/* Posts */
Route::get('/posts', [PostController::class, 'posts'])->name('posts');



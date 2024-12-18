<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('alerts', [IndexController::class, 'alerts'])->name('alerts');
Route::get('live-search', [IndexController::class, 'liveSearch'])->name('live_search');
Route::get('tasks', [IndexController::class, 'tasks'])->name('tasks');

/* Posts */
Route::get('posts', [PostController::class, 'posts'])->name('posts');
Route::put('create-post', [PostController::class, 'createPost'])->name('create_post');
Route::get('_show-post/{id}', [PostController::class, 'showPost'])->name('show_post');
Route::patch('update-post', [PostController::class, 'updatePost'])->name('update_post');
Route::delete('delete-post', [PostController::class, 'deletePost'])->name('delete_post');





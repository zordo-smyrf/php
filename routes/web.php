<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/postssss', [PostController::class, 'show']);
Route::get('/userssss', [UserController::class, 'show1']);


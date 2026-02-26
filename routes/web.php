<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts', function () {
    return 'список постов';
});
Route::get('/post/{id}', function () {
    return 'айди';
});
Route::get('/dir/test', function () {
    return 'тест';
});
Route::get('/user1/{name}', function () {
    return 'тест';
});
Route::get('/user2/{surname}/{name}', function ($surname, $name) {
    return $surname . ' ' . $name;
});
Route::get('/city/{city?}', function ($city) {
    return $city . 'omsk';
});
Route::get('/user/{id}/{name}', function ($id, $name) {
    return $id . ' ' . $name;
})->where('id', '[0-9]+')->where('name', '[a-z]+');

Route::get('/user/all/{id}', [UserController::class, 'show1']);

Route::get('/user1/{name}', [CategoryController::class, 'show2']);
Route::get('/post/{id}', [PostController::class, 'show']);


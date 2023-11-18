<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts/create', [App\Http\Controllers\PostController::class,'create'])->name('posts.create');
Route::post('/posts/create', [App\Http\Controllers\PostController::class,'store'])->name('posts.store');

Route::get('/people/index', [App\Http\Controllers\PeopleController::class, 'index'])->name('people.index');



Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
});

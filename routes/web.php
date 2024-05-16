<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ParamController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;

// Route::get('/', function () {
//     $posts = [];
//     if (auth()->check()){
//         $posts = auth()->user()->usersPosts()->latest()->get();
//     }
//     return view('home', ['posts' => $posts]);
// });

Route::get('/', function () {
    return view('helper');
})->name('home');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/dashboard', function () {
    $parameters = [];
    if (auth()->check()){
        $parameters = auth()->user()->usersParameters()->get();
    }
    return view('dashboard', ['parameters' => $parameters]);
})->middleware('role:admin')->name('dashboard');

// Route::get('/', function () {
//     $parameters = [];
// });

// User system
Route::post('laravel-xampp/public/register', [UserController::class, 'register']);
Route::post('laravel-xampp/public/logout', [UserController::class, 'logout']);
Route::post('laravel-xampp/public/login', [UserController::class, 'login']);

// Blog post related routes
Route::post('laravel-xampp/public/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [PostController::class, 'actuallyUpdatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);

// Parameter related routes
Route::post('laravel-xampp/public/create-parameter', [ParamController::class, 'createParam']);

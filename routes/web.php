<?php

use App\Models\Post;
use App\Models\Parameter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ParamController;
use Illuminate\Routing\Route as RoutingRoute;

// Route::get('/', function () {
//     $posts = [];
//     if (auth()->check()){
//         $posts = auth()->user()->usersPosts()->latest()->get();
//     }
//     return view('home', ['posts' => $posts]);
// });

Route::model('parameter', Parameter::class);

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

// User system
Route::post('DALLE-Prompt-Helper/public/register', [UserController::class, 'register']);
Route::post('DALLE-Prompt-Helper/public/logout', [UserController::class, 'logout']);
Route::post('DALLE-Prompt-Helper/public/login', [UserController::class, 'login']);

// Blog post related routes
Route::post('DALLE-Prompt-Helper/public/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [PostController::class, 'actuallyUpdatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);

// Parameter related routes
Route::post('DALLE-Prompt-Helper/public/create-parameter', [ParamController::class, 'createParam']);
Route::put('/edit-parameter/{parameter}', [ParamController::class, 'updateParam'])->name('parameters.updateParam');
Route::delete('/delete-parameter/{parameter}', [ParamController::class, 'deleteParam'])->name('parameters.deleteParam');



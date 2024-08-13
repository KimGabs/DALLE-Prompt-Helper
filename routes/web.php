<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\AdminDashboardController;


Route::get('/', HomeController::class)->name('home');
Route::get('/helper', [HelperController::class, 'index'])->name('helper');
Route::post('/helper', [HelperController::class, 'create'])->name('helper.create');
Route::get('posts/{slug}', [PostController::class, 'show'])->name('posts.show');

// Route::get('/helper', [ParameterController::class, 'index'])->name('helper.helper');
Route::resource('/admin/parameters', ParameterController::class);
Route::resource('/admin/users', UserController::class);
Route::get('/myprompts', [PostController::class, 'index'])->name('posts.index');

// Route::get('/manage-users', HomeController::class)->name('manage-users');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});


Livewire::setScriptRoute(function ($handle) {
    return Route::get('dalle-helper-project/public/livewire/livewire.js', $handle);
    });
Livewire::setUpdateRoute(function ($handle) {
return Route::post('dalle-helper-project/public/livewire/update', $handle)->name('update');
});


// Parameter related routes
// Route::put('/edit-parameter/{parameter}', [ParameterController::class, 'updateParam'])->name('parameters.updateParam');
// Route::delete('/delete-parameter/{parameter}', [ParameterController::class, 'deleteParam'])->name('parameters.deleteParam');
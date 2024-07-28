<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\ParameterController;


Route::get('/', HomeController::class)->name('home');
Route::get('/myprompts', [PostController::class, 'index'])->name('posts.index');
Route::get('/helper', [HelperController::class, 'index']);
// Route::get('/helper', [ParameterController::class, 'index'])->name('helper.index');
Route::resource('parameters', ParameterController::class);


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
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Post\PostController;
use App\Http\Controllers\Backend\User\UserController;



 //Route Home Controller
Route::get('/', [HomeController::class, 'index'])->name('home');






Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    //Route User Profile Controller
    Route::resource('profile', UserController::class);

   //Route User Post Controller
    Route::resource('post', PostController::class);
});

require __DIR__.'/auth.php';

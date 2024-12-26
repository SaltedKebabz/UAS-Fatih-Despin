<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::resource('products', ProductController::class);

route::get('/', [ProfileController::class, 'index']);
Route::get('/profile/{profile:nama}', [ProfileController::class, 'show'])->name('profile.show');
<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/profile/create');

Route::get('/profile/create', [ProfileController::class, 'showForm']);
Route::post('/profile/result', [ProfileController::class, 'processForm']);

Route::get('/example/create', [ExampleController::class, 'show']);
Route::post('/example/result', [ExampleController::class, 'process']);

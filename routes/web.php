<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/example/create');

Route::get('/profile/create', [ProfileController::class, 'showForm']);
Route::post('/profile/result', [ProfileController::class, 'processForm']);

Route::get('/example/create', [ExampleController::class, 'show']);
Route::post('/example/result', [ExampleController::class, 'process']);


// closure route priklad
//Route::get('/example2/create', function () {
//    return view('profile.exampleShow');
//});
//
//Route::post('/example2/result', function (Request $request) {
//
//    $cislo = $request->input('cislo');
//
//    $a = [];
//
//    $a[0] = $cislo;
//    $a[1] = $cislo*2;
//
//    for($i = 2; $i < 10; $i++) {
//        $a[$i] = $a[$i-1] + $a[$i-2];
//    }
//
//    return view('profile.exampleProcess', ['data' => $a]);
//});

<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});
Route::get('/crear-cuenta', [RegisterController::class,'register'] );

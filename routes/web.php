<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('anaks', AnakController::class);

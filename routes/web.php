<?php

use App\Http\Controllers\catFactController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/me', [catFactController::class, 'show']);

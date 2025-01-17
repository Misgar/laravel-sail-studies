<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function(){
    echo 'ola, Mundo!';
});

Route::get('/series', [SeriesController::class, 'index']);

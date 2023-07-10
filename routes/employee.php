<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin; 
    Route::get('/', function () {
        return redirect()->to("/login");
    });
    Route::middleware('auth')->group(function () {
        Route::get('/home', function () {
            return view('welcome');
        });});

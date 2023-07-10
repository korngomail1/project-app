<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::get('/', function () {
    return redirect()->to("/login");
});
Route::prefix('_admin')->middleware('auth','admin')->group(function () {
    Route::get('/home', function () {
        return view('welcome');
    });
    Route::get('/schedule', [Admin\ScheduleController::class, 'index'])->name('admin.schedule');   
});
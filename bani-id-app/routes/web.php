<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/home', [DashboardController::class, 'index']);
// Route::get('/createid', [DashboardController::class, 'createid']);
// Route::get('/adminpanel', [DashboardController::class, 'adminpanel']);
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/createid', function () {
    return view('createid');
})->name('createid');
Route::get('/adminpanel', function () {
    return view('adminpanel');
})->name('adminpanel');
Route::get('/logout', function () {
    return view('auth.login');
})->name('login');
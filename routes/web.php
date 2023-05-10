<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResidentController;

Route::get('/', function (){
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/resident/add', [ResidentController::class, 'addResident'])->name('addResident');

Route::get('/', function (){
    return view('dashboard');
});

Route::post('/home', [HomeController::class, 'index'])->name('home');
Route::get('/resident/list', [ResidentController::class, 'listResident'])->name('listResident');

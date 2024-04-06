<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

//use App\Http\Controllers\UserController;

//Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/', function () {
    return view('inicio');
});
Route::get('/usuario',[UserController::class,'index'])->name('usuario.index');

Route::get('/admin', [AdminController::class, 'index'])
     ->middleware('auth.admin')
     ->name('admin.index');
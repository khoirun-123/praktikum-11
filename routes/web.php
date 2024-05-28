<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienConroller;
use App\Http\Controllers\PeriksaConroller;
use App\Http\Controllers\ParamedikConroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Hai, Saya Hanna Anggraini siap belajar Laravel 11";
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien', [PasienConroller::class, 'index']);

Route::get('/periksa', [PeriksaConroller::class, 'index']);

Route::get('/paramedik', [ParamedikConroller::class, 'index']);

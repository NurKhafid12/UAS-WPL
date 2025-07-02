<?php

use App\Livewire\Dashboard;
use App\Livewire\Login;
use Illuminate\Support\Facades\Route;
use App\Livewire\PenerimaComponent;
use App\Livewire\DataKelayakan;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',Login::class);
Route::get('/dashboard',Dashboard::class);
Route::get('/penerima', PenerimaComponent::class)->middleware('auth');
Route::get('/kelayakan', DataKelayakan::class);



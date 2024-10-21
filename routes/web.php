<?php

use App\Http\Controllers\LandingPagesController;
use Illuminate\Support\Facades\Route;

// ruta de inicio
Route::get('', [LandingPagesController::class, 'index'])->name('home');

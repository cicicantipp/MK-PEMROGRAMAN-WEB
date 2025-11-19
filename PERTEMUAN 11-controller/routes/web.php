<?php

use App\Http\Controllers\Website\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
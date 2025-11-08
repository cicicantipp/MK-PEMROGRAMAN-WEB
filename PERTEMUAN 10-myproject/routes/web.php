<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/halo', function () { 
return 'Halo Laravel!'; 
}); 

Route::get('/index', function () {
    return view('index');
});
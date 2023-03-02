<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/chi-sono', function(){
    return view('chi-sono');
})->name('chi-sono');
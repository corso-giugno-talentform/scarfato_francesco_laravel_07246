<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-sono', function () {
    return view('chi-sono');
});

Route::get('/curricula', function () {
    return view('curricula');
});

Route::get('/contatti', function () {
    return view('contatti');
});

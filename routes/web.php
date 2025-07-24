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

Route::get('/servizi', function () {
    $services = [
        'marketing',
        'comunicazione',
        'website'
    ];

    return view('servizi', ['servizi' => $services]);
});

Route::get('/servizio/{servizio}', function ($servizio) {
    $services = [
        'marketing' => 10,
        'comunicazione' => 20,
        'website' => 30
    ];
    $costo = isset($services[$servizio]) ? $services[$servizio] : 'free';

    return view('servizio', [
        'servizio' => $servizio,
        'costo' => $costo
    ]);
});




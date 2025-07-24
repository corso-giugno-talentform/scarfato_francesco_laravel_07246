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
    
    $costo = isset($services[$servizio])
        ? $services[$servizio]
        : 'servizio-not-found';

    if (isset($services[$servizio])) {
        $servizio = $services[$servizio];

        return view('/servizio', [
            'servizio' => $servizio,
            'costo' => $costo
        ]);
    }

    return view('/not-found', [
        'servizio' => $servizio,
        'costo' => $costo
    ]);
});

Route::get('/progetti/{project}', function ($project) {
    //project = ago
    //projects = paglia
    //abort(404);
    $projects = [
        [
            'id' => 1,
            'slug' => 'piattaforma-di-ecommerce',
            'nome' => 'Piattaforma di eCommerce',
            'descrizione' => 'Una piattaforma per vendere prodotti online con pagamento integrato.',
            'image' => 'https://picsum.photos/id/3/200/300'
        ],
        [
            'id' => 2,
            'slug' => 'applicazione-per-task',
            'nome' => 'Applicazione per Task',
            'descrizione' => 'Un’app per organizzare e monitorare le attività giornaliere.',
            'image' => 'https://picsum.photos/id/3/200/300'
        ],
        [
            'id' => 3,
            'slug' => 'software-gestionali',
            'nome' => 'Software Gestionali',
            'descrizione' => 'Strumenti per automatizzare la contabilità e la gestione aziendale.',
            'image' => 'https://picsum.photos/id/6/200/300'
        ],
    ];

    dump($projects, $project);
    dump(array_search($project, array_column($projects, 'slug')));

    if (array_search($project, array_column($projects, 'slug')) !== false) {
        return $project;
    }

    abort (404);
});

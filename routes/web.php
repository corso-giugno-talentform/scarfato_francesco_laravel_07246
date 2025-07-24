<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/curricula', [PageController::class, 'curricula'])->name('curricula');
Route::get('/contacts',  [PageController::class, 'contacts'])->name('contacts');;
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/service/{service}', [PageController::class, 'service'])->name('service');

/**
 * Lascio per pro-memoria
 */
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

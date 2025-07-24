# ############################################################################
# Estensioni utili per sviluppo Laravel
# ############################################################################

- mikestead.dotenv 
- shufo.vscode-blade-formatter
- onecentlin.laravel-blade
- amiralizadeh9480.laravel-extra-intellisense
- codingyu.laravel-goto-view

# ############################################################################
# Esercizio
# ############################################################################

- Creare un portoflio (usando anche il template delle passate lezioni) con una navbar funzionante.
- Creare una sezione servizi con un array dinamico
- Creare una pagina dettaglio al click del servizio

- Creare una sezione progetti e gestire queste pagina controllando che venga passato uno slug presente nell'array altrimenti generare un error 404 con abort(404);

```php
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

```
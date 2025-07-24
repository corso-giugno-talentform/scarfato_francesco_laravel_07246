<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My simple Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- richiamo bt via cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div id="container">
        <header>
            <div class="flex-nav">
                <div class="flex-gap-nav-item">
                    <a href="/">Home</a>
                    <a href="/chi-sono">Chi sono</a>
                    <a href="/curricula">Curricula</a>
                    <a href="/servizi">Servizi</a>
                    <a href="/contatti">Contatti</a>
                </div>
                <a href="https://www.linkedin.com/in/francescoscarfato/" target="_blank">LinkedIn</a>
            </div>
        </header>
        <hr />

        <div>
            <h1 id="id-servizio-lista">Servizi offerti</h1>

            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                @foreach ($servizi as $key => $servizio)
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">{{ $servizio }}</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$ {{$key * 10 + 10}}
                                <small class="text-body-secondary fw-light">/mo</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>10 users included</li>
                                <li>2 GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <a href="/servizio/{{ $servizio }}">
                            <button 
                                type="button" 
                                class="w-100 btn btn-lg btn-outline-primary">Accedi al servizio
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div id="contact-me">
            <div class="flex-gap-nav-item">
                <img id="whoami-image" src="assets/images/user-icon.png" alt="">
            </div>
            <p>Restiamo in contatto su: <span id="email">f.scarfato&#64;gmail&#46com</span></p>
        </div>
        <div>
            <button id="send-email">Contattami</button>
        </div>

        <hr />
        <footer>
            <div class="flex-nav">
                <div class="flex-gap-nav-item">
                    <a href="/">Home</a>
                    <a href="/chi-sono">Chi sono</a>
                    <a href="/curricula">Curricula</a>
                    <a href="/servizi">Servizi</a>
                    <a href="/contatti">Contatti</a>
                </div>
                <a href="https://www.linkedin.com/in/francescoscarfato/">LinkedIn</a>
            </div>
        </footer>
    </div>

    <script src="/assets/js/script.js"></script>
</body>

</html>

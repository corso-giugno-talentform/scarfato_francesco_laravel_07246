<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My simple Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

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
            <a 
                href="https://www.linkedin.com/in/francescoscarfato/"
                target="_blank">LinkedIn</a>
        </div>
    </header>
    <hr />

    <div id="whoami">
        <h1 id="hi-whoami">Contattami!</h1>
        <p id="abstract"><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>

    <div id="contact-me">
        <div class="flex-gap-nav-item">
            <img id="whoami-image" src="assets/images/user-icon.png" alt="" >
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
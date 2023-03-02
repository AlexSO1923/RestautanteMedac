<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("titulo")</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="cuerpodefinitivo">
    <header class="lista_navegador">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid ">
                <div class="lista_logo_header">
                    <a href="/"><img src="img/Logococina.png" alt=""></a>
                </div>
                <button type="button" class="navbar-toggler bg-light" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link lista_letras">Inicio</a>
                        <a href="Carta" class="nav-item nav-link lista_letras">Carta</a>
                        <a href="Ubi" class="nav-item nav-link lista_letras">Ubicación y contacto</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <a href="IniciarSesion" class="nav-item5 nav-link lista_letras5">Iniciar Sesion</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="footer text-center bg-black text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <p class="lead mb-0 index_texto1">Avda. de la Libertad 6,
                        <br>C.P. 14006 Córdoba
                        <br>España
                        <br>¡Horario ininterrumpido!
                        <br>De martes a domingo de 12:00 a 23:00
                        <br>Almuerzos: 13:00 a 16:00
                        <br>Cenas: de 20:00 a 23:00

                    </p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <img class="index_logo_footer" src="img/logo-800.png" alt="">
                </div>

                <div class="col-lg-4 index_redes">
                    <img src="img/37564.png" class="index_face" alt="">
                    <img src="img/87390.png" class="index_insta" alt="">
                </div>
                <p class="index_politica">Política de privacidad | Contacto Diseño División T.I. Electrónica Rincón</p>
            </div>
        </div>
    </footer>
</body>
</html>
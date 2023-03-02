<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" /> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>
    <title>@yield("titulo")</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="">
    <header class="reservacomida_navegador">
        <nav class="navbar navbar-expand navbar-light">
            <div class="container-fluid ">
                <div class="reservacomida_logo_header"></div>
                <button type="button" class="navbar-toggler bg-light" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    @if (Auth::check())
                        <div class="navbar-nav">
                            <a href="/" class="nav-item nav-link reservacomida_letras">Inicio</a>
                            <a href="Carta" class="nav-item nav-link reservacomida_letras">Carta</a>
                            <a href="Ubi" class="nav-item nav-link reservacomida_letras">Ubicación y contacto</a>
                        </div>
                        <div class="navbar-nav ms-auto">
                            <a href="/listaReserva1" class="nav-item5 nav-link index_letras5">{{ Auth::user()->name }}</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="nav-item5 nav-link index_letras5"><i class="fa"></i>Cerrar Sesión</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>                        
                        </div>
                    @else
                        <div class="navbar-nav">
                            <a href="/" class="nav-item nav-link reservacomida_letras">Inicio</a>
                            <a href="Carta" class="nav-item nav-link reservacomida_letras">Carta</a>
                            <a href="Ubi" class="nav-item nav-link reservacomida_letras">Ubicación y contacto</a>
                        </div>
                        <div class="navbar-nav ms-auto">
                            <a href="IniciarSesion" class="nav-item5 nav-link reservacomida_letras5">Iniciar Sesion</a>
                        </div>
                    @endif
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
                    <img class="index_logo_footer" src="img/Logococina.png" alt="">
                </div>

                <div class="col-lg-4 index_redes">
                    <div class="face_logo"></div>
                    <img src="img/37564.png" class="index_face" alt="">
                    <img src="img/87390.png" class="index_insta" alt="">
                </div>
                <p class="index_politica">Política de privacidad | Contacto Diseño División T.I. Electrónica Rincón</p>
            </div>
        </div>
    </footer>
    @stack('scripts')
</body>
</html>
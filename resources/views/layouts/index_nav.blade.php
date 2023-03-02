<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>@yield("titulo")</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header class="index_navegador">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid ">
                <div class="index_logo">
                    <a href="/"><img src="{{ asset('img/Logococina.png')}}" alt=""></a>
                </div>
                <button type="button" class="navbar-toggler bg-light" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                        @if (Auth::check())
                            <div class="navbar-nav">
                                <a href="/Carta" class="nav-item nav-link index_letras">Carta</a>
                                <a href="/Ubi" class="nav-item nav-link index_letras">Contacto</a>
                                <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>
                            </div>
                            <div class="navbar-nav">
                                <div class="dropdown ">
                                    <a href="" class="nav-item nav-link dropdown-toggle index_letras5" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                                    <div class="dropdown-menu">
                                        <a href="/listaReserva1" class="nav-item nav-link dropdown-item index_letras5 ">Mis reservas</a>
                                        <a href="/Call" class="nav-item nav-link dropdown-item index_letras5 ">RESERVAR</a>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="nav-item nav-link dropdown-item index_letras5"><i class="fa"></i>Cerrar Sesión</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="navbar-nav">
                                <a href="/Carta" class="nav-item nav-link index_letras">Carta</a>
                                <a href="/Ubi" class="nav-item nav-link index_letras">Contacto</a>
                                <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>

                            </div>
                            <div class="navbar-nav ms-auto">
                                <a href="/Call" class="nav-item5 nav-link index_letras5">RESERVAR</a>
                                <a href="/IniciarSesion" class="nav-item5 nav-link index_letras5">Iniciar Sesion</a>
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
                    <img class="index_logo_footer" src="{{ asset('img/Logococina.png')}}" alt="">
                </div>

                <div class="col-lg-4 index_redes">
                    <i class="fa-brands fa-facebook fa-5x"></i>
                    <i class="fa-brands fa-twitter fa-5x"></i>                    
                    <i class="fa-brands fa-instagram fa-5x"></i>
                    <i class="fa-brands fa-tiktok fa-5x"></i>                    
                </div>
                <p class="index_politica">Política de privacidad | Contacto Diseño División T.I. Electrónica Rincón</p>
            </div>
        </div>
    </footer>
</body>
</html>
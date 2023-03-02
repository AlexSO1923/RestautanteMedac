<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("titulo")</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="cuerpodefinitivo_reservafecha">
    {{-- <header class="reservacomida_navegador">
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
    </header> --}}
    <header class="reservacomida_navegador">
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
                            <a href="/" class="nav-item nav-link reservacomida_letras">Inicio</a>
                            <a href="Carta" class="nav-item nav-link reservacomida_letras">Carta</a>
                            <a href="Ubi" class="nav-item nav-link reservacomida_letras">Contacto</a>
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
                            <a href="Ubi" class="nav-item nav-link reservacomida_letras">Contacto</a>
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
                <div class="col-lg-4 mb-5 mb-lg-0 index_logo_footer">
                    <img class="index_logo_footer" src="{{ asset('img/Logococina.png') }}" alt="">
                </div>

                <div class="col-lg-4 index_redes">
                    {{-- <div class="face_logo"></div> --}}
                    <img src="{{ asset('img/37564.png') }}" class="index_face" alt="">
                    <img src="{{ asset('img/87390.png') }}" class="index_insta" alt="">
                </div>
                <p class="index_politica">Política de privacidad | Contacto Diseño División T.I. Electrónica Rincón</p>
            </div>
        </div>
    </footer>
    {{-- <section class="contact-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-content text-center">
                        <a href="#"><img src="img/Logococina.png" alt="logo"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum </p>
                        <div class="hr"></div>
                        <h6>1120 Lorem ipsum dolor sit amet, KC 179050, Chandigarh.</h6>
                        <h6>+01 2345 6789 12<span>|</span>+01 2345 6789 12</h6>
                        <div class="contact-social">
                            <ul>
                                <li><a class="hover-target" href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fab fa-github"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fab fa-behance"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</body>
</html>
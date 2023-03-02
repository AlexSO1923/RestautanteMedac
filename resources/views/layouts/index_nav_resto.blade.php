<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>
    <title>@yield("titulo")</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="index_navegador2">
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
                            @if(request()->is('Carta'))
                                <div class="navbar-nav"> 
                                    <a href="/" class="nav-item nav-link index_letras">inicio</a>
                                    <a href="/Ubi" class="nav-item nav-link index_letras">Contacto</a>
                                    <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>
                                </div>
                                <div class="navbar-nav">
                                    <div class="dropdown Carta_nav">
                                        <a href="" class="nav-item nav-link dropdown-toggle index_letras5" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu Index_nuevo">
                                            <a href="/listaReserva1" class="nav-item nav-link dropdown-item index_letras5 ">Mis reservas</a>
                                            <a href="/Call" class="nav-item nav-link dropdown-item index_letras5 ">RESERVAR</a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="nav-item nav-link dropdown-item index_letras5"><i class="fa"></i>Cerrar Sesión</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @elseif(request()->is('Ubi'))
                                <div class="navbar-nav"> 
                                    <a href="/" class="nav-item nav-link index_letras">Inicio</a>
                                    <a href="/Carta" class="nav-item nav-link index_letras">Carta</a>
                                    <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>
                                </div>
                                <div class="navbar-nav">
                                    <div class="dropdown Contacto_nav">
                                        <a href="" class="nav-item nav-link dropdown-toggle index_letras5" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu Index_nuevo">
                                            <a href="/listaReserva1" class="nav-item nav-link dropdown-item index_letras5 ">Mis reservas</a>
                                            <a href="/Call" class="nav-item nav-link dropdown-item index_letras5 ">RESERVAR</a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="nav-item nav-link dropdown-item index_letras5"><i class="fa"></i>Cerrar Sesión</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @elseif(request()->is('listaReserva1'))
                                <div class="navbar-nav"> 
                                    <a href="/" class="nav-item nav-link index_letras">Inicio</a>
                                    <a href="/Carta" class="nav-item nav-link index_letras">Carta</a>
                                    <a href="/Contacto" class="nav-item nav-link index_letras">Contacto</a>
                                    <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>
                                    
                                </div>
                                <div class="navbar-nav">
                                    <div class="dropdown call_nav">
                                        <a href="" class="nav-item nav-link dropdown-toggle index_letras5" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu Index_nuevo">
                                            <a href="/listaReserva1" class="nav-item nav-link dropdown-item index_letras5 ">Mis reservas</a>
                                            <a href="/Call" class="nav-item nav-link dropdown-item index_letras5 ">RESERVAR</a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="nav-item nav-link dropdown-item index_letras5"><i class="fa"></i>Cerrar Sesión</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @elseif(request()->is('Call'))
                                <div class="navbar-nav"> 
                                    <a href="/" class="nav-item nav-link index_letras">Inicio</a>
                                    <a href="/Carta" class="nav-item nav-link index_letras">Carta</a>
                                    <a href="/Ubi" class="nav-item nav-link index_letras">Contacto</a>
                                    <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>
                                </div>
                                <div class="navbar-nav">
                                    <div class="dropdown call_nav">
                                        <a href="" class="nav-item nav-link dropdown-toggle index_letras5" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu Index_nuevo">
                                            <a href="/listaReserva1" class="nav-item nav-link dropdown-item index_letras5 ">Mis reservas</a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="nav-item nav-link dropdown-item index_letras5"><i class="fa"></i>Cerrar Sesión</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @elseif(request()->is('reservaid'))
                                <div class="navbar-nav"> 
                                    <a href="/" class="nav-item nav-link index_letras">Inicio</a>
                                    <a href="/Carta" class="nav-item nav-link index_letras">Carta</a>
                                    <a href="/Ubi" class="nav-item nav-link index_letras">Contacto</a>
                                    <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>
                                </div>
                                <div class="navbar-nav">
                                    <div class="dropdown call_nav">
                                        <a href="" class="nav-item nav-link dropdown-toggle index_letras5" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu Index_nuevo">
                                            <a href="/listaReserva1" class="nav-item nav-link dropdown-item index_letras5 ">Mis reservas</a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="nav-item nav-link dropdown-item index_letras5"><i class="fa"></i>Cerrar Sesión</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @elseif(request()->is('mireserva3'))
                                <div class="navbar-nav"> 
                                    <a href="/" class="nav-item nav-link index_letras">Inicio</a>
                                    <a href="/Carta" class="nav-item nav-link index_letras">Carta</a>
                                    <a href="/Ubi" class="nav-item nav-link index_letras">Contacto</a>
                                    <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>
                                </div>
                                <div class="navbar-nav">
                                    <div class="dropdown call_nav">
                                        <a href="" class="nav-item nav-link dropdown-toggle index_letras5" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu Index_nuevo">
                                            <a href="/listaReserva1" class="nav-item nav-link dropdown-item index_letras5 ">Mis reservas</a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="nav-item nav-link dropdown-item index_letras5"><i class="fa"></i>Cerrar Sesión</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="navbar-nav"> 
                                    <a href="/" class="nav-item nav-link index_letras">Inicio</a>
                                    <a href="/Carta" class="nav-item nav-link index_letras">Carta</a>
                                    <a href="/Ubi" class="nav-item nav-link index_letras">Contacto</a>
                                </div>
                                <div class="navbar-nav">
                                    <div class="dropdown">
                                        <a href="" class="nav-item nav-link dropdown-toggle index_letras5" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                                        <div class="dropdown-menu Index_nuevo">
                                            <a href="/listaReserva1" class="nav-item nav-link dropdown-item index_letras5 ">Mis reservas</a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="nav-item nav-link dropdown-item index_letras5"><i class="fa"></i>Cerrar Sesión</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @else
                            @if(request()->is('Carta'))
                                <div class="navbar-nav">
                                    <a href="/" class="nav-item nav-link index_letras">Inicio</a>
                                    <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>
                                    <a href="/Ubi" class="nav-item nav-link index_letras">Contacto</a>
                                </div>
                                <div class="navbar-nav ms-auto">
                                    <a href="/Call" class="nav-item5 nav-link index_letras5">RESERVAR</a>
                                    <a href="/IniciarSesion" class="nav-item5 nav-link index_letras5">Iniciar Sesion</a>
                                </div>
                            @elseif(request()->is('Ubi'))
                                <div class="navbar-nav">
                                    <a href="/" class="nav-item nav-link index_letras">Inicio</a>
                                    <a href="/Carta" class="nav-item nav-link index_letras">Carta</a>
                                    <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>
                                </div>
                                <div class="navbar-nav ms-auto">
                                    <a href="/Call" class="nav-item5 nav-link index_letras5">RESERVAR</a>
                                    <a href="/IniciarSesion" class="nav-item5 nav-link index_letras5">Iniciar Sesion</a>
                                </div>
                            @elseif(request()->is('Reservafecha'))
                                <div class="navbar-nav">
                                    <a href="/" class="nav-item nav-link index_letras">Inicio</a>
                                    <a href="/Carta" class="nav-item nav-link index_letras">Carta</a>
                                    <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>
                                    <a href="/Ubi" class="nav-item nav-link index_letras">Contacto</a>
                                </div>
                                <div class="navbar-nav ms-auto">
                                    <a href="/IniciarSesion" class="nav-item5 nav-link index_letras5">Iniciar Sesion</a>
                                </div>
                            @elseif(request()->is('Multi'))
                                <div class="navbar-nav">
                                    <a href="/" class="nav-item nav-link index_letras">Inicio</a>
                                    <a href="/Carta" class="nav-item nav-link index_letras">Carta</a>
                                    <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>
                                    <a href="/Ubi" class="nav-item nav-link index_letras">Contacto</a>
                                </div>
                                <div class="navbar-nav ms-auto">
                                    <a href="/Call" class="nav-item5 nav-link index_letras5">Reservar</a>
                                    <a href="/IniciarSesion" class="nav-item5 nav-link index_letras5">Iniciar Sesion</a>
                                </div>
                            @elseif(request()->is('Call'))
                                <div class="navbar-nav">
                                    <a href="/" class="nav-item nav-link index_letras">Inicio</a>
                                    <a href="/Carta" class="nav-item nav-link index_letras">Carta</a>
                                    <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>
                                    <a href="/Ubi" class="nav-item nav-link index_letras">Contacto</a>
                                </div>
                                <div class="navbar-nav ms-auto">
                                    <a href="/Call" class="nav-item5 nav-link index_letras5">Reservar</a>
                                    <a href="/IniciarSesion" class="nav-item5 nav-link index_letras5">Iniciar Sesion</a>
                                </div>
                            @else
                                <div class="navbar-nav">
                                    <a href="/" class="nav-item nav-link index_letras">Inicio</a>
                                    <a href="/Carta" class="nav-item nav-link index_letras">Carta</a>
                                    <a href="/Multi" class="nav-item nav-link index_letras">Multimedia</a>
                                    <a href="/Ubi" class="nav-item nav-link index_letras">Contacto</a>
                                </div>
                                <div class="navbar-nav ms-auto">
                                    <a href="/IniciarSesion" class="nav-item5 nav-link index_letras5">Iniciar Sesion</a>
                                </div>
                            @endif
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
@extends('layouts.reserva_nav')
@section('titulo','reserva4')
@section('content')
    <div class="reservacomida_titulo">
        <h1>Restaurante ASO</h1>
    </div>
    <div class="reservacomida_separar"></div>
    <section class="segundo_apartado">
        <div class="container">
            <div class="row reservacomida_leyenda2">
                <div class="col-sm">
                    <div class="reservaconfir_seguimiento1">
                        <p>1</p>
                    </div>
                    <p style="color: #D9D9D9;">Fecha y Hora</p>
                </div>
                <div class="col-sm">
                    <div class="reservaconfir_seguimiento2">
                        <p>2</p>
                    </div>
                    <p style="color: #D9D9D9;">Información</p>
                </div>
                <div class="col-sm">
                    <div class="reservaconfir_seguimiento3">
                        <p>3</p>
                    </div>
                    <p>Confirmación</p>
                </div>
            </div>
        </div>
    </section>
    <div class="reserva4_separar"></div>
    @if (Auth::check())
    <section class="reserva4_confirmacion">
        <img class="reserva4_icono_confimaction" src="img/confirmation.webp" alt="">
        <p>Reserva confirmada</p>
        @foreach ($confirmarreservas as $x)
                <p>Con fecha:{{ $x->id_invitado }} y Hora:</p>
        @endforeach
    </section>
    <div class="separar"></div>
    <section class="datos_cliente">
        <img class="reserva4_icono_calendario" src="img/icono_calendario.png" alt="">29-09-2022, 21:15h
        <br>
        <img class="reserva4_icono_calendario" src="img/icono_personas.png" alt="">2 personas
        <br>
        <img class="reserva4_icono_calendario" src="img/icono_localización.png" alt="">Ronda de Isasa Num 10 , 14003 Córdoba.
    </section>
    <div class="reserva4_separar"></div>
    <div class="reserva4_confimacion_dos">
        <p>Reserva a nombre de: </p>
    </div>
    <div class="reserva4_confimacion_tres">
        <p>Gracias por reservar en Restaurante El Lacón Recibirá en breve un email de confirmación.</p>
    </div>
    @else
    <section class="reserva4_confirmacion">
        <img class="reserva4_icono_confimaction" src="img/confirmation.webp" alt="">
        <p>Reserva confirmada</p>
        @isset($confirmarreservas)
            @foreach ($confirmarreservas as $x)
                    <p>Con fecha:{{ $x->id_invitado }} y Hora:</p>
            @endforeach
        @endisset   
    </section>
    <div class="separar"></div>
    <section class="datos_cliente">
        <img class="reserva4_icono_calendario" src="img/icono_calendario.png" alt="">29-09-2022, 21:15h
        <br>
        <img class="reserva4_icono_calendario" src="img/icono_personas.png" alt="">2 personas
        <br>
        <img class="reserva4_icono_calendario" src="img/icono_localización.png" alt="">Ronda de Isasa Num 10 , 14003 Córdoba.
    </section>
    <div class="reserva4_separar"></div>
    <div class="reserva4_confimacion_dos">
        <p>Reserva a nombre de: </p>
    </div>
    <div class="reserva4_confimacion_tres">
        <p>Gracias por reservar en Restaurante El Lacón Recibirá en breve un email de confirmación.</p>
    </div>
    @endif
@endsection
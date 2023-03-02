@extends('layouts.reserva_nav')
@section('titulo','reserva1')
@section('content')
    <div class="reservacomida_titulo">
        <h1>Restaurante el Lacon</h1>
    </div>
    <section class="primer_apartado">
        <div class="container">
            <div class="row reservacomida_leyenda1">
                <div class="col-sm">
                    <div class="reservacomida_rec1 bg-warning"></div>
                    <p>disponible</p>
                </div>
                <div class="col-sm">
                    <div class="reservacomida_rec2 bg-secondary"></div>
                    <p>cerrado</p>
                </div>
                <div class="col-sm">
                    <div class="reservacomida_rec3 bg-success"></div>
                    <p>Día seleccionado</p>
                </div>
                <div class="col-sm">
                    <div class="reservacomida_rec4 bg-danger"></div>
                    <p>Completo</p>
                </div>
            </div>
        </div>
    </section>
    <div class="reservacomida_separar"></div>
    <section class="segundo_apartado">
        <div class="container">
            <div class="row reservacomida_leyenda2">
                <div class="col-sm">
                    <div class="reservacomida_seguimiento1">
                        <p>1</p>
                    </div>
                    <p>Encontrar</p>
                </div>
                <div class="col-sm">
                    <div class="reservacomida_seguimiento2">
                        <p>2</p>
                    </div>
                    <p style="color: #D9D9D9;">Información</p>
                </div>
                <div class="col-sm">
                    <div class="reservacomida_seguimiento3">
                        <p>3</p>
                    </div>
                    <p style="color: #D9D9D9;">Adicional</p>
                </div>
                <div class="col-sm">
                    <div class="reservacomida_seguimiento4">
                        <p>4</p>
                    </div>
                    <p style="color: #D9D9D9;">Confirmación</p>
                </div>
            </div>
        </div>
    </section>
    <div class="reservacomida_separar"></div>
    <section>
        <div class="reservacomida_personas">
            <select class="form-select form-select-lg pb-4 pt-4">
                <option selected>Seleccione el número de personas</option>
                <option value="1">2</option>
                <option value="2">3</option>
                <option value="3">4</option>
                <option value="4">5</option>
                <option value="5">6</option>
             </select>
        </div>
    </section>
    <div class="reservacomida_separar"></div>
    <section>
        <div class="reservacomida_calendario">
            <img src="img/calendario.PNG" alt="">
        </div>
        <div class="reservacomida_Comidas">
            <a href="ReservaComida">Comida</a>
            <a href="">Cena</a>
        </div>
    </section>
    <section>
        <div class="reservacomida_selec_horas">
            <button class="reservacomida_horas" type="button">20:00</button>
            <button class="reservacomida_horas" type="button">20:30</button>
            <button class="reservacomida_horas" type="button">21:00</button>
            <button class="reservacomida_horas" type="button">21:30</button>
            <button class="reservacomida_horas" type="button">22:00</button>
            <button class="reservacomida_horas" type="button">22:30</button>
            <button class="reservacomida_horas" type="button">23:00</button>
        </div>
    </section>
    <section>
        <div class="reservacomida_siguiente">
            <button type="button" class="reservacomida_continuar"><a href="Reserva2"  style="text-decoration:none; color: black">Continuar</a></button>
        </div>
    </section>
@endsection
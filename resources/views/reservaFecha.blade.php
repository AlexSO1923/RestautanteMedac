@extends('layouts.index_nav_resto')
@section('titulo','reserva1')
@section('content')
    <div class="reservacomida_titulo">
        <h1>Restaurante ASO</h1>
    </div>
    <div class="reservacomida_separar"></div>
    <section class="segundo_apartado">
        <div class="container">
            <div class="row reservacomida_leyenda2">
                <div class="col-sm">
                    <div class="reservacomida_seguimiento1">
                        <p>1</p>
                    </div>
                    <p class="segui1">Fecha y Hora</p>
                </div>
                <div class="col-sm">
                    <div class="reservacomida_seguimiento2">
                        <p>2</p>
                    </div>
                    <p style="color: #D9D9D9;">Información y Confirmación</p>
                </div>
            </div>
        </div>
    </section>
    <div class="reservacomida_separar"></div>
    @if (Auth::check())
    <div class="formulario_reserva">
        <form action="mireserva1" method="post">
            @csrf
            <label class="reservaFecha_label" for="nombre">Seleccione una fecha</label>
            <input class="reservaFecha_input" type="date" name="fecha"><br>
            <button class="btn btn-primary boton_eliminar1" type="submit">Comprobar</button><br>
            @isset($datosreserva)
                @foreach ($datosreserva as $x)
                    <button class="btn btn-success botones_horas"><a href="/mireserva2/{{$x->id}}" >{{$x->hora}}</a></button>
                @endforeach  
            @endisset
        </form>
    </div>
    @else
    <div class="formulario_reserva">
        <form action="mireserva1" method="post">
            @csrf
            <label class="reservaFecha_label" for="nombre">Seleccione una fecha</label>
            <input class="reservaFecha_input" type="date" name="fecha"><br>
            <button class="btn btn-primary boton_eliminar1" type="submit">Comprobar</button><br>
            @isset($datosreserva)
                @foreach ($datosreserva as $x)
                    <button class="btn btn-success botones_horas"><a href="/invitadoreserva2/{{$x->id}}" >{{$x->hora}}</a></button>
                @endforeach  
            @endisset
        </form>
    </div>
    @endif
@endsection
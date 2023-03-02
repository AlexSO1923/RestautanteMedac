@extends('layouts.index_nav_resto')
@section('titulo','Reserva1')
@section('content')
 
<div class="fondo_reserva">
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
                    <p class="segui2" style="color: #D9D9D9;">Información</p>
                </div>
                <div class="col-sm">
                    <div class="reservacomida_seguimiento3">
                        <p>3</p>
                    </div>
                    <p class="segui3" style="color: #D9D9D9;">Confirmación</p>
                </div>
            </div>
        </div>
    </section>
    <div class="reservacomida_separar"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center ubica_articulo1">
            <div class="col-md-7">
                <div id="calendar"></div>
            </div>
            <div class="col-md-5">
                <div id="horas"></div>
                <form id="Horario" action="/reservaid" method="POST">
                    @csrf
                    <input type="hidden" id="hora" name="hora">
                    <input type="hidden" id="fecha" name="fecha">
                    <input type="hidden" id="horario" name="horario">
                </form>
            </div>
        </div>
        
    </div>
</div>
  
@endsection
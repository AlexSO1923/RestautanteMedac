@extends('layouts.index_nav_resto')
@section('titulo','Reserva3')
@section('content')
<div class="fondo_reserva">
    @if (Auth::check())
        <section class="segundo_apartado">
            <div class="container">
                <div class="row reservacomida_leyenda2">
                    <div class="col-sm">
                        <div class="reservaconfir_seguimiento1">
                            <p>1</p>
                        </div>
                        <p class="segui4" style="color: #D9D9D9;">Fecha y Hora</p>
                    </div>
                    <div class="col-sm">
                        <div class="reservaconfir_seguimiento2">
                            <p>2</p>
                        </div>
                        <p class="segui5" style="color: #D9D9D9;">Información</p>
                    </div>
                    <div class="col-sm">
                        <div class="reservaconfir_seguimiento3">
                            <p>3</p>
                        </div>
                        <p class="segui6">Confirmación</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="reservacomida_separar"></div>
        <section class="datos_cliente">
            <i class="fa-solid fa-calendar-days fa-4x mb-3">
                @isset($fechasIn)
                @foreach ($fechasIn as $x)
                    {{$x->fecha}}, {{$x->hora}}
                @endforeach
            @endisset
            </i>
            
            <br>
        </section>
        <div class="col-lg-4 mb-5 mb-lg-0">
            <img class="foto_veri" src="{{ asset('img/verificado.png')}}" alt="">
        </div>
        <i class="fa-solid fa-user fa-3x">Nombre:@isset($NomIn){{$NomIn}}@endisset</i>
        <br>
        <i class="fa-solid fa-envelope fa-3x">Correo: @isset($emailInv){{$emailInv}}@endisset</i>
        <script>
            setTimeout(function(){
   window.location.href = "/listaReserva1";
    }, 3000);
        </script>
    @else
        <section class="segundo_apartado">
            <div class="container">
                <div class="row reservacomida_leyenda2">
                    <div class="col-sm">
                        <div class="reservaconfir_seguimiento1">
                            <p>1</p>
                        </div>
                        <p class="segui4" style="color: #D9D9D9;">Fecha y Hora</p>
                    </div>
                    <div class="col-sm">
                        <div class="reservaconfir_seguimiento2">
                            <p>2</p>
                        </div>
                        <p class="segui5" style="color: #D9D9D9;">Información</p>
                    </div>
                    <div class="col-sm">
                        <div class="reservaconfir_seguimiento3">
                            <p>3</p>
                        </div>
                        <p class="segui6">Confirmación</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="reservacomida_separar"></div>
        <section class="datos_cliente">
            <i class="fa-solid fa-calendar-days fa-4x mb-3">@isset($fechasIn)
                @foreach ($fechasIn as $x)
                    {{$x->fecha}}, {{$x->hora}}
                @endforeach
            @endisset
            </i>
            
            <br>
        </section>
        <div class="col-lg-4 mb-5 mb-lg-0">
            <img class="foto_veri" src="{{ asset('img/verificado.png')}}" alt="">
        </div>
        <i class="fa-solid fa-user fa-3x">Nombre:@isset($NomIn){{$NomIn}}@endisset @isset($apellIn){{$apellIn}}@endisset</i>
        <br>
        <i class="fa-solid fa-envelope fa-3x">Correo: @isset($emailInv)<p>{{$emailInv}}</p>@endisset</i>
        <script>
            setTimeout(function(){
            window.location.href = "/";
        }, 3000);
        </script>
    @endif
</div>
@endsection
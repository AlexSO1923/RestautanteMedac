@extends('layouts.reserva_nav')
@section('titulo','reserva2')
@section('content')
    <div class="reserva2_titulo">
        <h1>Restaurante el Lacon</h1>
    </div>
    <div class="reserva2_separar"></div>
    <section class="primer_apartado">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="reserva2_seguimiento1">
                        <p>1</p>
                    </div>
                    <p style="color: #D9D9D9;">Encontrar</p>
                </div>
                <div class="col-sm">
                    <div class="reserva2_seguimiento2">
                        <p>2</p>
                    </div>
                    <p>Información</p>
                </div>
                <div class="col-sm">
                    <div class="reserva2_seguimiento3">
                        <p>3</p>
                    </div>
                    <p style="color: #D9D9D9;">Adicional</p>
                </div>
                <div class="col-sm">
                    <div class="reserva2_seguimiento4">
                        <p>4</p>
                    </div>
                    <p style="color: #D9D9D9;">Confirmación</p>
                </div>
            </div>
        </div>
    </section>
    <div class="reserva2_separar"></div>
    <section class="datos_cliente">
        <img class="reserva2_icono_calendario" src="img/icono_calendario.png" alt="">29-09-2022, 21:15h
        <br>
        <img class="reserva2_icono_calendario" src="img/icono_personas.png" alt="">2 personas
        <br>
        <img class="reserva2_icono_calendario" src="img/icono_localización.png" alt="">Ronda de Isasa Num 10 , 14003 Córdoba.
    </section>
    <div class="reserva2_separar"></div>
    <div class="container reserva2_formulario_reserva">
        <form method="post" action="/misreserva1">
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
            </div>
            <div class="form-group">
                <label>Apellidos</label>
                <input type="text" class="form-control" placeholder="Apellido" name="apellido">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="correo">
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <input type="tel" class="form-control" placeholder="Teléfono" name="telefono">
            </div>
            <div class="form-group">
                <label>Número de personas</label>
                <input type="number" class="form-control" placeholder="personas" name="personas">
            </div>
            <div class="form-group">
                <select class="form-select form-select-lg pb-4 pt-4">
                    <option selected>Seleccione el menu</option>
                    {{-- @isset($nuevasreservas)
                        @foreach ( $nuevasreservas as $x)
                            <option value={{$x->id}}>{{$x->nombre}}</option>
                        @endforeach
                    @endisset  --}}
                </select>
            </div>
            <input type="submit">
        </form>
    </div>
    <section>
        <div class="reserva2_siguiente">
            <button type="button" class="reserva2_continuar"><a href="/Reserva3" style="text-decoration:none; color: black">Continuar</a></button>
        </div>
    </section>
    <div class="reserva2_separar"></div>
    @endsection
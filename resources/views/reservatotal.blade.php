@extends('layouts.index_nav_resto')
@section('titulo','reserva2')
@section('content')
<div class="fondo_reserva">
    <div class="fecha_hora">
            <p>Con fecha: {{$fecha }} y Hora: {{ $hora }}</p>
    </div>
    <div class="reservacomida_separar"></div>
    <section class="segundo_apartado">
        <div class="container">
            <div class="row reservacomida_leyenda2">
                <div class="col-sm">
                    <div class="reservainfo_seguimiento1">
                        <p>1</p>
                    </div>
                    <p class="segui4" style="color: #D9D9D9;">Fecha y Hora</p>
                </div>
                <div class="col-sm">
                    <div class="reservainfo_seguimiento2">
                        <p>2</p>
                    </div>
                    <p class="segui5">Información</p>
                </div>
                <div class="col-sm">
                    <div class="reservainfo_seguimiento3">
                        <p>3</p>
                    </div>
                    <p class="segui6"  style="color: #D9D9D9;">Confirmación</p>
                </div>
            </div>
        </div>
    </section>
    <div class="reservacomida_separar"></div>
    @if (Auth::check())
        <div class="cuerpo_info">
            <form action="/mireserva3" method="POST">
                @csrf
                <div class="form-group info_formulario">
                    <input type="hidden" name="id_cliente" class="form-control"
                        value="{{ Auth::user()->id }}">
                </div>
                <div class="form-group info_formulario">
                    <label>Nombre</label>
                    <input type="name" name="nombre" class="form-control"
                        value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group info_formulario">
                    <label>Correo</label>
                    <input type="email" name="email" class="form-control"
                        value="{{ Auth::user()->email }}">
                </div>
                <div class="form-group info_formulario">
                    <label>Teléfono</label>
                    <input type="number" name="telefono" class="form-control"
                        value="{{ Auth::user()->telefono }}">
                </div>
                <div class="form-group info_formulario">
                    <label> Menus</label>
                    <select name="id_menu">
                        @foreach ($menus as $valor_menu)
                            <option value="{{ $valor_menu->id }}"> {{ $valor_menu->nombre }}
                        @endforeach
                    </select>
                </div>
                <div class="form-group info_formulario">
                    <label> Mesas</label>
                    <select name="id_mesa">
                        @foreach ($mesas as $mesavalor)
                            <option value="{{ $mesavalor->id }}"> {{ $mesavalor->asiento}}
                        @endforeach
                    </select>
                </div>
                <div class="form-group info_formulario">
                    <label> Número de personas</label>
                    <select name="num_personas">
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                    </select>
                </div>
                <input type="hidden" name="fecha_reserva" value="{{$id}}">
                <div class="form-group info_formulario">
                    <label> Número de tarjeta</label>
                    <input class="form-control" type="text" name="num_tarjeta" placeholder="Inserte su tarjeta" />
                </div>
                <div class="form-group info_formulario">
                    <button class="btn btn-success boton_enviar_form" type="submit">Reservar</button>
                </div>
            </form>
        </div>
    @else
        {{-- @if(session()->has('success'))
            <div class="alert alert-success confirmar_reserva">
                {{session()->get('success')}}
            </div>
        @endif --}}
        <div class="cuerpo_info">
            <form action="/mireserva4" method="POST">
                @csrf
                <input type="hidden" name="id_invitado" value="">
                <div class="form-group info_formulario">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control ">
                    @error('nombre')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group info_formulario">
                    <label>Apellidod</label>
                    <input type="text" name="apellidos" class="form-control ">
                    @error('apellidos')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group info_formulario">
                    <label>Correo</label>
                    <input type="email" name="email" class="form-control">
                    @error('email')
                        <p>
                        {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="form-group info_formulario">
                    <label>Teléfono</label>
                    <input type="number" name="telefono" class="form-control">
                    @error('telefono')
                        <p>
                        {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="form-group info_formulario">
                    <label> Menus</label>
                    <select name="id_menu">
                        @foreach ($menus as $valor_menu)
                            <option value="{{ $valor_menu->id }}"> {{ $valor_menu->nombre }}
                        @endforeach
                    </select>
                </div>
                <div class="form-group info_formulario">
                    <label> Mesas</label>
                    <select name="id_mesa">
                        @foreach ($mesas as $mesavalor)
                            <option value="{{ $mesavalor->id }}"> {{ $mesavalor->asiento}}
                        @endforeach
                    </select>
                </div>
                <div class="form-group info_formulario">
                    <label> Número de personas</label>
                    <select name="num_personas">
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                    </select>
                </div>
                <input type="hidden" name="fecha_reserva" value="{{$id}}">
                <div class="form-group info_formulario">
                    <label> Número de tarjeta</label>
                    <input class="form-control" type="text" name="num_tarjeta" placeholder="Inserte su tarjeta" />
                    {{-- @error('num_tarjeta')
                        <p>
                        {{$message}}
                        </p>
                    @enderror --}}
                </div>
                <div class="form-group info_formulario">
                    <button class="btn btn-success boton_enviar_form" type="submit">Reservar</button>
                </div>
            </form>
        </div>
    @endif
</div>

@endsection

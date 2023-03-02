@extends('layouts.index_nav_resto')
@section('titulo','reserva4')
@section('content')
<h1 class="titulo_lista">Mis reservas</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>
      <th scope="col">Menú</th>
      <th scope="col">comensales</th>
      <th scope="col">Precio menú</th>
      <th scope="col">Precio Total</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @isset($nuevasreservas)
      @foreach ( $nuevasreservas as $x)
        <tr>
          <td>{{$x->horario->fecha}}</td>
          <td>{{$x->horario->hora}}</td>
          <td>{{$x->menu->nombre}}</td>
          <td>{{$x->mesas_cliente->asiento}}</td>
          <td>{{$x->menu->precio}}</td>
          <td>{{$x->menu->precio*$x->mesas_cliente->asiento}}</td>
          <td>
            <form action="{{ route('reserva.delete', $x->id)}}" method="post">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button class="btn btn-primary boton_eliminar" type="submit">eliminar</button>
            </form>
          </td>
        </tr>
      @endforeach
    @endisset   
  </tbody>
</table>
@endsection
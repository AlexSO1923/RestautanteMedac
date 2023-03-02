@extends('layouts.index_nav')
@section('titulo','index')
@section('content')
    <div class="index_img_fondo"></div>
    <div class="index_cuerpo1">
        <section class="container index_foto1">
            <div class="row align-items-center justify-content-center index_articulo1">
                <div class="col-md-8">
                    <!-- imagen random -->
                    <img class="col-12" src="{{ asset('img/fondo-borroso-de-la-cocina-con-los-tableros-madera-137811330.jpg')}}" alt="">
                </div>
                <div class="col-md-4">
                    <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate ad accusantium saepe adipisci velit sunt, corrupti quia voluptates, nemo, amet repudiandae? Explicabo neque, perferendis ipsum ipsa consequuntur accusantium esse provident.</p>
                </div>
            </div>
        </section>
    </div>
    <div class="index_cuerpo2">
        <section class="container index_foto2">
            <div class="row align-items-center justify-content-evenly index_articulo2">
                <div class="col-md-8">
                    <!-- Imagen random -->
                    <img class="col-12" src="{{ asset('img/fondo-cocina-mesa-vacia-tablero-madera_27550-1064.webp')}}" alt="">
                </div>
                <div class="col-md-4">
                    <p class="text-dark letracuerpo2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate ad accusantium saepe adipisci velit sunt, corrupti quia voluptates, nemo, amet repudiandae? Explicabo neque, perferendis ipsum ipsa consequuntur accusantium esse provident.</p>
                </div>
            </div>
        </section>
    </div>
@endsection
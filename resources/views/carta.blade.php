@extends('layouts.index_nav_resto')
@section('titulo','Carta')
@section('content')
<div class="fondo_reserva">
    <h1 class="carta_titulo_carta">Nuestra Carta</h1>
    <div class="carta_cuerpo1">
        <section class="container carta_primero">
            <div class="row align-items-center justify-content-center carta_articulo1">
                <div class="col-md-7 carta1">
                    <!-- imagen random de las fotos -->
                    <img src="{{ asset('img/fondo-borroso-de-la-cocina-con-los-tableros-madera-137811330.jpg')}}" alt="">
                </div>
                <div class="col-md-4 carta2">
                    <p class="text-dark">
                        Ostra Francesa Speciale De Claire nº2 <b>4.50 €</b>
                    </p>
                    <p>Al Natural</p>
                    <p>Ostra Francesa Speciale De Claire nº2 <b>4.90 €</b> </p>
                    <p>A la sidra</p>
                    <p>Surtido de Quesos Asturianos <b>14.00 €</b> </p>
                    <p>Cabrales, Gamoneu, La Peral, </p>
                    <p>3 Leches de Pria (120gr)</p>
                    <p>Surtido de Quesos Andaluces <b>16.00 €</b> </p>
                    <p>Curado Salvado Trigo Doña Casilda, Queso</p>
                    <p>Fresco La Hortelana, Colono de Olavidia, Cuajada</p>
                    <p>Láctica de cabra la Hortelana (120gr)</p>
                </div>
            </div>
        </section>
    </div>

    <div class="carta_cuerpo2">
        <section class="container carta_segundo">
            <div class="row align-items-center justify-content-center carta_articulo2">
                <div class="col-md-7 carta1">
                    <!-- imagen random de las fotos -->
                    <img src="{{ asset('img/fondo-borroso-de-la-cocina-con-los-tableros-madera-137811330.jpg')}}" alt="">
                </div>
                <div class="col-md-4 carta2">
                    <p class="text-dark">
                        Ostra Francesa Speciale De Claire nº2 <b>4.50 €</b>
                    </p>
                    <p>Al Natural</p>
                    <p>Ostra Francesa Speciale De Claire nº2 <b>4.90 €</b> </p>
                    <p>A la sidra</p>
                    <p>Surtido de Quesos Asturianos <b>14.00 €</b> </p>
                    <p>Cabrales, Gamoneu, La Peral, </p>
                    <p>3 Leches de Pria (120gr)</p>
                    <p>Surtido de Quesos Andaluces <b>16.00 €</b> </p>
                    <p>Curado Salvado Trigo Doña Casilda, Queso</p>
                    <p>Fresco La Hortelana, Colono de Olavidia, Cuajada</p>
                    <p>Láctica de cabra la Hortelana (120gr)</p>
                </div>
            </div>
        </section>
    </div>
</div>

    @endsection

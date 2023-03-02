@extends('layouts.index_nav_resto')
@section('titulo','Multimedia')
@section('content')
    <div class="index_img_fondo">
    </div>
    <div class="index_cuerpo1">
        {{-- @if(session()->has('success'))
            <div class="alert alert-success confirmar_reserva">
                {{session()->get('success')}}
            </div>
        @endif --}}
        <section class="container index_foto1">
            <div class="row align-items-center justify-content-center index_articulo1">
                <div class="col-md-8">
                    <!-- imagen random -->
                    <video class="w-100" controls autoplay loop muted>
                        <source src="videos/video1.mov" type="video/mp4" />
                    </video>                </div>
                <div class="col-md-4">
                    <audio src="audios/audio1.mp3" controls></audio>
                </div>
            </div>
        </section>
    </div>
    <div class="index_cuerpo2">
        <section class="container index_foto2">
            <div class="row align-items-center justify-content-evenly index_articulo2">
                <div class="col-md-8">
                    <!-- Imagen random -->
                    <video class="w-100" controls autoplay loop muted>
                        <source src="videos/video3.webm" type="video/mp4" />
                    </video>                </div>
                <div class="col-md-4">
                    <audio src="audios/audio3.wav" controls></audio>
                </div>
            </div>
        </section>
    </div>
    <div class="index_cuerpo2">
        <section class="container index_foto2">
            <div class="row align-items-center justify-content-evenly index_articulo2">
                <div class="col-md-8">
                    <!-- Imagen random -->
                    <video class="w-100" controls autoplay loop muted>
                        <source src="videos/video2.mp4" type="video/mp4" />
                    </video>                </div>
                <div class="col-md-4">
                    <audio src="audios/audio2.ogg" controls></audio>
                </div>
            </div>
        </section>
    </div>
@endsection
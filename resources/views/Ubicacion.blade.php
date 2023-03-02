@extends('layouts.index_nav_resto')
@section('titulo','Contacto')
@section('content')
    <h1 class="ubica_titulo_carta">Contacto</h1>
    <div class="ubica_cuerpo1">
        <section class="container ubica_texto">
            @if(session()->has('success'))
                <div class="alert alert-success confirmar_reserva">
                    {{session()->get('success')}}
                </div>
            @endif
            <div class="row align-items-center justify-content-center ubica_articulo1">
                <div class="col-md-7">
                    <iframe class="ubica_frame_ubicacion" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3148.648673092508!2d-4.786275285456575!3d37.891898113186585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6cdf660fb41085%3A0xbd5df8f226543978!2sAv.%20de%20la%20Libertad%2C%206%2C%2014006%20C%C3%B3rdoba!5e0!3m2!1ses!2ses!4v1667123953796!5m2!1ses!2ses"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-4">
                
                    <form action="/Ubi" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value={{old("nombre")}}>
                            @error('nombre')
                                <p>
                                {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Correo</label>
                            <input type="email" class="form-control" name="email" value={{old("email")}}>
                            @error('email')
                                <p>
                                {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Asunto</label>
                            <input type="text" class="form-control" name="asunto" value={{old("asunto")}}>
                            @error('asunto')
                                <p>
                                {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mensaje</label>
                            <textarea class="form-control"rows="5" name="mensaje">{{old("mensaje")}}</textarea>
                            @error('mensaje')
                                    <p>
                                    {{$message}}
                                    </p>
                            @enderror
                          </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                    {{-- <form class="w-full max-w-lg" action="Ubi" method="post">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid-first-name">
                                Nombre
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="nombre" type="text" >
                                
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid-first-name">
                                Asunto
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="asunto" type="text" >
                                
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid-password">
                                Correo
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="correo" type="email" >
                                
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid-password">
                                Mensaje
                                </label>
                                <textarea class="no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" name="mensaje"></textarea>
                               
                            </div>
                        </div>
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3">
                                <input type="submit">
                            </div>
                        </div>
                    </form> --}}
                </div>
            </div>
        </section>
    </div>
@endsection
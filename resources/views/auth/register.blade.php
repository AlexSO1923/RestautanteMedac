@extends('layouts.index_nav_resto')
@section('titulo','Registrarse')
@section('content')
<div class="nuevo_cuerpo_form">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body"> --}}
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('assets/login-icon.svg')}}" alt="login-icon" style="height: 7rem"/>
                        </div>
                        <div class="text-center fs-1 fw-bold">Registrarse</div>
                        <div class="input-group mt-4">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> --}}
                            <div class="input-group-text bg-info">
                                
                                <img src="{{ asset('assets/user-icon.svg')}}" alt="username-icon" style="height: 1.5rem"/>
                            </div>
                            {{-- <div class="col-md-6"> --}}
                                <input id="name" type="text" class="form-control bg-light input_nuevoini @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>

                        <div class="input-group mt-1">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}
                            <div class="input-group-text bg-info">
                                
                                <img src="{{ asset('assets/email-icon.svg')}}" alt="username-icon" style="height: 1.5rem"/>
                            </div>
                            {{-- <div class="col-md-6"> --}}
                                <input id="email" type="email" class="form-control bg-light input_nuevoini @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>
                        <div class="input-group mt-1">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('phone') }}</label> --}}
                            <div class="input-group-text bg-info">
                               
                                <img src="{{ asset('assets/phone-call.svg')}}" alt="username-icon" style="height: 1.5rem"/>
                                </div>
                            {{-- <div class="col-md-6"> --}}
                                <input id="phone" type="tel" class="form-control bg-light input_nuevoini @error('email') is-invalid @enderror" name="phone" value="{{ old('email') }}" required autocomplete="email" placeholder="Teléfono">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>
                        <div class="input-group mt-1">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}
                            <div class="input-group-text bg-info">
                                
                                <img src="{{ asset('assets/password-svgrepo-com.svg')}}" alt="password-icon" style="height: 1.5rem" />
                                </div>
                            {{-- <div class="col-md-6"> --}}
                                <input id="password" type="password" class="form-control bg-light input_nuevoini @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>

                        <div class="input-group mt-1">
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> --}}
                            <div class="input-group-text bg-info">
                                
                                <img src="{{ asset('assets/password-svgrepo-com.svg')}}" alt="password-icon" style="height: 1.5rem" />
                                </div>
                            {{-- <div class="col-md-6"> --}}
                                <input id="password-confirm" type="password" class="form-control bg-light input_nuevoini" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                            {{-- </div> --}}
                        </div>

                        {{-- <div class="row mb-0">
                            <div class="col-md-6 offset-md-4"> --}}
                                <button type="submit" class="btn btn-primary boton_enviar">
                                    {{ __('Register') }}
                                </button>
                            {{-- </div>
                        </div> --}}
                    </form>
                {{-- </div>
            </div>
        </div>
    </div> --}}
</div>
{{-- <div class="nuevo_cuerpo_form">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="d-flex justify-content-center">
            <img src="/assets/login-icon.svg" alt="login-icon" style="height: 7rem"/>
        </div>
        <div class="text-center fs-1 fw-bold">Registrarse</div>
        <div class="input-group mt-4">
            <div class="input-group-text bg-info">
            <img src="/assets/user-icon.svg" alt="username-icon" style="height: 1.5rem"/>
            </div>
            <input id="name" type="text" class="form-control bg-light input_nuevoini @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mt-1">
            <div class="input-group-text bg-info">
            <img src="/assets/email-icon.svg" alt="username-icon" style="height: 1.5rem"/>
            </div>
            <input id="email" type="email" class="form-control bg-light input_nuevoini @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mt-1">
            <div class="input-group-text bg-info">
            <img src="/assets/phone-call.svg" alt="username-icon" style="height: 1.5rem"/>
            </div>
            <input id="phone" class="form-control bg-light input_nuevoini @error('email') is-invalid @enderror" name="email" value="{{ old('phone') }}" required autocomplete="email" autofocus type="tel" placeholder="Teléfono"/>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mt-1">
            <div class="input-group-text bg-info">
            <img src="/assets/password-svgrepo-com.svg" alt="password-icon" style="height: 1.5rem" />
            </div>
            <input id="password" type="password" class="form-control bg-light input_nuevoini @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mt-1">
            <div class="input-group-text bg-info">
            <img src="/assets/password-svgrepo-com.svg" alt="password-icon" style="height: 1.5rem" />
            </div>
            <input id="password-confirm" type="password" class="form-control bg-light input_nuevoini" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
        </div>
        <button type="submit" class="btn btn-primary boton_enviar">
            {{ __('Register') }}
        </button>
    </form>
</div> --}}
@endsection

@extends('layouts.index_nav_resto')
@section('titulo','Iniciar Sesión')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body"> 
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="nuevo_cuerpo_form">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="d-flex justify-content-center img_login">
            
            <img src="{{ asset('assets/login-icon.svg')}}" alt="login-icon" style="height: 7rem"/>
        </div>
        <div class="text-center fs-1 fw-bold ini_texto">Inicio de Sesión</div>
        <div class="input-group mt-4 input_email">
            <div class="input-group-text bg-info">
                
            <img src="{{ asset('assets/username-icon.svg')}}" alt="username-icon" style="height: 1rem"/>
            </div>
            <input class="form-control bg-light input_nuevoini @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="email" placeholder="Correo"/>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mt-1">
            <div class="input-group-text bg-info">
                
            <img src="{{ asset('assets/password-icon.svg')}}" alt="password-icon" style="height: 1rem" />
            </div>
            <input  type="password" placeholder="Contraseña"class="form-control bg-light input_nuevoini @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="d-flex justify-content-around mt-1">
            <div class="d-flex align-items-center gap-1">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
            <div class="pt-1" style="font-size: 2rem">{{ __('Remember Me') }}</div>
            </div>
            <div class="pt-1">
                @if (Route::has('password.request'))
                    <a class="text-decoration-none fw-semibold" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
        <button type="submit" class="btn btn-primary boton_enviar">
            {{ __('Inciar Sesión') }}
        </button>
        <div class="d-flex gap-1 justify-content-center mt-1">
            <div> ¿No estas registrado aun?</div>
            <a href="/Registro" class="text-decoration-none text-danger fw-semibold">Registrate</a>
        </div>
    </form>
</div>
    {{-- <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>First</th>
        <th>Last</th>
        <th>Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</div> --}}
      
@endsection

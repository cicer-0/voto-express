@extends('layouts.app')

@section('content')
    <div>
        <link href="{{ asset('css/page/login.css') }}" rel="stylesheet">

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <a href="{{ route('login') }}"><button id="btn__iniciar-sesion">Iniciar Sesión</button></a>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    {{-- <a href="{{ route('register') }}"><button id="btn__registrarse">Registrarse</button></a> --}}
                    <a ><button id="btn__registrarse">Registrarse</button></a>
                </div>
            </div>

            <!-- Formulario de Login -->
            <div class="contenedor__login-register">
                <form method="POST" action="{{ route('login') }}" class="formulario__login">
                    @csrf
                    <h2>Iniciar Sesión</h2>
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit">Entrar</button>
                </form>

                 <!-- Formulario de Registro -->
                 {{-- <form method="POST" action="{{ route('register') }}" class="formulario__register"> --}}
                    <form method="POST" class="formulario__register">
                    @csrf
                    <h2>Regístrarse</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Nombre completo" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Usuario" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    </div>
                    <button type="submit">Registrarse</button>
                </form>
            </div>
        </div>
     <script src="{{ asset('js/page/login.js') }}"></script>
    </div>
@endsection


@extends('layouts.app')
@section('contenido')
      <div class="alert alert-danger w-50" role="alert">
        <h4 class="alert-heading">Ecosistema de Investigacion ICUAP</h4>
        <p class="mb-0">Este acceso es exclusivo para la administración del sitio, si no cuentas con las credenciales necesarias, deberas regresar a la pantalla de inicio.</p>
      </div>
      <div id="relleno-nav"></div>
      <div class="contenedor register-form">
        <div class="card bg-light">
          <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Iniciar sesión</h4>
            <p class="text-center">Este espacio es único y exclusivo para la administración de este sitio.</p>
            <form method="POST" action="{{route('login')}}" novalidate>
              @csrf
              @if (session('mensaje'))
              <p class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{session('mensaje')}}</p>
              @endif 
              <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></i> </span>
                <input name="user" class="form-control" placeholder="Usuario" type="text">
                @error('user')
              <div class="input-group mb-3">
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{$message}}</p>
              </div>
                @enderror
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                <input class="form-control" name="password" placeholder="Contraseña" type="password">
                @error('password')
                <div class="input-group mb-3">
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{$message}}</p>
                </div>
                @enderror
              </div>
                <input type="checkbox" name="remember"> <label class="mb-2  text-sm text-gray-500 ">Mantener mi Sesion Abierta</label>                       
              <div class="form-group col text-center">
                  <button type="submit" class="botn btn-block" href="menu.html">Iniciar sesión </button>
              </div> <!-- form-group// -->  
            </form>
              <p class="text-center">¿Olvidaste tu contraseña? <a href="">Recuperar contraseña</a> </p>                                                                 
          </article>
          </div> <!-- card.// -->
      </div>
      <div id="relleno"></div>
      <div id="relleno"></div>      
      <div id="relleno-nav"></div>
      <div id="relleno-nav"></div>
@endsection
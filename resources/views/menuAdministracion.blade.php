@extends('layouts.app')
@section('contenido')

<section class="contenedor">
    <div class='dashboard'>
        <div class="dashboard-nav">
            <nav class="dashboard-nav-list"><a href="#" class="dashboard-nav-item"><i
                        class="bi bi-house-door-fill"></i>Inicio </a>
                <a href="#" class="dashboard-nav-item active" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><i class="bi bi-person-fill-add"></i>Nuevo investigador</a>
                <a href="#" class="dashboard-nav-item"><i class="bi bi-person-dash-fill"></i>Eliminar investigador</a>
                <a href="{{route('investigador.detalles')}}" class="dashboard-nav-item"><i class="bi bi-person-fill-exclamation"></i>Completar usuario</a>
                <a href="#" class="dashboard-nav-item active" data-bs-toggle="modal" 
                data-bs-target="#registrarUsuario"><i class="bi bi-person-fill-add"></i>Nuevo usuario</a>
                <a href="#" class="dashboard-nav-item"><i class="bi bi-gear-fill"></i>Configuración </a>
                <a href="#" class="dashboard-nav-item"><i class="bi bi-person-fill"></i>Perfil </a>
                <div class="nav-item-divider"></div>
                <a href="index.html" class="dashboard-nav-item"><i class="bi bi-box-arrow-right"></i> Logout </a>
            </nav>
        </div>
        <div class='dashboard-app'>
            <div class='dashboard-content'>
                <div class='contenedor'>
                    <div class='card'>
                        <div class='card-header'>
                            <img class="logo-card" src="img/escudo_logotipo_buap_page-0001.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dar de alta a usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <!--Nav tab-->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="datos-user" data-bs-toggle="tab" data-bs-target="#data"
                                type="button" role="tab" aria-controls="data" aria-selected="true">Datos</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="data" role="tabpanel" aria-labelledby="datos-user">
                            <!------------Llenar datos ------------->
                            <div id="relleno-nav"></div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Primer apellido"
                                    aria-label="Primer apellido" aria-describedby="basic-addon1">
                                <input type="text" class="form-control" placeholder="Segundo apellido"
                                    aria-label="Segundo apellido" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Nombre(s)" aria-label="Name"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Email" aria-label="mail"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-building-fill"></i></span>
                                <select class="form-control">
                                    <option selected="">Centro de adscripción</option>
                                    <option>BUAP</option>
                                    <option>IPN</option>
                                    <option>UDLA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><!-- Fin modal body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="registrarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dar de alta a usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <div id="validarErrores"> </div>
                   <form method="POST" id="formAltaUser" action="{{route('altaUsaurio')}}" novalidate>
                    @csrf
                    <div class="mb-5">
                        <label for="user" class="mb-2 block uppercase text-gray-500 font-bold">Usuario</label>
                        <input id="user" name="user" type="text" placeholder="Tu nombre de usuario" class="border w-full p-3 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{old('user')}}">
                        @error('user')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                        <input id="password" name="password" type="password" placeholder="Tu password de registro" class="border w-full p-3 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{old('password')}}">
                        @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p2 text-center">{{$message}}</p>
                        @enderror
                    </div>
                    <input id="tipo_user" name="tipo_user" hidden type="text" placeholder="Tu nombre de usuario" class="border w-full p-3 rounded-lg" value="1">
                    <div class="mb-5">
                        <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repite tu password" class="border w-full p-3 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{old('password_confirmation')}}">
                    </div>
                    <input type="button" id="btnAltaUser" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"/>
                  </form>     
                        
                </div><!-- Fin modal body -->
               
            </div>
        </div>
    </div>
@endsection


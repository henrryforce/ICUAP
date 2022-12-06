@extends('layouts.app')
@section('contenido')

<section class="contenedor">
    <div class='dashboard'>
        <div class="dashboard-nav">
            <nav class="dashboard-nav-list"><a href="#" class="dashboard-nav-item"><i
                        class="bi bi-house-door-fill"></i>Inicio </a>
                <a href="#" class="dashboard-nav-item active" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><i class="bi bi-person-fill-add"></i>Nuevo investigador</a>
                <a href="{{route('investigadores')}}" class="dashboard-nav-item"><i class="bi bi-person-dash-fill"></i>Eliminar investigador</a>
                <a href="{{route('investigador.detalles')}}" class="dashboard-nav-item"><i class="bi bi-person-fill-exclamation"></i>Completar investigador</a>
                <a href="#" class="dashboard-nav-item active" data-bs-toggle="modal" 
                data-bs-target="#registrarUsuario"><i class="bi bi-person-fill-add"></i>Nuevo usuario</a>
                <a href="{{route('usuarios')}}" class="dashboard-nav-item"><i class="bi bi-gear-fill"></i>Lista usuarios </a>
                <a href="#" class="dashboard-nav-item"><i class="bi bi-person-fill"></i>Perfil </a>
                <div class="nav-item-divider"></div>
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <button type="submit">
                        <a class="dashboard-nav-item"><i class="bi bi-box-arrow-right"></i> Cerrar sesión </a>
                    </button>
                    
                </form>
                
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
                <label for="tipo_user" class="mb-2 block uppercase text-gray-500 font-bold pd:none">alta investigador</label>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
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
                        <livewire:modal-add-user />
                    </div>
                </div><!-- Fin modal body -->
                
            
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="registrarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <label for="tipo_user" class="mb-2 block uppercase text-gray-500 font-bold pd:none">alta usuario</label>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                   <livewire:modal-users-sistema />
                </div><!-- Fin modal body -->
               
            </div>
        </div>
    </div>
@endsection


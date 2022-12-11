@extends('layouts.app')


@section('contenido')
    <section id="inicio" class="home">
        <article class="hero-image"
            style="--hero-image: url('/public/img/52527624876_6cb1d2dc82_o.jpg'); --attachment:fixed;">
            <aside class="hero-image-opacity" style="--hero-opacity-color: var(--black-alpha-color);">
                <div class="container mx-auto flex flex-col items-center">
                    <img src="{{ asset('img/image2.png') }}" class="object-fill h-[550px] w-auto ml-0 pb-8">
                    <p class="hero-image-title" style="--hero-text-color: var(--white-color);">El Ecosistema ICUAP en el
                        marco de la ciencia abierta, tiene como objetivo </p>
                    <p class="hero-image-title" style="--hero-text-color: var(--white-color);">difundir los avances, las
                        investigaciones y los productos científicos de la comunidad</p>
                    <p class="hero-image-title" style="--hero-text-color: var(--white-color);">académica del Instituto de
                        Ciencias. En un inicio se busca compartir la investigación </p>
                    <p class="hero-image-title" style="--hero-text-color: var(--white-color);">que conduzca al desarrollo e
                        intercambio fuera y dentro de la Institución. </p>
                </div>
            </aside>
        </article>
    </section>
    <div id="relleno"></div>
    <section id="">
        <div class="contenedor">
            <h1 class="section-title">Buscar</h1>
            <div class="card bg-light">
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <h1 class="card-title mt-3 text-center">Buscar un investigador</h1>
                    <p class="text-center">Ingresa el apellido del investigador <br> y selecciona una opción</p>
                    <livewire:buscador-index />

                </article>
            </div>
            <livewire:contacto />
        </div>
    </section>
    <div id="relleno"></div>
@endsection

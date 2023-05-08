@extends('layouts.app')


@section('contenido')
    <section id="inicio" class="home">
        <article class="hero-image"
            style="--hero-image: url('/public/img/52527624876_6cb1d2dc82_o.jpg'); --attachment:fixed;">
            <aside class="hero-image-opacity" style="--hero-opacity-color: var(--black-alpha-color);">
                <div class="container mx-auto flex flex-col items-center">
                <svg class="img_buap" width="355" height="96" viewBox="0 0 355 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 94V0.909088H40.3636C47.4545 0.909088 53.4091 1.86363 58.2273 3.77273C63.0758 5.68182 66.7273 8.37878 69.1818 11.8636C71.6667 15.3485 72.9091 19.4545 72.9091 24.1818C72.9091 27.6061 72.1515 30.7273 70.6364 33.5455C69.1515 36.3636 67.0606 38.7273 64.3636 40.6364C61.6667 42.5151 58.5152 43.8182 54.9091 44.5455V45.4545C58.9091 45.6061 62.5455 46.6212 65.8182 48.5C69.0909 50.3485 71.697 52.9091 73.6364 56.1818C75.5758 59.4242 76.5455 63.2424 76.5455 67.6364C76.5455 72.7273 75.2121 77.2576 72.5455 81.2273C69.9091 85.197 66.1515 88.3182 61.2727 90.5909C56.3939 92.8636 50.5758 94 43.8182 94H0ZM25.2727 73.8182H37.0909C41.3333 73.8182 44.5152 73.0303 46.6364 71.4545C48.7576 69.8485 49.8182 67.4848 49.8182 64.3636C49.8182 62.1818 49.3182 60.3333 48.3182 58.8182C47.3182 57.303 45.8939 56.1515 44.0455 55.3636C42.2273 54.5758 40.0303 54.1818 37.4545 54.1818H25.2727V73.8182ZM25.2727 38.5455H35.6364C37.8485 38.5455 39.803 38.197 41.5 37.5C43.197 36.803 44.5152 35.803 45.4545 34.5C46.4242 33.1667 46.9091 31.5455 46.9091 29.6364C46.9091 26.7576 45.8788 24.5606 43.8182 23.0455C41.7576 21.5 39.1515 20.7273 36 20.7273H25.2727V38.5455ZM140.591 0.909088H165.864V60.5455C165.864 67.6364 164.167 73.7727 160.773 78.9545C157.409 84.1061 152.712 88.0909 146.682 90.9091C140.652 93.697 133.652 95.0909 125.682 95.0909C117.652 95.0909 110.621 93.697 104.591 90.9091C98.5606 88.0909 93.8636 84.1061 90.5 78.9545C87.1667 73.7727 85.5 67.6364 85.5 60.5455V0.909088H110.773V58.3636C110.773 61.2424 111.409 63.8182 112.682 66.0909C113.955 68.3333 115.712 70.0909 117.955 71.3636C120.227 72.6364 122.803 73.2727 125.682 73.2727C128.591 73.2727 131.167 72.6364 133.409 71.3636C135.652 70.0909 137.409 68.3333 138.682 66.0909C139.955 63.8182 140.591 61.2424 140.591 58.3636V0.909088ZM202.057 94H174.784L205.511 0.909088H240.057L270.784 94H243.511L223.148 26.5455H222.42L202.057 94ZM196.966 57.2727H248.239V76.1818H196.966V57.2727ZM279.75 94V0.909088H319.932C326.841 0.909088 332.886 2.27273 338.068 5C343.25 7.72727 347.28 11.5606 350.159 16.5C353.038 21.4394 354.477 27.2121 354.477 33.8182C354.477 40.4848 352.992 46.2576 350.023 51.1364C347.083 56.0152 342.947 59.7727 337.614 62.4091C332.311 65.0455 326.114 66.3636 319.023 66.3636H295.023V46.7273H313.932C316.902 46.7273 319.432 46.2121 321.523 45.1818C323.644 44.1212 325.265 42.6212 326.386 40.6818C327.538 38.7424 328.114 36.4545 328.114 33.8182C328.114 31.1515 327.538 28.8788 326.386 27C325.265 25.0909 323.644 23.6364 321.523 22.6364C319.432 21.6061 316.902 21.0909 313.932 21.0909H305.023V94H279.75Z" fill="black"/>
                </svg>
                    <div id="relleno-nav"></div>
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

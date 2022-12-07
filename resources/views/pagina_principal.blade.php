@extends('layouts.app')


@section('contenido')

<section id="inicio" class="home">
  <article class="hero-image" style="--hero-image: url('/public/img/52527624876_6cb1d2dc82_o.jpg'); --attachment:fixed;">
    <aside class="hero-image-opacity" style="--hero-opacity-color: var(--black-alpha-color);">
      <div class="hero-image-content">
        <p class="hero-image-title" style="--hero-text-color: var(--white-color);" >El Ecosistema ICUAP en el marco de la ciencia abierta, tiene como objetivo </p>
        <p class="hero-image-title" style="--hero-text-color: var(--white-color);" >difundir los avances, las investigaciones y los  productos científicos de la comunidad</p>
        <p class="hero-image-title" style="--hero-text-color: var(--white-color);" >académica del Instituto de Ciencias.  En un inicio se busca  compartir la investigación </p>
        <p class="hero-image-title" style="--hero-text-color: var(--white-color);" >que conduzca al desarrollo e intercambio fuera y dentro de la Institución. </p>
      </div>
    </aside>
  </article>
</section>
  <div class="hero-image-title">  
  </div>
  <div id="relleno"></div>
  <section id="">
    <div class="contenedor">
      <h1 class="section-title">Buscar</h1>
      <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
          <h4 class="card-title mt-3 text-center">Buscar un investigador</h4>
          <livewire:buscador-index />
            {{-- <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
              <input type="text" class="form-control" placeholder="Primer apellido" aria-label="Name" aria-describedby="basic-addon1">
              <input type="text" class="form-control" placeholder="Segundo apellido" aria-label="Name" aria-describedby="basic-addon1">
            </div> 
              <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input name="" class="form-control" placeholder="Nombre(s)" type="text">      
              </div>                       
            <div class="form-group col text-center">
                <input type="submit" class="botn btn-block" value="Buscar">
            </div> <!-- form-group// -->       --}}
        </article>
      </div>
      <article id="gracias" class="modal">
        <div class="modal-content">
          <article class="contact-form-response">
            <h3>
              ¡Muchas Gracias!
              <br>
              Por tus comentarios
            </h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path d="M12,18c4,0,5-4,5-4H7C7,14,8,18,12,18z" />
              <path
                d="M12,2C6.486,2,2,6.486,2,12c0,5.514,4.486,10,10,10s10-4.486,10-10C22,6.486,17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z" />
              <path
                d="M13 12l2 .012C15.012 11.55 15.194 11 16 11s.988.55 1 1h2c0-1.206-.799-3-3-3S13 10.794 13 12zM8 11c.806 0 .988.55 1 1h2c0-1.206-.799-3-3-3s-3 1.794-3 3l2 .012C7.012 11.55 7.194 11 8 11z" />
            </svg>
          </article>
        </div>
      </article>
    </div>
  </section>
<div id="relleno"></div>
@endsection
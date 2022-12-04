<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @stack('styles')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jpswalsh/academicons@1/css/academicons.min.css">
        <title>ICUAP</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        @livewireStyles
</head>
<body >	
  <header class="header">	
    <section class="contenedor">	
      <div class="logo">	
        <img src="{{asset('img/image 2.svg')}}" alt="Logo Minerva">
        <a href="#inicio" class="logo-nombre">ECOSISTEMA DE INVESTIGACIÓN ICUAP</a>	
      </div>	
      <button class="menu-btn">	
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">	
          <path d="M4 6H20V8H4zM4 11H20V13H4zM4 16H20V18H4z" />	
        </svg>	
        <svg class="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">	
          <path	
            d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />	
        </svg>	
      </button>	
        <nav class="menu">	
          <a href="{{route('index')}}">Inicio</a>
          <a href="#contacto">Contacto</a>	
          @guest
            <a href="{{route('login')}}">Iniciar sesión</a>	
          @endguest
          @auth
          <a href="{{route('administracion')}}">Panel de administración</a>
          <form method="POST" action="{{route('logout')}}">
            @csrf
            <button type="submit">
              <a >Cerrar sesión</a>	
            </button>
            
        </form>
          @endauth
        </nav>
    </section>
  </header>
  <div id="relleno-nav"></div>
    @yield('contenido')
  <footer class="footer">
    <small>
        Copyright ©2022 | Diseñado por: <a href="https://wefesolutions.com/">W.E.F.E.</a>
    </small>
</footer>
@livewireScripts
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>
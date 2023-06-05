<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Título de la página</title>
    <!-- Ruta de la hoja de estilo de Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Intermodular</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @if(auth()->check())
          <li class="nav-item">
            <a class="nav-link btn btn-dark" style="color:white ">Bienvenido/a <strong>{{auth()->user()->login}} </strong></a>
            </button>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="{{ route('inicio')}}">Home</a>
          </li>
          @if(auth()->guest())

          <li class="nav-item">
            <a class="nav-link"  href="{{ route('login.login')}}">Iniciar sesion</a>
          </li>
          @endif

          @if (auth()->check())

          <li class="nav-item">
            <a class="nav-link"  href="{{ route('empresas.create')}}">Nueva empresa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ route('centros.create')}}">Nuevo centro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ route('empresas.index')}}">Listado empresas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link btn btn-light"  href="{{ route('logout')}}">Logout</a>
         </li>
          @endif

        </ul>
      </div>
    </div>
  </nav>

<div class="bg-red">
  <div class="claro-dist">
    <img src="{{ asset('images/header/logo-distribuidor-autorizado.png') }}" alt="logo-distribuidor-autorizado">
      <p class="mb-0">Llámanos al 989007199</p>
  </div>
</div>
<div class="shadow">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a href="{{ route('goHome') }}">
      <img class="logo ml-3 ml-lg-0" src="{{ asset('images/header/dnc.png') }}" alt="DNC">
    </a>
    <button class="navbar-toggler mr-3 mr-lg-0" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Móvil
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ route('getproducts') }}">Prepago</a>
            <a class="dropdown-item" href="{{ route('getproducts') }}">Postpago</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hogar

          </a>
          <div class="dropdown-menu hogar" aria-labelledby="navbarDropdownMenuLink">
            <div class="d-flex">
              <div class="d-flex flex-column p-3 px-5 px-lg-3">
                <p class="dropdown-title mb-2">1 Play</p>
                <a class="mb-2" href="{{ route('getPlayuno') }}">Internet FIjo</a>
                <a href="{{ route('getPlayuno') }}">Internet Inalámbrico</a>
              </div>
              <div class="d-flex flex-column p-3 ml-0 ml-lg-2 px-5 px-lg-0">
                <p class="dropdown-title mb-2">2 Play</p>
                <a class="mb-2" href="{{ route('getPlaydos') }}">Internet + Telefonía</a>
                <a href="{{ route('getPlaydos') }}">Internet + Televisión</a>
              </div>
              <div class="d-flex flex-column p-3 ml-0 ml-lg-2 px-5 px-lg-0">
                <p class="dropdown-title mb-2">3 Play</p>
                <a class="mb-2" href="{{ route('getPlaytres') }}">Internet + TV + Telefonía</a>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('getUbicaciones') }}">Ubicación <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('home') }}">Deportes Panamericanos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto float-left"></ul>
    <div class="my-12 my-lg-0">
      <ul class="navbar-nav mr-auto float-right">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="options" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ $name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="options">
            <a class="dropdown-item" href="{{ route('session.finish') }}">Cerrar sesión</a>
          </div>
        </li>
        <li class="nav-item">
          <img src="{{ asset('images/invitado.png') }}" alt="invitado" width="40px" height="40px" class="rounded-circle">
        </li>
      </ul>
    </div>
  </div>
</nav>
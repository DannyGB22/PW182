

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand fs-4" href="#">Library</a>
    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> --}}
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active {{ request()->routeIs('apodoInicio')?'text-success fw-semibold ':''}}" aria-current="page" href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('apodoRegistro')?'text-warning fw-semibold':''}}" href="/registro">Registro de libros</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}"><i class="bi bi-activity"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('aboutUs') }}">Chi Siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contacts') }}">Contatta un GYMBRO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('services') }}">Tutti i nostri servizi</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{ route('services-create') }}">Crea un nuovo servizio</a>
        </li>



      </ul>
    </div>
  </div>
</nav>
<!-- navbar end -->
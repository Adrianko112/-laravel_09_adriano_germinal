<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GymBro</title>
    <!-- css custom -->
     <link rel="stylesheet" href="/style.css">
        <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <!-- icone bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}"><i class="bi bi-activity"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{ route('services') }}">Tutti i nostri servizi</a>
        </li>
         
       
       
      </ul>
    </div>
  </div>
</nav>
<!-- navbar end -->
   <!-- header -->
  <header>
    <div class="container-fluid servizi">
        <div class="row justify-content-center"> 
            <div class="col-12 mb-5">
                <h2 class="text-white text-center text-color display-4 fw-bold">I nostri servizi</h2>
            </div>
            
            <div class="row g-4 justify-content-center">
                @foreach($servizi as $servizio)
                <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="{{ $servizio['img'] }}" class="card-img-top cardImg" alt="immagine del servizio">
                        <div class="card-body d-flex flex-column bg-dark text-white">
                            <h5 class="card-title">{{ $servizio['name'] }}</h5>
                            <p class="card-text">{{ $servizio['description'] }}</p>
                            <a href="{{ route('servicesDetail', ['id' => $servizio['id']]) }}" class="btn btn-primary mt-auto">Vai al servizio</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</header>
   
   
   
   
   
   
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
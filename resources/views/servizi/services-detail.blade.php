<x-layout>

   <!-- header -->
  <header>
    <div class="container-fluid servizi">
        <div class="row justify-content-center servizi-header"> 
            <div class="col-12 mb-5">
                <h2 class="text-white text-center text-color display-4 fw-bold">{{ $servizio['name'] }}</h2>
            </div>
            
            <div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-center text-white rounded-3">
                <h3>{{ $servizio['name'] }}</h3>
                <p>{{ $servizio['description'] }}</p>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <img src="{{ $servizio['img'] }}" class="img-fluid" alt="immagine del servizio">
            </div>
           
        </div>
    </div>
</header>
   
   
   
   
   
   
   </x-layout>
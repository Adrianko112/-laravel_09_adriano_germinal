<x-layout >

   <!-- header -->
  <header>
    <div class="container-fluid servizi ">
        <div class="row justify-content-center servizi-header"> 
            <div class="col-12 mb-5">
                <h2 class="text-white text-center text-color display-4 fw-bold">I nostri servizi</h2>
            </div>
            
            <div class="row g-4 justify-content-center">
                @forelse($servizi as $servizio)
                <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
                    <x-services
                        :servizio="$servizio"
                    />
                </div>
                @empty

         
            <div class="col-12 mb-5">
                <h2 class="text-white text-center text-color display-4 fw-bold">Nessun servizio disponibile</h2>
            </div>
                @endforelse
            </div>
        </div>
    </div>
</header>
   
 </x-layout>

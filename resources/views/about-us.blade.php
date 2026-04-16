<x-layout>

   <!-- header -->
    <header>
      
        <div class="container-fluid header d-flex align-items-center justify-content-center">
            <div class="row align-items-center h-100">
               <div class="col-6">
                <h2 class="text-white text-center text-color display-4 fw-bold">Chi siamo</h2>
                <p class="text-white text-center text-color display-6">Siamo un gruppo di appassionati di fitness dedicati a aiutarti a raggiungere i tuoi obiettivi di allenamento.</p>
               </div>
               <div class="col-6">
                <img src="/media/pt.jpg" alt="I nostri Personal Trainer" class="img-fluid rounded-3 shadow">
               </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- lista utenti -->
    <section class="container user-list">
      <div class="row vh-100 align-items-center justify-content-around">
        @foreach($users as $user)
        <div class="col-12 col-md-4">
         <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$user['name']}} {{$user['surname']}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{$user['role']}}</h6>
    <a href="{{ route('aboutUsDetail', ['name' => $user['name']]) }}" class="card-link">Approfondisci</a>
  </div>
</div>
        </div>
        @endforeach

      </div>
    </section>
   
   
   
   
   
   
   </x-layout>
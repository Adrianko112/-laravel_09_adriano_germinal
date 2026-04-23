<x-layout>

  <div class="container-fluid">
    <div class="row">
      <h2>
        Aggiungi un nuovo servizio
      </h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <form method="POST" action="{{route('services-store')}}">
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Titotlo:</label>
            <input type="text" name="name" class="form-control" id="title" aria-describedby="emailHelp">

          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione:</label>
            <textarea name="description" id="description" class="form-control"></textarea>

          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input type="text" name="price" class="form-control" id="price" aria-describedby="emailHelp">
          </div>

          <button type="submit" class="btn btn-primary">Inserisci il tuo servizio</button>
        </form>
      </div>
    </div>
  </div>

</x-layout>
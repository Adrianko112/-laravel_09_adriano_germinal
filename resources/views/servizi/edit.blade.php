<x-layout>

  <div class="container-fluid">
    <div class="row">
      <h2>
       Modifica il servizio: {{ $servizio->name }}
      </h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <!-- Create Post Form -->
        <form method="POST" action="{{ route('servizio.update', $servizio) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="title" class="form-label">Titotlo:</label>
            <input type="text" name="name" class="form-control" id="title" aria-describedby="emailHelp" value="{{$servizio->name }}"> 

          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione:</label>
            <textarea name="description" id="description" class="form-control"> {{ $servizio->description }}</textarea>

          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Prezzo:</label>
            <input type="text" name="price" class="form-control" id="price" aria-describedby="emailHelp" value="{{ $servizio->price }}">
          </div>

          <div class="mb-3">
            <label for="img" class="form-label">Immagine:</label>
            <input type="file" name="img" class="form-control" id="img" aria-describedby="emailHelp">
          </div>


          <button type="submit" class="btn btn-primary">Modifica il tuo servizio</button>
        </form>
      </div>
</div>
  </div>

</x-layout>
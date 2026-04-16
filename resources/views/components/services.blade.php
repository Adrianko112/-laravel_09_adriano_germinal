<div class="card h-100" style="width: 18rem;">
                        <img src="{{ $servizio['img'] }}" class="card-img-top cardImg" alt="immagine del servizio">
                        <div class="card-body d-flex flex-column bg-dark text-white">
                            <h5 class="card-title">{{ $servizio['name'] }}</h5>
                            <p class="card-text">{{ $servizio['description'] }}</p>
                            <a href="{{ route('servicesDetail', ['id' => $servizio['id']]) }}" class="btn btn-primary mt-auto">Vai al servizio</a>
                        </div>
                    </div>
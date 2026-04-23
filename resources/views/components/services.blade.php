<div class="card h-100" style="width: 18rem;">
                        <img src="https://picsum.photos/200/300" class="card-img-top cardImg" alt="immagine del servizio">
                        <div class="card-body d-flex flex-column bg-dark text-white">
                            <h5 class="card-title">{{ $servizio['name'] }}</h5>
                            <p class="card-text">{{ $servizio['description'] }}</p>
                            <p class="card-text">Prezzo: ${{ number_format($servizio['price'], 2) }}</p>
                            <a href="" class="btn btn-primary mt-auto">Vai al servizio</a>
                        </div>
                    </div>
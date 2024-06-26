<div class="container mt-5">
    <div class="row">
        @foreach ($houses as $house)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 14rem;">
                    <img src="{{ url("storage/{$house->photo}") }}" class="card-img-top" alt="{{ $house->type }}">
                    <div class="card-body">
                        <p class="card-text">{{ $house->city }}</p>
                        <h5 class="card-title">{{ $house->type }}</h5>
                        <p class="card-text"><b>R$ {{ $house->formatted_price }}</b></p>
                        <a href="{{ route('show', $house->id) }}" class="btn btn-dark">Ver Detalhes</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
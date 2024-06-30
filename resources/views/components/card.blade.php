<link rel="stylesheet" href="{{ asset('css/card.css') }}" />

{{-- <form action="{{ route('home') }}" method="GET">
    <label for="sort_order">Ordenar por preço:</label>
    <select name="sort_order" id="sort_order" class="form-select form-select-sm" aria-label="Small select example">
        <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Menor para maior</option>
        <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Maior para menor</option>
    </select>
    <button type="submit" type="button" class="btn btn-dark">Ordenar</button>
</form> --}}

<div class="container mt-5">
    <div class="row">
        <div class="card-containers">
            @foreach ($houses as $house)
                <div class="col-md-3 mb-3">
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
</div>

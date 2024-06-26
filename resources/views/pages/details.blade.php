@extends('template')

@section('template')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <img src="{{ url("storage/{$house->photo}") }}" class="card-img-top" alt="{{ $house->type }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $house->type }}</h5>
                        <p class="card-text">{{ $house->city }}</p>
                        <p class="card-text"><strong>R$ {{ $house->formatted_price }}</strong></p>
                        <p class="card-text">Vendedor : {{ $house->user->name }}</p>
                    </div>
                </div>
            </div>
            @include('components.form')
        </div>
    </div>
@endsection

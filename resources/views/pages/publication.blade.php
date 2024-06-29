@extends('template')

@section('template')
    <link rel="stylesheet" href="{{ asset('css/publication.css') }}" />
    <div class="publication">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Seu anúncio</h5>
                    <form action="{{ route('house.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="type">Tipo de imóvel</label>
                            <select class="form-select" aria-label="Default select example" id="state" name="state" required>
                                {{-- <option selected disabled>Selecione:</option> --}}
                                @foreach ($types as $type)
                                    <option value="{{ $type }}">{{ $type }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">Cidade</label>
                            <select class="form-select" aria-label="Default select example" id="state" name="state" required>
                                {{-- <option selected disabled>Selecione:</option> --}}
                                @foreach ($states as $state)
                                    <option value="{{ $state }}">{{ $state }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Preço</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="199.000"
                                min="0" required>
                        </div>
                        <div class="form-group">
                            <label for="photo" class="form-label">Selecione a imagem</label>
                            <input class="form-control" type="file" id="photo" name="photo" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" style="margin-top: 10px">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

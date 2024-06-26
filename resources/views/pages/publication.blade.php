@extends('template')

@section('template')
    <link rel="stylesheet" href="{{ asset('css/publication.css') }}" />
    <div class="publication">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Seu anúncio</h5>
                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="type">Tipo de imóvel</label>
                            <select class="form-select" aria-label="Default select example" id="type" name="type">
                                <option selected disabled>Selecione:</option>
                                <option value="Casa">Casa</option>
                                <option value="Apartamento">Apartamento</option>
                                <option value="Fazenda">Fazenda</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city">Cidade</label>
                            <select class="form-select" aria-label="Default select example" id="city" name="city">
                                <option selected disabled>Selecione:</option>
                                <option value="São Paulo">São Paulo</option>
                                <option value="São Bernardo">São Bernardo</option>
                                <option value="Guarulhos">Guarulhos</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Preço</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="199000"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="photo" class="form-label">Selecione a imagem</label>
                            <input class="form-control" type="file" id="photo" name="photo">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" style="margin-top: 10px">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

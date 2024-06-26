@extends('template')

{{-- Abaixo posso fazer das duas formas, pois a variavel fica disponivel para view filha --}}
@section('template')
    {{-- @include('components.card', ['houses' => $houses]) --}}
    @include('components.card')
@endsection

@extends('layouts.app')

@section('content')
    <h1>Studento informacija</h1>
    <p>Vardas: Alvydas</p>
    <p>Pavardė: Stanius</p>
    <p>Grupė: PIT-20I-NT</p>

    <p><a href="{{ route('client') }}" onclick="showLoading()">Kliento posistemis</a></p>
    <p><a href="{{ route('darbuotojas') }}" onclick="showLoading()">Darbuotojo posistemis</a></p>
    <p><a href="{{ route('administratorius') }}" onclick="showLoading()">Sistemos administratoriaus posistemis</a></p>
@endsection

@extends('layouts.app')

@section('title', 'Prodotti')
@section('content')
    <h1>{{ $pasta['titolo'] }}</h1>
    <img src="{{ $pasta['src-h'] }}" alt="$pasta['titolo']">
    <p>{!! $pasta['descrizione'] !!}</p>
    <p>Peso: {{ $pasta['peso'] }}</p>
    <p>Cottura: {{ $pasta['cottura'] }}</p>
@endsection
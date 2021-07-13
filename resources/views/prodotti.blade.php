@extends('layouts.main')

@section('main-content')

    @include('partials.cards', [
        'title' => "Le lunghe",
        'array' => $lunghe
    ])

    @include('partials.cards', [
        'title' => "Le corte",
        'array' => $corte
    ])

    @include('partials.cards', [
        'title' => "Le cortissime",
        'array' => $cortissime
    ])

@endsection

@section('page-title', "Molisana | I nostri prodotti")

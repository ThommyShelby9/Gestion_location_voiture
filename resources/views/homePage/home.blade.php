@extends('layout.master')

@section('title', 'Accueil - Gescar Location de véhicules') {{-- titre personnalisé --}}

@section('bg-color', '#1a1549') {{-- couleur d'arrière plan de la page d'accueil --}}

@section('content')
    <section>
        @include('includes.home.home')
    </section>
@endsection
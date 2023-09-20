@extends('layout.master-head')

@section('title', 'Gestion des Marques') {{-- titre personnalisé --}}

@section('content')

    <section>
        @include('includes.carManagement.brand')
    </section>

@endsection
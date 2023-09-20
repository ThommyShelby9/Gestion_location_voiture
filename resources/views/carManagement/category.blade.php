@extends('layout.master-head')

@section('title', 'Gestion des catégories') {{-- titre personnalisé --}}

@section('content')

    <section>
        @include('includes.carManagement.category')
    </section>

@endsection
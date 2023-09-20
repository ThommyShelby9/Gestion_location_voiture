@extends('layout.master-head')

@section('title', 'Ajouter voitures') {{-- titre personnalisé --}}

@section('content')
    <section>
        @include('includes.carManagement.addcar')
    </section>
@endsection
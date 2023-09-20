@extends('layout.master-head')

@section('title', 'Gestion des voitures') {{-- titre personnalisé --}}

@section('content')
    <section>
        @include('includes.carManagement.cars')
    </section>
@endsection

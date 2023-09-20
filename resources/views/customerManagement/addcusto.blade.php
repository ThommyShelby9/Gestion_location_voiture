@extends('layout.master-head')

@section('title', 'Ajouter clients') {{-- titre personnalisé --}}

@section('content')
    <section>
        @include('includes.customerManagement.addcusto')
    </section>
@endsection
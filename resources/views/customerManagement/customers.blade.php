@extends('layout.master-head')

@section('title', 'Accueil - Gestion des clients') {{-- titre personnalisé --}}

@section('content')
    
        @include('includes.customerManagement.customers')
    
@endsection
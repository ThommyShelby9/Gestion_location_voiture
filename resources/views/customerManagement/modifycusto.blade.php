@extends('layout.master-head')

@section('title', 'Modification Client') {{-- titre personnalisé --}}

@section('content')
    <section>
        @include('includes.customerManagement.modifycusto')
    </section>
@endsection
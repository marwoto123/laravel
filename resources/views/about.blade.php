@extends('layouts.main')

@section('container')
    <div class="jumbotron jumbotron-fluid">

        <h1 class="mb-4">Halaman about</h1>

        <h3> nama: {{ $name }}</h3>
        <p>email: {{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $email }}"width="200" class="img-thumbnail rounded-circle">
    @endsection

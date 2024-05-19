@extends('layouts.main')

@section('container')

       <h1>Halaman Home</h1>

        <h3> nama: {{ $name }}</h3>
        <p>email: {{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $email }}"width="200"class="img-thumbnail rounded-circle">
     
@endsection
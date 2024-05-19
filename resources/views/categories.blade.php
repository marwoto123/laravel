@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post Categories  </h1>
<div class="container">
    <div class="row">

        @foreach ($categories as $category)
    


        <div class="col-md-4">
            <a href="/categories/{{ $category->slug }}">
            <div class="card text-bg-dark">
                <img src="/img/tom-jery.png" class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-center p-0">


                  <h5 class="card-title text-center flex-fill p-4 " style="background-color:rgb(0,0,0,0.7)">{{ $category->name }}</h5>
                  

                  {{-- <p class="card-text"><small>Last updated 3 mins ago</small></p> --}}
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>


@endsection

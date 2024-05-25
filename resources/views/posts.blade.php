@extends('layouts.main')

@section('container')



    <h1 class="mb-3 text-center">{{ $title }}</h1>
    <div class="row mb-3 justify-content-center">
        <div class="col-md-6">
            <form action="/posts">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            {{-- <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}"> --}}


            @if ($posts[0]->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="/img/jerry.jpg" alt="{{ $posts[0]->category->name }}" height="350px">
            @endif



            <div class="card-body text-center">
                <h3 class="card-title"> <a href="/posts/{{ $posts[0]->slug }}"class="text-decoration-none text-dark">
                        {{ $posts[0]->title }}</a></h3>
                <small>
                    <p>by.
                        <a
                            href="/authors/{{ $posts[0]->author->username }}"class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                        in
                        <a href="/categories/{{ $posts[0]->category->slug }}"class="text-decoration-none">{{ $posts[0]->category->name }}
                        </a>{{ $posts[0]->created_at->diffForHumans() }}
                </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute py-2 px-2 text-white"
                                style="background-color: rgb(0
                        0, 0, 0.7)">
                                <a href="/categories/{{ $post->category->slug }}"
                                    class="text-decoration-none text-white ">{{ $post->category->name }}</a>
                            </div>

                            @if ($post->image)
                               
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}
                                    " class="img-fluid ">
                                        
                              
                            @else
                                {{-- <img src="/img/jerry.jpg" alt="{{ $posts[0]->category->name }}" height="350px"> --}}

                                <img src="/img/tom-jery.png" class="card-img-top" alt="{{ $post->category->name }}">
                            @endif



                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>by. <a href="/authors/{{ $post->author->username }}"
                                        class="text-decoration-none">{{ $post->author->name }}</a>{{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}"class="btn btn-primary">Read more.</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p claaa="text-center fs-4">No post found.</p>
    @endif
@endsection

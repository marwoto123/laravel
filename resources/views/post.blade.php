@extends('layouts.main')

{{-- @dd($post) --}}
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h4 class="mb-3"> {{ $post->title }}</h4>

                <p>by.
                    <a
                        href="/authors/{{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a>in
                    <a
                        href="/categories/{{ $post->category->slug }}"class="text-decoration-none ">{{ $post->category->name }}</a>
                </p>
                <img src="/img/jerry.jpg" alt="{{ $post->category->name }}" class="img-fluid">
                <article class="my-3 fs-5">

                    {!! $post->body !!}
                </article>
                <a href="/posts" class="d-block mt-3">back to posts</a>
            </div>
        </div>
    </div>




    <article class="mb-10">

    </article>
@endsection

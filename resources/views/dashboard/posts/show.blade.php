@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <h4 class="mt-3"> {{ $post->title }}</h4>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back my Post</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
                <img src="/img/jerry.jpg" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection

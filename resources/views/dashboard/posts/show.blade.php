@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <h4 class="mt-3"> {{ $post->title }}</h4>
                <a href="/dashboard/posts/" class="btn btn-success"><span data-feather="arrow-left"></span> Back my Post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>


                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm ('HAPUS POSTS... ?')">
                        <span data-feather="x-circle"></span>Delete
                    </button>
                </form>
                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' .$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
                @else
                    <img src="/img/jerry.jpg" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection

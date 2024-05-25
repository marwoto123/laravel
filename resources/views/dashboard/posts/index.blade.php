@extends('dashboard.layouts.main')
@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif



    <h1 class="h2">Penulis : {{ auth()->user()->name }}</h1>
    <div class="table-responsive">
        <a href="/dashboard/posts/create" class="btn btn-primary my-2">Tambah Post Baru</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col"> </th>

                    <th scope="col">Judul</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>

                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}"class="badge bg-info"> <span
                                    data-feather="eye"></span></a>

                            <a href="/dashboard/posts/{{ $post->slug }}/edit"class="badge bg-warning"> <span
                                    data-feather="edit"></span></a>




                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm ('HAPUS POSTS... ?')">
                                    <span data-feather="x-circle"></span>

                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

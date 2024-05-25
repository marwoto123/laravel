@extends('dashboard.layouts.main')
@section('container')
   

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

                            <a href="/dashboard/posts/{{ $post->id }}"class="badge bg-warning"> <span
                                    data-feather="edit"></span></a>
                            <a href="/dashboard/posts/{{ $post->id }}"class="badge bg-danger"> <span
                                    data-feather="x-circle"></span></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

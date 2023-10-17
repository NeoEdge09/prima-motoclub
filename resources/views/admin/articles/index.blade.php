@extends('layouts.app_session')

@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-8">
                <a class="mb-3 py-3" href="{{ Route('articles.create') }}"><button class=" btn btn-primary">Create
                        Article</button></a>
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul Artikel</th>
                            <th scope="col">Konten Artikel</th>
                            <th scope="col">Gambar Artikel</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $article->title }}</td>
                                <td class="content-column">{{ $article->content }}</td>
                                <td><img src="{{ asset('storage/images/' . $article->image) }}" alt=""
                                        width="100px"></td>
                                <td>
                                    <a class="btn btn-warning"
                                        href="{{ route('articles.edit', ['article' => $article->id]) }}">Edit</a>
                                    <form action="{{ route('articles.destroy', $article) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus artikel ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app_session')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Artikel</div>

                    <div class="card-body">
                        <form action="{{ route('articles.update', ['article' => $article->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group py-2">
                                <label for="title">Judul Artikel</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    value="{{ $article->title }}">
                            </div>

                            <div class="form-group py-2">
                                <label for="content">Konten Artikel</label>
                                <textarea name="content" class="form-control" id="content">{{ $article->content }}</textarea>
                            </div>

                            <div class="form-group py-2">
                                <label for="image">Gambar Artikel</label>
                                <input type="file" name="image" class="form-control" id="image">
                            </div>

                            <button type="submit" class="btn btn-primary py-2">Update Artikel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

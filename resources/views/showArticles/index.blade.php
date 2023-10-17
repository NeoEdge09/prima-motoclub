@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="pb-3">Baca Artikel Mencarik Disini</h2>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/' . $article->image) }}" class="card-img-top" alt="Gambar Artikel"
                            style="height: 200px; width: auto; object-fit: cover;" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text"> {{ Str::limit($article->content, 150) }}</p>
                            <a href="{{ url('/article-detail', ['article' => $article->id]) }}" class="btn btn-primary">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

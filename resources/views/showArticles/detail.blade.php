@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $article->title }}</div>

                    <div class="card-body">
                        <img src="{{ asset('storage/images/' . $article->image) }}" class="card-img-top" alt="Gambar Artikel"
                            style="height: 200px; width: auto; object-fit: cover;" />
                        <p class="card-text">{{ $article->content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

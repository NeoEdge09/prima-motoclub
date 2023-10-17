@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/' . $article->image) }}" class="card-img-top" alt="Gambar Artikel"
                            style="height: 400px; width: auto; object-fit: cover;" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

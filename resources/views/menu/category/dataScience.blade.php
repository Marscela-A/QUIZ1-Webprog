@extends('layout.master')

@section('title', 'Data Science')

@section('konten')
<div class="container mt-4">
    <h1>Data Science</h1>
    <div class="row">
        @foreach ($articles as $article)
            <div class="card mb-3 d-flex flex-row">
                <img src="{{ asset($article->image) }}" class="card-img-left" alt="{{ $article->title }}" style="width: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p>By {{ $article->author }} on {{ $article->date }}</p>
                    <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                    <a href="{{ route('article.show', $article->id) }}" class="btn btn-dark">Read more...</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
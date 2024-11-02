@extends('layout.master')
@section('title', 'Home Page')

@section('konten')

<div class="row">
    <div class="col-12">
            <img src="{{ asset('img/Home Page.png') }}" alt="Banner" class="img-fluid w-100" style="height: auto;">
    </div>
</div>

<div class="container">
    <div class="row mt-5">
        @foreach ($latestArticles as $article)
        <div class="col-12 mb-4">
            <div class="card d-flex flex-row">
                <img src="{{ asset($article->image) }}" class="card-img-left" alt="{{ $article->title }}" style="width: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p>By {{ $article->author }} on {{ $article->date }}</p>
                    <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                    <a href="{{ route('article.show', $article->id) }}" class="btn btn-dark">Read more...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
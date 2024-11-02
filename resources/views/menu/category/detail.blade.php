@extends('layout.master')

@section('title', $article->title)
@section('konten')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $article->title }}</h1>
            <img src="{{ asset($article->image) }}" class="img-fluid" alt="{{ $article->title }}">
            <p><strong>By:</strong> {{ $article->author }} | <strong>Date:</strong> {{ $article->date }}</p>
            <div>
                <p>{{ $article->content }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

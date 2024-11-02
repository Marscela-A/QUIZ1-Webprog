@extends('layout.master')

@section('title', 'Writer - ' . $writer->name)
@section('konten')
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h2>{{ $writer->name }}</h2>
            <ul>
            @foreach ($articles as $article)
                    <div class="card mb-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset($article->image) }}" class="img-fluid rounded-start" alt="{{ $article->title }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <strong>By:</strong> {{ $writer->name }} | <strong>Date:</strong> {{ $article->date }}
                                        </small>
                                    </p>
                                    <p class="card-text">{{ Str::limit($article->content, 150) }}</p>
                                    <a href="{{ route('article.show', $article->id) }}" class="btn btn-dark">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
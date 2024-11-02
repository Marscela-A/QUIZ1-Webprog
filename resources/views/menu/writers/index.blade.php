@extends('layout.master')

@section('title', 'Writers')
@section('konten')
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h1>Our Writers</h1>
            <div class="d-flex flex-wrap">
                @foreach ($writers as $writer)
                    <div class="card m-2" style="width: 18rem;">
                        <img src="{{ asset($writer->photo) }}" class="card-img-top" alt="{{ $writer->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $writer->name }}</h5>
                            <a href="{{ route('writers.show', $writer->id) }}" class="btn btn-dark">Articles</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
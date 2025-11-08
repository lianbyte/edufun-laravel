@extends('layouts.app')

@section('title', $category->name . ' - EduFun')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">{{ $category->name }}</h2>
    
    <div class="row">
        @foreach($articles as $article)
        <div class="col-md-12 mb-4">
            <div class="article-card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&h=300&fit=crop" class="img-fluid" style="height: 100%; object-fit: cover;" alt="{{ $article->title }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4">
                            <h3 class="card-title">{{ $article->title }}</h3>
                            <p class="text-muted">{{ $article->created_at->format('d M Y') }} | by: {{ $article->writer->name }}</p>
                            <p class="card-text">{{ $article->excerpt }}</p>
                            <a href="{{ route('article.show', $article->id) }}" class="btn btn-read-more">read more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

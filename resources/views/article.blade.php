@extends('layouts.app')

@section('title', $article->title . ' - EduFun')

@section('content')
<div class="container mt-5">
    <h2 class="mb-3">{{ $article->title }}</h2>
    <p class="text-muted">{{ $article->created_at->format('d M Y') }} | by: {{ $article->writer->name }}</p>
    
    <div class="my-4">
        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=1200&h=500&fit=crop" class="img-fluid rounded" alt="{{ $article->title }}" style="width: 100%; max-height: 500px; object-fit: cover;">
    </div>
    
    <div class="article-content" style="line-height: 1.8; font-size: 1.1rem;">
        {!! nl2br(e($article->content)) !!}
    </div>
</div>
@endsection

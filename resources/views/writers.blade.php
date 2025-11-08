@extends('layouts.app')

@section('title', 'Our Writers - EduFun')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-5">Our Writers:</h2>
    
    <div class="row justify-content-center">
        @foreach($writers as $writer)
        <div class="col-md-4">
            <div class="writer-card">
                <div class="writer-avatar">
                    @if($writer->name == 'Raka Putra Wicaksono')
                        👨‍💻
                    @elseif($writer->name == 'Bia Mecca Annisa')
                        👩‍💻
                    @else
                        👨‍💼
                    @endif
                </div>
                <h4>{{ $writer->name }}</h4>
                <p class="text-muted">{{ $writer->specialization }}</p>
                <a href="{{ route('writer.show', $writer->id) }}" class="btn btn-read-more">View Articles</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

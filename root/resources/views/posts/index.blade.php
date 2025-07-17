@extends('layout')

@section('content')
    <div class="container mt-5">
        <h3>掲示板</h3>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">新規作成</a>
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">詳細</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
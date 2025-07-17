@extends('layout')

@section('content')
        <h3>投稿詳細</h3>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">戻る</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">編集</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">削除</button>
                    </form>
                </div>
            </div>
@endsection
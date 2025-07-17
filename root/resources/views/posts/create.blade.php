@extends('layout')

@section('content')
        <h3>新規作成</h3>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">タイトル</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">内容</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">投稿</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">戻る</a>
        </form>
@endsection
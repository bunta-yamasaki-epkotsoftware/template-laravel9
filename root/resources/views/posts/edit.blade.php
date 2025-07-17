@extends('layout')

@section('content')
        <h3>投稿編集</h3>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">タイトル</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">内容</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{$post->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-success">更新</button>
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary">戻る</a>
        </form>
@endsection
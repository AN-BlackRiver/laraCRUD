@extends('layout.main')
@section('content')
    <div>
    <form action="{{route('post.update', $post->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{$post->title}}" id="title" placeholder="Title" >
        </div>
        <div class="mb-3">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" placeholder="Content" >{{$post->content}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="text" name="image" class="form-control" value="{{$post->image}}" id="image" placeholder="Image" >
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
        <a href="{{route('post.index')}}" class="btn btn-danger">Назад</a>
    </form>
    </div>
@endsection

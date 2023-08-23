@extends('layout.main')
@section('content')
    <div>
        <h2>{{$post->id }}. {{$post->title}}</h2>
        <h2>{{$post->content}}</h2>
    </div>
    <div>
        <a href="{{route('post.edit', $post->id)}}" class="btn btn-success">Edit</a>
    </div>
    <div>
        <a href="{{route('post.index')}}" class="btn btn-danger">Back</a>
    </div>
    <div>
        <form action="{{route('post.delete', $post->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-primary">
        </form>
    </div>
@endsection

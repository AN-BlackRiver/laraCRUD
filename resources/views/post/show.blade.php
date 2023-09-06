@extends('layout.main')
@section('content')
    <div>
        <h2 class="mt-3"><strong>{{$post->title}}</strong></h2>
        <h3><em>{{$post->content}}</em></h3>
        <h3>{{$post->image}}</h3>
        <h3>{{$post->created_at}}</h3>

    </div>
    <div>
        <form action="{{route('post.delete', $post->id)}}" method="post">
            @csrf
            @method('DELETE')
        <a href="{{route('post.edit', $post->id)}}" class="btn btn-success">Edit</a>
        <a href="{{route('post.index')}}" class="btn btn-primary">Back</a>


            <input type="submit" value="Delete" class="btn btn-danger">
        </form>

    </div>

@endsection

@extends('layout.main')
@section('content')
<div>
    <a class="m-2 btn btn-success" href="{{route('post.create')}}">Add Post</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">content</th>
        <th scope="col">image</th>
        <th scope="col">likes</th>
        <th scope="col">is_published</th>
        <th scope="col">created_ad</th>
        <th scope="col">action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td>{{$post->content}}</td>
        <td>{{$post->image}}</td>
        <td>{{$post->likes}}</td>
        <td>{{$post->is_published}}</td>
        <td>{{$post->created_at}}</td>
        <td><a class="btn btn-warning">Edit</a></td>
    </tr>
    @endforeach

    </tbody>
</table>
@endsection

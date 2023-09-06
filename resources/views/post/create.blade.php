@extends('layout.main')
@section('content')
    <div>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
        </div>
        <div class="mb-3">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" placeholder="Content" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image" required>
        </div>
        <div class="mb-3">
            <label for="select">Tags</label>
            <select name="select" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
        <a href="{{route('post.index')}}" class="btn btn-danger">Назад</a>
    </form>
    </div>
@endsection

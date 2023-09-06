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
                <label for="category">Category</label>
                <select id="category" class="form-select" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tags">Tags</label>
                <select id="tags" class="form-select" name="tags[]" multiple>
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
            <a href="{{route('post.index')}}" class="btn btn-danger">Назад</a>
        </form>
    </div>
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = \request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);

        Post::create($data);
        return redirect()->route('post.index');
    }
}
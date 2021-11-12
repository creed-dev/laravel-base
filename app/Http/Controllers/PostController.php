<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

//        return view('post.index', compact('posts'));
//        $post = Post::find(4);
        $tag = Tag::find(1);
        dd($tag->posts);
//        $posts = Post::where('category_id', 2)->get();
//        dd($posts);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'text' => 'string'
        ]);

        $post = Post::create($data);

        return redirect()->route('posts.show', $post);
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'text' => 'string'
        ]);

        $post->update($data);

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }

}

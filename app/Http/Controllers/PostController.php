<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts', compact('posts'));
    }

    public function create()
    {
        $posts = [
            [
                'title' => 'Created#1 title',
                'text' => 'Created#1 text',
                'likes' => 1000,
                'is_published' => 1,
            ],
            [
                'title' => 'Created#2 title',
                'text' => 'Created#2 text',
                'likes' => 2000,
                'is_published' => 1,
            ],
            [
                'title' => 'Created#3 title',
                'text' => 'Created#3 text',
                'likes' => 3000,
                'is_published' => 1,
            ],
            [
                'title' => 'Created#4 title',
                'text' => 'Created#4 text',
                'likes' => 4000,
                'is_published' => 1,
            ],
            [
                'title' => 'Created#5 title',
                'text' => 'Created#5 text',
                'likes' => 5000,
                'is_published' => 1,
            ]
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }

        dump('created');
    }

    public function deleteAll()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            $post->delete();
        }

        dd('Posts is deleted');
    }

}

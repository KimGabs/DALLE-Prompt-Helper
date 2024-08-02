<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class PostController extends Controller
{
    public function index() {
        return view('posts.index', [
            'posts' => Post::take(5)->get()
        ]);
    }

    public function show($slug)
    {
        try {
            $post = Post::where('slug', $slug)->firstOrFail();
            return view('posts.show', compact('post'));
        } catch (ModelNotFoundException $e) {
            abort(404, 'Post not found');
        }
    }
}

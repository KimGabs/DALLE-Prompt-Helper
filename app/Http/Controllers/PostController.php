<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{   
    private function authorizePostUpdate(Post $post) {
        return auth()->user()->id === $post->user_id;
    }

    public function deletePost(POST $post) {
        if ($this->authorizePostUpdate($post)) {
            $post->delete();
        }         
        return redirect('/');
    }

    // Actual
    public function actuallyUpdatePost(Post $post, Request $request) {
        if ($this->authorizePostUpdate($post)) {
            return redirect('/');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        // Use strip_tags to avoid cross-site scripting (xss)
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $post->update($incomingFields);
        return redirect('/');
    }

    // Show Edit Screen
    public function showEditScreen(Post $post) {
        if ($this->authorizePostUpdate($post)) {
            return redirect('/');
        }
        return view('edit-post', ['post' => $post]);
    }

    // Create post
    public function createPost(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();
        Post::create($incomingFields);
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request) {
        // Validate input
        $data = $request->validate([
            'title' => ['required', 'string'],
            'content' => ['nullable', 'string'],
        ]);

        // Ensure slug exists, generate if missing
        $data['slug'] = $data['title'] ?? Str::slug($data['title']);

        // Create the post
        $post = Post::create($data);

        // Redirect properly using post ID
        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        // Validate input
        $data = $request->validate([
            'title' => ['required', 'string'],
            'content' => ['nullable', 'string'],
        ]);

        // Ensure slug exists, generate if missing
        $data['slug'] = $data['title'] ?? Str::slug($data['title']);

        $post->update($data);

        return redirect(
            route('posts.show', $post)
        );
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'description' => 'required',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Post::create([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post added successfully');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'sometimes|image',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $post->image);
            $imagePath = $request->file('image')->store('images', 'public');
            $post->image = $imagePath;
        }

        $post->name = $request->name;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        Storage::delete('public/' . $post->image);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}

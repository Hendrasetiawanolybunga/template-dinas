<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Menampilkan daftar post.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10); // Ambil data post terbaru dengan pagination
        return view('backend.posts.index', compact('posts'));
    }


    /**
     * Menampilkan form tambah post.
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Menyimpan post baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|in:news,announcement',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
            'category' => $request->category,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail post.
     */
    public function show(Post $post)
    {
        return view('backend.posts.show', compact('post'));
    }

    /**
     * Menampilkan form edit post.
     */
    public function edit(Post $post)
    {
        return view('backend.posts.edit', compact('post'));
    }

    /**
     * Menyimpan perubahan data post.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|in:news,announcement',
        ]);

        $imagePath = $post->image;
        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
            'category' => $request->category,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post berhasil diperbarui.');
    }

    /**
     * Menghapus post.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
        
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus.');
    }




    public function indexFrontend()
    {
        $posts = Post::latest()->paginate(10); // Ambil semua post, paginasi 10 per halaman
        return view('frontend.pages.news', compact('posts'));
    }

    public function showFrontend(Post $post) // Gunakan Route Model Binding
    {
        return view('frontend.pages.news_detail', compact('post'));
    }
}

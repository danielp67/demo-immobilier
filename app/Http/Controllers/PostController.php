<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Posts', [
            'posts' => Post::all()->toArray(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('New', [
            'categories' => Category::all()->toArray()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => 1,
            ]);

        return redirect()->route('posts.index')->with('success', 'Bien créé avec succès.');

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return Inertia::render('Detail', [
            'post' => Post::find($id)->toArray(),
            'categories' => Category::all()->toArray()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        return Inertia::render('Edit', [
            'post' => Post::find($id)->toArray(),
            'categories' => Category::all()->toArray()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, int $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        Post::find($id)->update(
            [
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id,
            ]);

        return redirect()->route('posts.index')->with('success', 'Bien modifié avec succès.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Post::find($id)->delete();

        return redirect()->route('posts.index')->with('success', 'Bien supprimé avec succès.');

    }
}

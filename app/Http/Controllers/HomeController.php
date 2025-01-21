<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::orderby("id", "desc")->get();
        return view("home", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ]);

        $post = new Post();
        $post->name = $request->name;
        $post->description = $request->description;

        $post->save();
        return redirect("/posts");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // $data = Post::findOrFail($id);
        // $post->categories;
        dd($post->categories->name);
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // $data = Post::findOrFail($id);
        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Post $post)
    {
        // $post = Post::findOrFail($id);;
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ]);
        $post->name = $request->name;
        $post->description = $request->description;

        $post->save();
        return redirect("/posts");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect("/posts");
    }
}

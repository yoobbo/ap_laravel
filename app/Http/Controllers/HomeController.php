<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\storePostRequest;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::where('user_id', auth()->id())->orderby("id", "desc")->get();
        return view("home", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $post = new Post();
        $post->name = $request->name;
        $post->description = $request->description;
        $post->category_id = $request->category;

        $post->save();

        // Post::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        // ]);
        return redirect("/posts");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // $data = Post::findOrFail($id);
        // $post->categories;
        // if($post -> user_id != auth()->id()){
        //     abort(403);
        // }
        $this->authorize('view', $post);
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // $data = Post::findOrFail($id);
        // if($post -> user_id != auth()->id()){
        //     abort(403);
        // }
        $this->authorize('view', $post);
        $categories = Category::all();
        return view('edit', compact('post'),compact('categories'));
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
            'category_id' => '$required',
        ]);
        $post->name = $request->name;
        $post->description = $request->description;
        $post->category_id = $request->category;

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

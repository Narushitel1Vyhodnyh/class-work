<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact("posts"));
    }

    public function create()
    {
        return view('post.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'title' => 'required',
           'text' => 'required',
           'image' => 'required|image|mimes:jpg,png,jpeg,bmp,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if($image = $request->file('image')) {
            $destionPath = 'images/';
            $profilImage = date('YmHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionPath,$profilImage);
            $input['image']="$profilImage";
        }

        Post::create($input);

        return redirect()->route('post.index')->with('success', 'Ваш пост был добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('post.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('success', 'Ваша запись была удалена');
    }
}

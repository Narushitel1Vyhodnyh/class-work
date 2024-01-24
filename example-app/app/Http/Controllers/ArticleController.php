<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact("articles"));
    }

    public function create()
    {
        return view('article.create');
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

        Article::create($input);

        return redirect()->route('article.index')->with('success', 'Ваш пост был добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article,)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $article)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);
        $input = $request->all();

        if($image = $request->file('image')) {
            $destionPath = 'images/';
            $profilImage = date('YmHis') . "." . $image->getClientOriginalExtension();
            $image->move($destionPath,$profilImage);
            $input['image']="$profilImage";
        }
        else {
            unset($input['image']);
        }

        $article->update($input);
        return redirect()->route('article.index')->with('success', 'Ваша запись успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index')->with('success', 'Ваша запись была удалена');
    }
}

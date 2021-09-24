<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        $categoryList = Category::all();
        $articleList = Article::paginate(6);
        return view('index', compact('categoryList', 'articleList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryList = Category::all();
        $tagList = Tag::all();
        return view('articles.createArticle', compact('categoryList', 'tagList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
            'picture' => 'nullable|url'
        ]);
        
        $article = New Article();

        $this->saveItemFromRequest($article, $request);
        return redirect()->route('articles.show', $article);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function saveItemFromRequest(Article $article, Request $request) {

        $data = $request->all();

        $article->title = $data['title'];
        $article->date = $data['date'];
        $article->subtitle = $data['subtitle'];
        $article->content = $data['content'];
        $article->picture = $data['picture'];
        $article->author_id = $data['author_id'];
        $article->category_id = $data['category_id'];
        $article->save();
    }
}

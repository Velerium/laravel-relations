@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

                <button class="newArticle"><a href="{{ route('articles.index')}}">See all articles</a></button>

            <div class="article">
                <div class="article-details">
                    <div>Written by: <h3>{{ $article->author->name }}</h3></div> 
                    <div>Category:<h3> {{ $article->category->name }}</h3></div> 
                    <div>Date of publishing:<h3>{{ $article->date }}</h3></div>
                </div>
                <h1>{{ $article->title }}</h1>
                <img src="{{ $article->picture }}" alt="">
                <p><?=nl2br($article->content)?></p> <!-- nl2br, my new best friend. -->

                <hr>
                
            </div>
        </div>
    </div>
</div>
@endsection
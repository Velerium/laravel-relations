@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Add some news</h1>

<form action="{{ route('articles.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title">
    </div> 

    <div class="form-group">
        <input type="hidden" class="form-control" name="date" id="date" value="2021-09-24">
    </div>

    <div class="form-group">
        <label for="subtitle">Subtitle</label>
        <input type="text" class="form-control" name="subtitle" id="subtitle">
    </div> 

    <div class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="category_id">Category</label>
            </div>
            <select class="custom-select" id="category_id" name="category_id">
                <option selected>Choose...</option>
                @foreach($categoryList as $category)
                    <option value="{{$category->id}}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea style="width: 100%; border-color: #ddd; border-radius: 5px; outline: none" name="content" id="content" cols="50" rows="10"></textarea>
    </div> 

    <div class="form-group">
        <label for="picture">Picture (optional)</label>
        <input type="text" class="form-control" name="picture" id="picture">
    </div>

    <div class="form-group">
        <input type="hidden" class="form-control" name="author_id" id="author_id" value=1>
    </div>

    <div class="form-group">
        <label for="tags">Tags</label>
        @foreach($tagList as $tag)
        <div>
            <input name="tags[]" type="checkbox" value="{{ $tag->id }}">
            <label>{{$tag->name}}</label>
        </div>
        @endforeach
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>

</form>
@endsection
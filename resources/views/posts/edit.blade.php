@extends('layouts.default')

@section('title', 'Modifica Post')
    


@section('page_header')

<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Aggiornamento Post</h1>
            
        </div>
    </div>
</header>
@endsection

@section('main_content')
    
    <form action="{{ route("posts.update", $post->id )}}" method="post">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title"
            value="{{ old('title') ?? $post->title}}">
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle"
            value="{{ old('subtitle') ?? $post->subtitle}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea type="text" class="form-control" id="content" name="content" rows="3"
            value="{{ old('content') ?? $post->content}}"></textarea>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">author</label>
            <input type="text" class="form-control" id="author" name="author"
            value="{{ old('author') ?? $post->author}}">
        </div>
        <div class="mb-3">
            <label for="coverImg" class="form-label">coverImg</label>
            <input type="text" class="form-control" id="coverImg" name="coverImg"
            value="{{ old('coverImg') ?? $post->coverImg}}">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">category</label>
            <input type="text" class="form-control" id="category" name="category"
            value="{{ old('category') ?? $post->category}}">
        </div>
          
        <div class="text-center">
            <button class="btn btn-dark" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Salva Modifiche</button>
        </div>
    </form>

@endsection
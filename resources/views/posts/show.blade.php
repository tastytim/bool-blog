@extends('layouts.default')

@section('title', 'Single Post')
    


@section('page_header')

<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Post</h1>         
        </div>
    </div>
</header>
@endsection

@section('main_content')

<div class="container">
    <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title">{{ $post->title}}</h3>
            <h5>{{ $post->subtitle}}</h5>
            <p class="card-text">{{ $post->content}}</p>
            <h6>{{ $post->author}}</h6>
            <h6>{{$post->category}}</h6>
            <form action="{{ route('posts.edit', $post->id)}}" method="get">
                @csrf
                <button type="submit" class="btn btn-warning">Modifica</button>
            </form>
            <form action="{{ route('posts.destroy', $post->id)}}" method="post" class="form-delete">
                @csrf
                @method('delete')
                <button type= "submit">Elimina</button>
            </form>
        </div>
      </div>
</div>

@endsection
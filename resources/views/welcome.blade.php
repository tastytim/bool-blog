@extends('layouts.default')


@section('title', 'Bool-Blog')

@section("page_header")
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to HomePage!</h1>
        </div>
    </div>
</header>
@endsection


@section("main_content")
<h2>Benvenuto sul blog di Boolean</h2>
<div><button class="btn btn-dark">
<a href={{route("posts.create")}}>Create Post</a></button></div>

@endsection

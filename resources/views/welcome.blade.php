@extends('layouts.default')


@section('title', 'Bool-Blog')

@section("page_header")
<h1>Header della pagina</h1>
@endsection


@section("main_content")
<h2>Benvenuto sul blog di Boolean</h2>
<div><button class="btn btn-dark">
<a href={{route("posts.create")}}>Create Post</a></button></div>

@endsection

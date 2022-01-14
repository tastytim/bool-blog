@extends("layouts.default")


@section("main_content")
<div class="container">
    <h1>Lista ricette</h1>
    <br>
    <div><button class="btn btn-dark">
<a href={{route("posts.create")}}>Create Post</a></button></div>
    <ul class="">
        @foreach($posts as $post)
        <li><a href="{{ route('posts.show', $post->id) }}">
                <div>
                    <img src="{{$post->coverImg}}">
                </div>
                <div>
                    <h2>
                        {{$post->title}}
                    </h2>

                </div>
                <div>
                    <h3>
                        {{$post->subtitle}}
                    </h3>

                </div>
            </a></li>
        @endforeach
    </ul>
</div>
@endsection

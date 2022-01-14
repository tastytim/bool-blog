@extend("layouts.default")


@section("main_content")
<div class="container">
    <h1>Lista ricette</h1>
    <br>
    <button><a href="{{route("posts.create")}}">Aggiungi nuova ricetta</button>
    <ul class="cards post_ricetta">
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
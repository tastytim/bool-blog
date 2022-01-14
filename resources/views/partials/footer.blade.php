@php
$footer_links = [
    [
        'social' => 'youtube',
        'route_name' => '#',
    ],
    [
        'social' => 'instagram',
        'route_name' => '#',
    ],
    [
        'social' => 'facebook',
        'route_name' => '#',
    ],
    [
        'social' => 'pinteres',
        'route_name' => '#',
    ],
    [
        'social' => 'tiktok',
        'route_name' => '#',
    ],
   
];
@endphp

<footer class="py-5 bg-success">

    <div class="container">
        <div class="d-flex">

            <div class="col-6 text-center">
                <div class="link-light">Find us around the web</div>
                <div class="d-flex justify-content-center">{{-- sezione dei social --}}
                        @foreach ($footer_links as $socialValue)
                           <a class="nav-link link-light" href="#">{{$socialValue['social']}}</a>
                        @endforeach
                </div>
            </div>
            <div class="col-6 text-center">

                <div class="link-light">Find more</div>
                <div class="d-flex justify-content-center">

                    <a class="nav-link link-light" href="{{route("posts.create")}}">Create</a>
                    <a class="nav-link link-light" href="#">Add</a>
                    <a class="nav-link link-light" href="{{route('home.index')}}">Home</a>
                    
                </div>
                {{-- collegamenti alle altre pagine --}}</div>

        </div>


        {{-- footer blog --}}
        <p class="m-0 text-center text-white">&hearts; GREEN TEAM BOOLEAN 2022 &hearts;</p>
    </div>
</footer>
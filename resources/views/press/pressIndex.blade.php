@extends("template.main")

@section('title', 'Press - ITBMUN 2020')

@section('content')

    @include('components.sidebar-main')
    
    <main>
        @include('components.navbar-top-main')
        
        <section class='press-hero' id='hero'>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <h1>Press</h1>
                </div>
            </div>
        </section>

        <section class='press-index' id='index'>
            @if(count($posts) > 0)
                @foreach ($posts as $post)
                <div class="post post-{{$post->id}}">
                    <div class='post-desc'>
                        <h2>{{$post->title}}</h2>
                        <div class='post-nav'>
                            <a class='button-white-transparent' href="/press/{{$post->id}}">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="press-navigation">
                    {{ $posts->links() }}
                </div>
            @else
                <p class='text-secondary'>No posts yet.</p>
            @endif

            
        </section>

        @include('components.footer-main')
    </main>

@endsection

@section('script')
<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script src="{{URL::asset('js/navigation.js')}}"></script>

@foreach ($posts as $post)
<script>
    document.querySelector(".post-{{$post->id}}").style.background = " linear-gradient(360deg, #000000 5%, rgba(50, 23, 64, 0.3) 75%), url({{$post->imgurl}}) no-repeat center center";
    document.querySelector(".post-{{$post->id}}").style.backgroundSize = "cover";
</script>    
@endforeach

@endsection

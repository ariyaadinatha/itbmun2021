@extends('template.main')

@section('title')
{{ $post->title }}
@endsection

@section('content')
@include('components.sidebar-main')
    
    <main>
        @include('components.navbar-top-main')
        
        <section class='post-hero post-bg' id='hero'>
            <div class='post-title'>
                <h1>{{$post->title}}</h1>
            </div>
        </section>

        <section class='post-content' id='content'>
            <div class='post-navigation-top'>
                <a href="/press">
                    &larr; BACK TO PRESS
                </a>
            </div>
            {!! $post->body !!}
        </section>

        <section class='post-metadata'>
            <p>Created At: {{$post->created_at}} WIB</p>
            <p>Updated At: {{$post->updated_at}} WIB</p>
        </section>

        @include('components.footer-main')
    </main>
@endsection

@section('script')
<script>
    document.querySelector(".post-bg").style.background = " linear-gradient(360deg, #000000 5%, rgba(50, 23, 64, 0.3) 75%), url({{$post->imgurl}}) no-repeat center center";
    document.querySelector(".post-bg").style.backgroundSize = "cover";
</script>   
@endsection
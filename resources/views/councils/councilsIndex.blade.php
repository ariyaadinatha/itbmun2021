@extends("template.main")

@section('title', 'Councils - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
<main>

<!-- ## 2. Sidebar Navigation ========= -->
    @include('components.navbar-top-main')
        
<!-- ## END of Sidebar Navigation ========= -->

<!-- ## 3. Councils Section ========= -->
    <section class='councils-hero' id='hero'>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h1>Councils</h1>
            </div>
        </div>
    </section>

    <section class="councils-body">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-12">
                <h2>Select one of the councils below</h2>
                <div class="councils-wrapper">
                    <a class="council" href='/councils/WHA'>
                        <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/WHA-white.png')}}">
                        <p>WHA</p>
                    </a>
                    <a class="council" href='/councils/UNEP'>
                        <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNEP-white-notext.png')}}">
                        <p>UNEP</p>
                    </a>
                    <a class="council" href='/councils/DISEC'>
                        <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/DISEC-white-text.png')}}">
                        <p>DISEC</p>
                    </a>
                    <a class="council" href='/councils/UNESCO'>
                        <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNESCO-white.png')}}">
                        <p>UNESCO</p>
                    </a>
                    <a class="council" href='/councils/CRISIS'>
                        <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/CRISIS-white.png')}}">
                        <p>CRISIS</p>
                    </a>
                    <a class="council" href='/councils/UNSC'>
                        <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNSC-white-text.png')}}">
                        <p>UNSC</p>
                    </a>
                    <a class="council" href='/councils/UNCA'>
                        <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNCA-white-notext.png')}}">
                        <p style='text-align:center'>UNCA PRESS</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
<!-- ## END of Councils ========= -->

<!-- ## 4. Footer Navigation ========= -->
        @include('components.footer-main')
<!-- ## END of Footer Navigation ========= -->

</main>
@endsection

<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script src="{{URL::asset('js/navigation.js')}}"></script>

@extends("template.main")

@section('title', 'Sponsors - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
<main>

<!-- ## 2. Sidebar Navigation ========= -->
@include('components.navbar-top-main')
        
<!-- ## END of Sidebar Navigation ========= -->


<style>
.councils-hero {
    background: linear-gradient(
            359.87deg,
            #000000 4.51%,
            rgba(50, 23, 64, 0.5) 85.49%
        ),
        url({{URL::asset('assets/sponsors/lia.png')}});
}
</style>
<section class='councils-hero' id='hero'>
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <h1>Sponsors</h1>
        </div>
    </div>
</section>

<section class="councils-body">
    <div class="row">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="about-paragraph text-justify">
                <h2>LEMBAGA BAHASA LIA</h2>
                    <div class="councils-wrapper">
                        <a class="council" href='#'>
                            <img src="{{URL::asset('assets/sponsors/lia.png')}}">
                        </a>
                    </div>
                <p>
                Lembaga Bahasa LIA is the biggest growing language institution in Indonesia. Founded in 1959 with only 40 students, LIA has grown to serve an average of 70,000 students per quarter.
                <br><br> With 70 branches spread throughout the archipelago, and numerous awards from various organizations — including the Indonesian government, LIA has been and will continue to be a leading language institution in the country.
                <br><br>
                For more information, visit <a href="https://lblia.com" style="color:blue;" target="_blank"> https://lblia.com </a> 
                </p>
            </div>
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

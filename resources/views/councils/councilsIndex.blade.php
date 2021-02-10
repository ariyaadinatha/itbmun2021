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
                <a class="council" href='/councils/UNSC/'>
                    <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/new/unsc.png')}}" >
                    <p>UNSC</p>
                </a>
                <a class="council" href='/councils/CRISIS/'>
                    <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/new/crisis.png')}}" >
                    <p>CRISIS</p>
                </a>
                <a class="council" href='/councils/UNCA/'>
                    <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/new/unca.png')}}" >
                    <p>UNCA</p>
                </a>
                <a class="council" href='/councils/UNW/'>
                    <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/new/unwomen.png')}}" >
                    <p>UN Women</p>
                </a>
                <a class="council" href='/councils/UNODC/'>
                    <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/new/unodc.png')}}" >
                    <p>UNODC</p>
                </a>
                <a class="council" href='/councils/WorldBank/'>
                    <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/new/worldbank.png')}}" >
                    <p>World Bank</p>
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

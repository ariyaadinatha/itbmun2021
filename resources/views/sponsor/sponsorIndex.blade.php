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

<!-- ## 3. Sponsor Section ========= -->
<section class='sponsors-hero' id='hero'>
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <h1>Sponsors</h1>
        </div>
    </div>
</section>
<section class="councils-body">
    <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
            <h2>Below are our sponsors</h2>
            <div class="councils-wrapper">
                <a class="council p-3" href='/sponsors/nutrifood/'>
                    <img src="{{URL::asset('assets/sponsors/nutrifood.png')}}" >
                </a>
                <a class="council p-3" href='/sponsors/lembaga-les-lia/'>
                    <img src="{{URL::asset('assets/sponsors/les.png')}}" >
                </a>
                <a class="council p-3" href='/sponsors/lembaga-penjamin-simpanan/'>
                    <img src="{{URL::asset('assets/sponsors/lps.png')}}" >
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

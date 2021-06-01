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
        url({{URL::asset('assets/sponsors/nutrifood.png')}});
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
                <h2>NUTRIFOOD</h2>
                    <div class="councils-wrapper">
                        <a class="council" href='#'>
                            <img src="{{URL::asset('assets/sponsors/nutrimart.png')}}">
                        </a>
                        <a class="council" href='#'>
                            <img src="{{URL::asset('assets/sponsors/lokalate.png')}}">
                        </a>
                    </div>
                <p>
                For 40 years, we have been committed to inspire and foster a healthy and joyful life, both physically and mentally, through our very own distinctive and premium brands: Tropicana Slim, NutriSari, WRP, L-Men, HiLo, and W’dank, as well as related services and programs. Founded in Semarang, Indonesia, Nutrifood has been distributing the products all across more than 30 countries.
                Entering the latter half of the 19th century, the continent of Africa remains one of the greatest mysteries to the world. Travellers and expeditions brought news of gold, timber, and rubber that can fuel the furnaces of industry in Europe. Seeing this opportunity, great powers of Europe seek to carve and colonize the lands of Africa. Set in 1880's. delegates will be debating on imperialism and division of the continent. Expect chaos as well as fiery debates as countries are competing to ensure their place in the sun. Will the past repeat itself or will the course of history change for Africa
                <br><br> 
                Our business is developed based on scientific knowledge. We believe prevention is better than cure, therefore through Nutrifood Research Center, together with the academic community, we shall continuously search for more knowledge and findings, in order to inspire healthier society by managing sugar, salt and fat intake (#BatasiGGL).
                <br><br>
                For more information, visit <a href="https://www.nutrifood.co.id/about-us/" target="_blank" style="color:blue;"> https://www.nutrifood.co.id/about-us/ </a>
                
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

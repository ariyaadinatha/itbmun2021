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
@include('components.council')

<style>
.councils-hero {
    background: linear-gradient(
            359.87deg,
            #000000 4.51%,
            rgba(50, 23, 64, 0.5) 85.49%
        ),
        url({{URL::asset('assets/councils/Crisis-BG.png')}});
}
</style>

    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="about-paragraph text-justify">
                <h2>CRISIS</h2>
                <p>
                <h2> Scramble for Africa: The start of imperialism and colonialism </h2>
                Entering the latter half of the 19th century, the continent of Africa remains one of the greatest mysteries to the world. Travellers and expeditions brought news of gold, timber, and rubber that can fuel the furnaces of industry in Europe. Seeing this opportunity, great powers of Europe seek to carve and colonize the lands of Africa. Set in 1880's. delegates will be debating on imperialism and division of the continent. Expect chaos as well as fiery debates as countries are competing to ensure their place in the sun. Will the past repeat itself or will the course of history change for Africa
                <br><br> This council is for you if:
                <br>    1. Creative minds digging their way through the chaos of the council
                <br>    2. Loves historical issues and most possibly change the course of history
                <br>    3. Devoted to a fast paced debate which consists of crisis updates, directives, etc.
                
                
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

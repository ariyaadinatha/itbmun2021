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
        url({{URL::asset('assets/councils/UNCA-BG.png')}});
}
</style>

    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="about-paragraph text-justify">
                <h2>UNCA</h2>
                <p>
                The United Nations Correspondents Association, commonly abbreviated as the UNCA, is a United Nations organization comprising over two hundred official media representatives worldwide with the prerogative to cover news from within the UN. Established in 1948, the UNCA is the representative body for the UN press corps. Regular members of the UNCA are invited to attend conferences held by other UN bodies and are tasked to make coverage on the proceedings of activities conducted by the UN.
                <br> <br>
                 This council is for you if :
                <br>    1. You are jack-of-all-trades (as you will enter various councils’ room during the MUN)
                <br>    2. Love to hear and write down ideas, even more than have speeches
                <br>    3. Become a legit journalist for international issues in 2-days (no matter where you’re from)
                <br>    4. Interested in producing articles from all councils and topics in ITBMUN 2021
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

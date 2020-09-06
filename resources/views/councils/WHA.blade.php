@extends("template.article")

@section('title', 'WHA - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-article')

<!-- ## END of Sidebar Navigation ========= -->
    
<main>

<!-- ## 2. Sidebar Navigation ========= -->
    @include('components.navbar-top-article')
<!-- ## END of Sidebar Navigation ========= -->

<!-- ## 3. Content ===================== -->
    <section class='council-container'>
        <div class="council-wrapper">
            <div class="council-header">
                <a href="/councils"><i class="fas fa-arrow-left"></i>&ensp;Councils</a>
                <h1 class='title'>WHA</h1>
            </div>
            <div class='council-image-container council-background-wha'>
                <img class='council-logo' src="{{URL::asset('assets/councils/councilLogos/Edited/White/WHA-white.png')}}">
            </div>
            <div class="council-content">
                <h1>
                    Gene Modification Revolution: Ethics & Safety Issue
                </h1>
                <p>
                    World Health Assembly (WHA) is a specialized legislative body inside the World Health Organization (WHO). It is joined by every Member States of WHO, represented by their respective health ministers. It holds an annual event at Geneva, Swiss in May to discuss several top health issues. The main functions of the World Health Assembly are to determine the policies of the Organization, appoint the Director-General, supervise financial policies, and review and approve the proposed program budget.
                </p>
                <p>
                    Healthcare evolution is an essential feature of human civilization, especially in today’s era of Industrial Revolution 4.0. One of the main usage of medication is preventing life-endangering disease. When the first vaccine (smallpox vaccine) was found in 1797, it became a groundbreaking event for preventive health research. Nowadays, those actions have taken another level on modifying the gene itself, creating higher health immunity of human beings. Although having undoubted benefits, researchers still question the justification of this conduct. Is gene modification equal to the creation of a new living being? How far can this project impact the world’s ecosystem? Which body should be responsible for supervising this operation? Under the mandate to create guidelines as a legislative body for international health issues, WHA in ITBMUN 2020 will discuss this topic to establish a framework for better healthcare development.
                </p>
            </div>
        </div>
    </section>
<!-- ## END of Content ================= -->

<!-- ## 4. Sidebar Navigation ========= -->
    @include('components.footer-article')
<!-- ## END of Sidebar Navigation ========= -->
</main>

@endsection

@section('script')
<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script src="{{URL::asset('js/navigation.js')}}"></script>
@endsection
@extends("template.article")

@section('title', 'UNSC - ITBMUN 2020')

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
                <h1 class='title'>UNSC</h1>
            </div>
            <div class='council-image-container council-background-unsc'>
                <img class='council-logo' src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNSC-white-text.png')}}">
            </div>
            <div class="council-content">
                <h1>
                    Exploitation of Outer Space: Addressing a new frontier of Warfare in 2020
                </h1>
                <p>
                    The United Nations Security Council is one of the six principal organs of the United Nations and is responsible for answering problems regarding international security. Its functions and powers are defined by chapter 5 of the UN charter. Its special powers include taking actions with respect to threats as explained in chapter 7 of the UN charter. This year's ITBMUN UNSC will take place in an alternate timeline of 2020
                </p>
                <p>
                    Conventions and treaties have for years, defined what we perceive as a just war. A simple example would be how the Fourth Geneva Convention had set the base for rights of non-combantats during armed conflicts. Even so, we often take these treaties and conventions for granted. On this year's ITBMUN, we invite delegates to imagine the what ifs and what could be. In particular, delegates will have to navigate a world in where the 1967 Outer Space Treaty was never created. How can the UNSC regulate this vast foreign region? Or was it never meant to be tamed?
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
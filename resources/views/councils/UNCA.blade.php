@extends("template.article")

@section('title', 'UNCA - ITBMUN 2020')

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
                <h1 class='title'>UNCA</h1>
            </div>
            <div class='council-image-container council-background-unca'>
                <img class='council-logo' src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNCA-white-notext.png')}}">
            </div>
            <div class="council-content">
                <h1>
                    Press Corps
                </h1>
                <p>
                    United Nation of Correspondents Association is a professional organization which brings together producers and correspondents from all over the world. Spreading the news, escalating issues and keeping people alert. They are also responsible for awarding excellence in the field of journalism.
                </p>
                <p>
                    In ITBMUN, we cherish the work of journalism and invite delegates to help amplify and criticize the works of each council, to fulfill the curiosity and highlight the discussions. This council will allow delegates to hone their journalistic skills.
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
@extends("template.main")

@section('title', 'Registration Policy - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
<main>

<!-- ## 2. Sidebar Navigation ========= -->
    @include('components.navbar-top-main')
        
<!-- ## END of Sidebar Navigation ========= -->

<!-- ## 3. Council Hero Section ========= -->
    <section class='registration-hero' id='hero'>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h1>Registration Policy</h1>
            </div>
        </div>
    </section>

    <section class="registration-body" id='body'>
        <div class="registration-wrapper">

            <div class="form-page is-active registration-card-wrapper" id='form-landing'>
                <a class='registration-form__delegate-choice delegate' onclick="individualDelegate()">
                    <h2>INDIVIDUAL DELEGATE</h2>
                </a>
                <a class='registration-form__delegate-choice delegation' onclick="delegation()">
                    <h2>DELEGATION</h2>
                </a>
            </div>

            <form action="/registration/individual-delegate" method="post" style="width: 100%;" class="validate">
            @csrf
                @include('registration.pages.individual-page-1')
                @include('registration.pages.individual-page-2')
                @include('registration.pages.individual-page-3')
                @include('registration.pages.individual-page-4')
            </form>

            <form action="/registration/delegations" method="post" style="width: 100%;" class="validate">
            @csrf
                @include('registration.pages.delegation-page-1')
                @include('registration.pages.delegation-page-2')
                @include('registration.pages.delegation-page-3')
                @include('registration.pages.delegation-page-4')
            </form>
        </div>
    </section>
<!-- ## END of Sidebar Navigation ========= -->

<!-- ## 4. Footer Navigation ========= -->
        @include('components.footer-main')
<!-- ## END of Footer Navigation ========= -->

</main>
@endsection

@section('script')
    <script src="{{URL::asset('js/nav-scroll.js')}}"></script>
    <script src="{{URL::asset('js/navigation.js')}}"></script>

    <script src="{{URL::asset('js/registration/dictionary.js')}}"></script>
    <script src="{{URL::asset('js/registration/pageController.js')}}"></script>
    <script src="{{URL::asset('js/registration/tabController.js')}}"></script>
    <script src="{{URL::asset('js/registration/validation.js')}}"></script>
@endsection
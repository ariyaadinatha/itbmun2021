@extends("template.main")

@section('title', 'Registration - ITBMUN 2020')

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
                <h1>Registration</h1>
            </div>
        </div>
    </section>



<!-- ## 3. Council Hero Section ========= -->
    <section class="registration-information" id='body'>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12 mt-5">
                <h1>Resilience in Face of a Changing Global Landscape
                    Virtually <br> on the 28th - 30th May 2021 <br>&mdash;</h1>
                    <b> Regular Registration 1st - 31st March or until the slot is full</b>
                <div class="info-row">
                    <div class="info-column">
                        <h2>National Delegate</h2>
                        <ul>
                            <li><b><big>Single</big></b> : 135k</li>
                            <br>

                            <li><b><big>Delegation</big></b></li>
                            <ol>
                                <ul>
                                    <li><b> 5 Pack:</b> 625k</li>
                                    <li><b>8 Pack:</b> 1000k</li>
                                </ul>
                            </ol>
                        </ul>
                    </div>
                    <div class="info-column">
                        <h2>International Delegate</h2>
                        <ul>
                            <li><b><big>Single</big></b> : $13USD</li>
                            <br>

                            <li><b><big>Delegation</big></b></li>
                            <ol>
                                <ul>
                                    <li><b> 5 Pack:</b> $60USD</li>
                                    <li><b>8 Pack:</b> $96USD</li>
                                </ul>
                            </ol>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12 mt-5">
            <h1>Questions or Inquiries<br>&mdash;</h1>
            <div class="info-row">
                <div class="info-column">
                    <ul>
                        <li><b><big>DM Instagram</big></b> : @itbmun </li>
                        <li><b><big>Email</big></b> : itbmodelunitednations@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ## END of Sidebar Navigation ========= -->

<!-- ## 3. Council Hero Section ========= -->



    <section class="registration-body" id='body'>
        <div class="registration-wrapper">

            <div class="form-page is-active registration-card-wrapper" id='form-landing'>
                <!-- Ganti link ke gform disini, jangan lupa pakai https -->
                <a class='registration-form__delegate-choice delegate' target="_blank" href="http://bit.ly/ITBMUNRegular">
                    <h2>INDIVIDUAL DELEGATE</h2>
                </a>
                <a class='registration-form__delegate-choice delegation' target="_blank" href="http://bit.ly/ITBMUNDelegation">
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

<section class="councils-body">
    <div class="row">
        <div class="col-md-8 offset-md-2 col-12">
            <h2>Media Partner</h2>
            <div class="councils-wrapper">
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/1.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/2.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/3.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/4.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/5.png')}}" >
                </a>
            </div>
        </div>
        <div class="col-md-8 offset-md-2 col-12">
            <div class="councils-wrapper">
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/6.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/7.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/8.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/9.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/10.png')}}" >
                </a>
            </div>
        </div>
        <div class="col-md-8 offset-md-2 col-12">
            <div class="councils-wrapper">
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/11.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/12.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/13.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/14.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/15.png')}}" >
                </a>
            </div>
        </div>
        <div class="col-md-8 offset-md-2 col-12">
            <div class="councils-wrapper">
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/16.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/17.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/18.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/19.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/20.png')}}" >
                </a>
                <a class="council" href='#'>
                    <img src="{{URL::asset('assets/medpar/21.png')}}" >
                </a>
            </div>
        </div>
    </div>
</section> 

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
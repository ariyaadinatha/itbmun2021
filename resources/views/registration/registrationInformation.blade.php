@extends("template.main")

@section('title', 'Registration Information - ITBMUN 2020')

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
            <div class="col-12 col-lg-8 offset-lg-2">
                <h1>Registration Information</h1>
            </div>
        </div>
    </section>

    <section class="registration-information" id='body'>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12 mb-5">
                <h1>Delegation FAQ <br> &mdash;</h1>
                <div class="info-row">
                    <div class="info-column">
                        <h2>What's a Delegation?</h2>
                        <p>A delegation in ITBMUN is a team either 5 or 8 delegates by default</p>
                        <p>
                            However, those who wish to register for a different configuration of delegates,
                            you can send us an <a href="mailto:itbmodelunitedconference@gmail.com"><u>email</u></a> with the following format: 
                        </p>
                        <p style="margin-bottom: 0rem;">
                            <b>Subject:</b> ITBMUN20_DelegationRegis<br>
                            <b>Body Email:</b>
                            <ol>
                                <li>Delegation's Name</li>
                                <li>Delegation's Institution</li>
                                <li>Number of Delegates</li>
                            </ol>
                        </p>
                    </div>
                    <div class="info-column">
                        <h2>Why Delegation?</h2>
                        <ol>
                            <li>
                                <b><big>You'll get a special price!</big></b><br>
                                Check the fees below
                            </li>
                            <li>
                                <b><big>You are eligible to compete for the best delegation award!</big></b><br>
                                The more delegates' in one delegation, the bigger is the chance to win this particular award. The more, the merrier indeed
                            </li>
                        </ol>

                        <h2>How to register as a Delegation to ITBMUN?</h2>
                        <ol>
                            <li>
                                Every member of the delegation has to choose the same accommodation package. it should be either Full Accommodation Package or Non Accommodation Package
                            </li>
                            <li>
                                If your delegation is either composed of 5 or 8 delegates, please proceed to register through <a href="/registration"><u>this link</u></a>, else, send us an email!
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12 mt-5">
                <h1>Accommodation Packages <br> &mdash;</h1>
                <div class="info-row">
                    <div class="info-column">
                        <h2>Individual Delegate</h2>
                        <ul>
                            <li><b><big>Non-Accommodation</big></b></li>
                            <ol>
                                <li>Meals throughout the course of the event, excluding dinner</li>
                                <li>Meeting Packages</li>
                                <li>Non-Accommodation fee:</li> 
                                    <ul>
                                        <li><b>International Delegate:</b> US$65,00</li>
                                        <li><b>National Delegate:</b> Rp865.000,00</li>
                                    </ul>
                            </ol><br>

                            <li><b><big>Full-Accommodation</big></b></li>
                            <ol>
                                <li>A shared hotel room with another person for 3 days and 2 nights (January 31 &ndash; February 2, 2020)</li>
                                <li>Breakfast and dinner in supplementary to the meals provided during the course of the event</li>
                                <li>Airport / Train Station pick-up and drop-off</li>
                                <li>Meeting Packages</li>
                                <li>Accommodation fee:</li> 
                                    <ul>
                                        <li><b>International Delegate:</b> US$122,00</li>
                                        <li><b>National Delegate:</b> Rp1.660.000,00</li>
                                    </ul>
                            </ol>
                        </ul>
                    </div>
                    <div class="info-column">
                        <h2>Delegation</h2>
                        <ul>
                            <li><b><big>5 Delegates Team</big></b></li>
                            <ol>
                                <li><b>National Delegation</b></li>
                                <ul>
                                    <li>Full-Accommodation: Rp8.200.000,00</li>
                                    <li>Non-Accommodation: Rp4.250.000,00</li>
                                </ul>
                                <li><b>International Delegation</b></li>
                                <ul>
                                    <li>Full-Accommodation: US$600,00</li>
                                    <li>Non-Accommodation: US$310,00</li>
                                </ul>
                            </ol><br>

                            <li><b><big>8 Delegates Team</big></b></li>
                            <ol>
                                <li><b>National Delegation</b></li>
                                <ul>
                                    <li>Full-Accommodation: Rp13.080.000,00</li>
                                    <li>Non-Accommodation: Rp6.760.000,00</li>
                                </ul>
                                <li><b>International Delegation</b></li>
                                <ul>
                                    <li>Full-Accommodation: US$940,00</li>
                                    <li>Non-Accommodation: US$490,00</li>
                                </ul>
                            </ol><br>
                        </ul>
                    </div>
                </div>
            </div>
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
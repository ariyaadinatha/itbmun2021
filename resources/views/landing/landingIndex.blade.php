@extends("template.main")
<!--
 *  CONTENTS
 * ============================
 * ## 1. <Sidebar Navigation>
 * ## 2. <Navigation Top>
 * ## 3. Hero Section
 *       |_ <#remark>
 * ## 4. Venue Section
 * ## 5. Remark Section
 *       |_ <Secgen ITBMUN 2020>
 *       |_ <Secgen ITBMUN 2019>
 *       |_ <GMUNC>
 * ## 6. Councils Section
 * ## 7. Support Section
 *       |_ <Sponsors>
 *       |_ <Media Partners>
 *       |_ <Other MUN>
-->

@section('title', 'Landing - ITBMUN 2020')



@section('content')
<!-- ## 1. Sidebar Navigation ========= -->
    @include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->


    <main>
<!-- ## 2. Sidebar Navigation ========= -->
        @include('components.navbar-top-landing')

<!-- ## END of Sidebar Navigation ========= -->

<!-- ## 3. Main Hero Section ========= -->



        <section class='main-hero' id='hero'>
            <div class="main-hero-container row">
                <div class="col-12">
                </div>


                



                <!-- Ditutup Dulu karena belom keluar tanggal fixnya 
                <h2>
                    January 31 &ndash; February 2, 2020<br>
                    <b>Bandung, Indonesia</b>
                </h2>

                <div class="col-md-10 col-lg-8 col-12 main-hero-content">
                    <p class='interlude'>Ommiting the Void:</p>
                    <h1 class='grand-theme'>
                        Bridging the<br>
                        multipolar universe<br>
                        through technology
                    </h1>
                </div>


                <div class="col-md-2 col-lg-4 col-12 scroll-down">
                    <p>
                        <a href="#remark">Learn More&emsp;<i class="fas fa-arrow-down"></i></a>
                    </p>
                </div>
                    -->


            </div>
        </section>

    <section class='main-registration'>
        <div class="row">
            <div class="col-md-8 offset-md-2 col-12">
                <h1>
                    REGISTRATION<br>
                    &mdash;
                </h1>
                <div class="main-registration-wrapper">
                    <a href='https://bit.ly/ITBMUNEarlyBird' target="_blank" class="main-registration-card">
                        <div class="bg-register">
                            <h2>Early Bird Registration&emsp;<br><i class="fas fa-long-arrow-alt-right"></i></h2>
                        </div>
                    </a>
                </div>
                </h1>
            </div>
        </div>
    </section>

    <section class="about-body">
        <section class="about-wrapper">
            <div class="about-content">
                <div class="about-image">
                </div>

                <div class="about-paragraph">
                    <h2>LOGO AND THEME REVEAL</h2>
                    <p>
                        In the modern era, nothing in our world is ever certain. We experience far greater changes in our world than ever before, from the change in climate, economic downturns, to cultural reforms. Challenges in our time has threatened the function, survival, and future development of our world. The time has come for us to adapt and integrate in the midst of adversity. Prepare, delegates, to a once in a lifetime journey ; 
                    </p>
                    <p> "ITBMUN 2021 : Resilience in Face of a Changing Global Landscape" </p>
                    <p> #HarmonyInDiplomacy <br> #ITBMUN #ITBMUN2021 </p>
                </div>
            </div>
        </section>
    </section>





    <section class="councils-body">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-12">
                <h2> ITBMUN Values </h2>
                <div class="councils-wrapper">

                    <div class="popup">
                        <img src="{{URL::asset('assets/values/memorable.png')}}" onclick="popupUp('myPopup1')">
                        <span class="popuptext" id="myPopup1">through a series of event and projects, ITBMUN 2021 is one of a kind Model UN worth experiencing</span>
                    </div>

                    <div class="popup">
                        <img src="{{URL::asset('assets/values/sustainable.png')}}" onclick="popupUp('myPopup2')">
                        <span class="popuptext" id="myPopup2">a conference made to care for the environment</span>
                    </div>

                    <div class="popup">
                        <img src="{{URL::asset('assets/values/professional.png')}}" onclick="popupUp('myPopup3')">
                        <span class="popuptext" id="myPopup3">organized team in constant pursuit of excellence</span>
                    </div>

                    <div class="popup">
                        <img src="{{URL::asset('assets/values/exceptional.png')}}" onclick="popupUp('myPopup4')">
                        <span class="popuptext" id="myPopup4">distinguished academics quality providing excellent substance</span>
                    </div>

                    <div class="popup">
                        <img src="{{URL::asset('assets/values/personal.png')}}" onclick="popupUp('myPopup5')">
                        <span class="popuptext" id="myPopup5">growth in skill development in every step of the way</span>
                    </div>

                    <div class="popup">
                        <img src="{{URL::asset('assets/values/inclusive.png')}}" onclick="popupUp('myPopup6')">
                        <span class="popuptext" id="myPopup6">alongside our community, we hope each individual involved in ITBMUN 2021 are exposed to numbers of opportunities regardless of their background</span>
                    </div>

                    <div class="popup">
                        <img src="{{URL::asset('assets/values/realistic.png')}}" onclick="popupUp('myPopup7')">
                        <span class="popuptext" id="myPopup7">dynamic committee sessions with realistic approach</span>
                    </div>


                </div>
            </div>
        </div>
    </section>

    

                    



<!-- ## END of Main Hero Section ========= -->

<!-- ## 4. Main Venue Section ========= -->
  <!-- Ditutup Dulu karena belom keluar tanggal fixnya
    <section class='main-intro'>
        <div class="main-intro-wrapper">
            <h1>
              <a href="" class="typewrite" data-period="2000" data-type='[ "Coming Soon...", "Open Recruitment..." ]'>
                <span class="wrap"></span>
              </a>
            </h1>

            Ditutup Dulu karena belom keluar tanggal fixnya
            <h2>
                January 31 &ndash; February 2, 2020<br>
                <b>Bandung, Indonesia</b>
            </h2>

            <p>
                ITB MUN once again calls upon you to bridge this multipolar world in which we live in, are you up for the challange, delegate?
            </p>

        </div>
    </section> -->

    <!-- ## Dihilangin dulu ========= -->



     <!-- ## Dihilangin dulu ========= 

    <section class='main-venue'>
        <div class="row">
            <div class="col-md-8 offset-md-2 col-12">
                <h1>
                    VENUE<br>
                    &mdash;
                </h1>
                <div class="main-venue-wrapper">
                    <div class="main-venue-image"></div>
                    <div class="main-venue-content">
                        <h2>
                            Courtyard Marriott

                        </h2>
                        <div>
                            <p>Strategically placed in the heart of the city, Courtyard Bandung Dago offers contemporary accommodation in a vibrant travel destination.</p>
                            <p>Jl. Ir. H. Juanda No.33, Tamansari, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40116</p>
                            <a href="/landing/hotel" class='button-white-transparent' target="_blank">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



<!-- ## END of Main Venue Section ========= -->

<!-- ## 5. Main Remark Section ========= #dihilangin dulu
        <section class='main-remark' id='remark'>
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2">
                    <h1>REMARKS<br>&mdash;</h1> -->

                    <!-- # START Remark from Secgen ITBMUN 2020 
                    <div class='remark-card remark-bg-itbmun2020'>
                        <div class='remark-card-summary'>
                            <p>
                            Our goal this year is to preserve the culture of bridging science and social studies through technology-based events and highly relatable conference topics...
                            </p>
                        </div>
                        <div class='remark-card-footer'>
                            <p>
                                <big><b>Angelica Wiliana</b></big><br>
                                Secretary General of ITBMUN 2020
                            </p>
                            <a class='button-white-transparent' href="/remark/secgen2020">Read</a>
                        </div>
                    </div> -->
                    <!-- # END of Secgen ITBMUN 2020 -->

                    <!-- # START Remark from Secgen GMUNC 
                    <div class='remark-card remark-bg-gmunc'>
                        <div class='remark-card-summary'>
                            <p>
                                ITB MUN is a project initiated 4 years ago fueled by a dream to deliver a MUN with the best quality we can deliver...
                            </p>
                        </div>
                        <div class='remark-card-footer'>
                            <p>
                                <big><b>Hanif Alfada</b></big><br>
                                Secretary General of GMUNC
                            </p>
                            <a class='button-white-transparent' href='/remark/secgenGMUNC'>Read</a>
                        </div>
                    </div> -->
                    <!-- # END of Secgen Secgen GMUNC 
                </div>
            </div>
        </section> -->
<!-- ## END of Main Remark Section ========= -->

<!-- ## 6. Main Councils Section ========= 
        <section class="main-councils">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-12">
                    <h1>
                        COUNCILS<br>
                        &mdash;
                    </h1>
                    <div class="main-councils-wrapper">
                        <a class="council" href='/councils/WHA'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/WHA-white.png')}}">
                            <p>WHA</p>
                        </a>
                        <a class="council" href='/councils/UNEP'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNEP-white-notext.png')}}">
                            <p>UNEP</p>
                        </a>
                        <a class="council" href='/councils/DISEC'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/DISEC-white-text.png')}}">
                            <p>DISEC</p>
                        </a>
                        <a class="council" href='/councils/UNESCO'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNESCO-white.png')}}">
                            <p>UNESCO</p>
                        </a>
                        <a class="council" href='/councils/CRISIS'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/CRISIS-white.png')}}">
                            <p>CRISIS</p>
                        </a>
                        <a class="council" href='/councils/UNSC'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNSC-white-text.png')}}">
                            <p>UNSC</p>
                        </a>
                        <a class="council" href='/councils/UNCA'>
                            <img src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNCA-white-notext.png')}}">
                            <p style='text-align:center'>UNCA PRESS</p>
                        </a>
                    </div>
                </div>
            </div>
        </section> -->
<!-- ## END of Main Councils Section ========= -->

<!-- ## 7. Main Supports Section =========
        <section class='main-supports'>
            <div class="row">
                <div class="col-md-8 offset-md-2 col-12">
                    <h1>
                        SUPPORTS<br>
                        &mdash;
                    </h1>
                        <div class="main-supports-wrapper">
                            <a href='#' class="main-support-card">
                                <div class="bg-sponsors">
                                    <h2>SPONSORS&emsp;<br><i class="fas fa-long-arrow-alt-right"></i></h2>
                                </div>
                            </a>
                            <a href='#' class="main-support-card bg-medpar">
                                <div class="bg-medpar">
                                    <h2>MEDIA PARTNERS&emsp;<br><i class="fas fa-long-arrow-alt-right"></i></h2>
                                </div>
                            </a>
                            <a href='#' class="main-support-card bg-others">
                                <div class="bg-others">
                                    <h2>OTHER MUN&emsp;<br><i class="fas fa-long-arrow-alt-right"></i></h2>
                                </div>
                            </a>
                        </div>
                    </h1>
                </div>
            </div>
        </section>
     ## END of Main Supports Section ========= -->

<!-- ## 8. Footer Navigation ========= -->
        @include('components.footer-main')
<!-- ## END of Footer Navigation ========= -->

    </main>
@endsection


<script>
// When the user clicks on div, open the popup
function popupUp(param1) {
  var popup = document.getElementById( param1 );
  popup.classList.toggle("show");
}
</script>

@section('script')

<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script src="{{URL::asset('js/navigation.js')}}"></script>



@endsection

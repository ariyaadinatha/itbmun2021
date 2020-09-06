@extends("template.main")

@section('title', 'About - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
<main>

<!-- ## 2. Sidebar Navigation ========= -->
    @include('components.navbar-top-main')
        
<!-- ## END of Sidebar Navigation ========= -->

<!-- ## 3. Council Hero Section ========= -->
    <section class='about-hero' id='hero'>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h1>About</h1>
            </div>
        </div>
    </section>

    <section class="about-body">
        <section class="about-wrapper">
            <div class="about-content">
               
                    <img class="about-image" src="{{URL::asset('assets/logo/itbmun2020-logo.png')}}">
                
                <div class="about-paragraph">
                    <h2>
                        About ITBMUN
                    </h2>
                    <p>
                        ITB Model United Nations convened for its first session three years ago. The first ITB MUN had 2 councils, and it grew in size in its second session growing to 4 councils. The ITB MUN held in February 2019 developed even more, not only in size but also in terms of service, organizational and academic quality, and council variety by introducing the press into its councils, growing to 6 councils and 175 delegates, with delegates coming from over 24 different institutions across Indonesia.
                    </p>
                    <p>
                        In 2021 ITB MUN will once again reconvene for its 5th annual session, presenting an even broader variety of councils, and set to be its best iteration yet.
                    </p>
                </div>
            </div>
            <div class="about-content">
                <div class="about-image">
                    
                </div>
                <div class="about-paragraph">
                    <h2>
                        About GMUNC
                    </h2>
                    <p>
                        Ganesha Model United Nations Club (GMUNC) is Institut Teknologi Bandung's official MUN club. GMUNC was founded with the primary objective of providing a development platform for its members; honing skills such as public speaking, critical thinking, negotiation, and promoting diplomacy above all.
                    </p>
                    <p>
                        GMUNC regularly sends its delegates in MUNs both in Indonesia and abroad. It also organizes a distinguished MUN in Indonesia: ITBMUN. GMUNC is proud to present you with ITBMUN 2020, which is designed to provide good academic quality, and excellent overall experience.
                    </p>
                </div>
            </div>
        </section>
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
@endsection
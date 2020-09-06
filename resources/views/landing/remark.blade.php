@extends("template.main")

@section('title', 'Remark - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
<main>

<!-- ## 2. Sidebar Navigation ========= -->
    @include('components.navbar-top-main')
        
<!-- ## END of Sidebar Navigation ========= -->

<!-- ## 3. Remark Hero Section ========= -->
    <section class='remark-hero' id='hero'>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h1>Remarks</h1>
            </div>
        </div>
    </section>
<!-- ## END of Remark Hero ========= -->
    
<!-- ## 4. Remark Content Section ========= -->
    <section class="remark-body">
        <nav class="remark-nav">
            <ul>
                <li id="secgen2020-nav"><a href="#secgen2020">Secretary General of ITBMUN 2020</a></li>
                <li id="gmunc-nav"><a href="#secgenGMUNC">Secretary General of GMUNC</a></li>
            </ul>
        </nav>
        <div class="remark-wrapper">
            <div class="remark-content" id="secgen2020">
                <div class="remark-image">
                    <img src="{{URL::asset('assets/remarkPage/remarkAngel.png')}}">
                </div>
                <div class="remark-paragraph">
                    <p>
                        <b>Greetings fellow Delegates, Chairs, Ladies and Gentlemen.</b>
                    </p>
                    <p>
                        It's my utmost pleasure to welcome you to ITBMUN 2020. My name is Angelica Wiliana, a bioengineering student of batch 2018 Bandung Institute of Technology.
                    </p>
                    <p>
                        After years of experience in the MUN realm, it's truly an honor to serve you as this year's Secretary General of ITBMUN. Our goal this year is to preserve the culture of bridging science and social studies through technology-based events and highly relatable conference topics while striving to provide inclusive learning environment through objective asessment method. All of the mentioned are of the effort to express our zeal to provide a constructive educational platform and a memorable experience for everyone regardless of their role in ITBMUN.
                    </p>
                    <p>
                        Personally speaking, my favorite part of every MUN conference is the chance of making friends and being immersed into dynamic debates. I hope that ITBMUN can do you right on this one !
                    </p>
                    <p>
                        Finally, on behalf of the Secretariat, we hope that your adventure here is not only a just war of brain and manners, but an everlasting experience to cherish by the bonds that we'll form together. See you in ITBMUN 2020 !
                    </p>
                    <p class='remark-signature'>
                        Sincerely,<br>
                        Angelica Wiliana<br>
                        <img src="{{URL::asset('assets/remarkPage/signature-angel-white.png')}}"><br>
                        Secretary General of ITBMUN 2020
                    </p>
                </div>
            </div>
            <div class="remark-content" id="secgenGMUNC">
                <div class="remark-image">
                    <img src="{{URL::asset('assets/remarkPage/remarkHanif.png')}}">
                </div>
                <div class="remark-paragraph">
                    <p>
                        <b>Welcome delegates!</b>
                    </p>
                    <p>
                        My name is Hanif Alfada, Secretary General of ITB's MUN club, and i am proud to announce that Ganesha Model United Nations Club (GMUNC) Institut Teknologi Bandung will now be hosting the 4th ITB MUN.
                    </p>
                    <p>
                        ITB MUN is a project initiated 4 years ago fueled by a dream to deliver a MUN with the best quality we can deliver. Over the course of the 4 years ITB MUN has rapidly developed, growing not just in size but also quality; constantly seeking new boundaries, only to break through them.
                    </p>
                    <p>
                        Bringing the theme of technology and diplomacy, ITB MUN is a manifestation of ITB's students, especially its MUN club, which tries to show how the advancement of technology and the unravelment of the world stage are highly intertwined. Presenting a broad array of topics, ITB MUN also tries to as inclusive as possible for delegates from varying backgrounds.
                    </p>
                    <p class='remark-signature'>
                        Sincerely,<br>
                        Hanif Alfada<br>
                        <img src="{{URL::asset('assets/remarkPage/signature-hanif-white.png')}}"><br>
                        Secretary General of GMUNC
                    </p>
                </div>
            </div>
        </div>
    </section>
<!-- ## END of Remark Content ========= -->

<!-- ## 4. Footer Navigation ========= -->
        @include('components.footer-main')
<!-- ## END of Footer Navigation ========= -->

</main>
@endsection

@section('script')
    <script src="{{URL::asset('js/nav-scroll.js')}}"></script>
    <script src="{{URL::asset('js/navigation.js')}}"></script>

    <script src="{{URL::asset('js/remark/nav-active.js')}}"></script>

    @if($getString == "secgen2020")
    <script>
        document.querySelector("#secgen2020-nav").classList.add("is-active");
        document.querySelector("#secgen2020").classList.add("is-active");
    </script>
    @else
    <script>
        document.querySelector("#gmunc-nav").classList.add("is-active");
        document.querySelector("#secgenGMUNC").classList.add("is-active");
    </script>
    @endif

@endsection
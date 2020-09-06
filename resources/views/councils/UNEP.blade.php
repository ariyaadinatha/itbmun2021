@extends("template.article")

@section('title', 'UNEP - ITBMUN 2020')

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
                <h1 class='title'>UNEP</h1>
            </div>
            <div class='council-image-container council-background-unep'>
                <img class='council-logo' src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNEP-white-notext.png')}}">
            </div>
            <div class="council-content">
                <h1>
                    Improving E-Waste Management
                </h1>
                <p>
                    The United Nations Environment Programme was established following the 1972 UN Conference on Human Environment along with Stockholm Declaration. As the leading environmental authority in the UN system, UNEP sets technical mechanism that concern environment and promotes the implementation of environment-friendly development in regional and international level. UNEP's work activities composed of seven areas; climate change, disasters and conflicts, ecosystem management, environmental governance, environment under review, harmful substances, and resource efficiency.
                </p>
                <p>
                    The fast-paced development of technology in this era is just like a double-edged knife. On one hand, it makes our daily activities become easier to be done. It boosts our economy as well as opens up more ways for us to be connected. On the other hand, it gives threats to another aspect of our lives. One of them is the environment. The growing use of technology means more electric and electronic equipment being produced. It will lead to more electronic waste being dumped. Also adding the fact that there are some parts of these equipment that could cause fire or even explosion if treated the wrong way only makes these electronic waste even more dangerous to be left without a proper management. In this year's ITBMUN, we would like to ask delegates to address this problem and figure out what measures could be done to tackle this problem, as the UNEP.
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
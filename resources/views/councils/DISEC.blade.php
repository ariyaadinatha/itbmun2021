@extends("template.article")

@section('title', 'DISEC - ITBMUN 2020')

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
                <h1 class='title'>DISEC</h1>
            </div>
            <div class='council-image-container council-background-disec'>
                <img class='council-logo' src="{{URL::asset('assets/councils/councilLogos/Edited/White/DISEC-white-text.png')}}">
            </div>
            <div class="council-content">
                <h1>
                    Further Regulation of Arms Trade
                </h1>
                <p>
                    The Disarmament and International Security Committee is the First Committee of the United Nations General Assembly. This Committee deals with disarmament and other issues that pose threat to global security. All member states of the UN are also member of DISEC as it is part of the UN General Assembly. The First Committee has the privilege of raising agendas for the General Assembly and appointing special ad hoc bodies.
                </p>
                <p>
                    Since its adoption on 2013, the Arms Trade Treaty has set general standards for the international trade of conventional weapons. This treaty aims to reduce the illicit arms trade, provide more secure and responsible arms transfer, and promote transparency of state parties on the trade of conventional arms. However, this treaty has been hindered from working to its full capacity. The world's most important arms importers and exporters—such as China, Russia, India, and Egypt—voted abstained to this treaty and many existing loopholes within the treaty to name a few. This year, ITBMUN would like to invite delegates to address this matter with the goal of finding more comprehensive regulation of global arms trade.
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
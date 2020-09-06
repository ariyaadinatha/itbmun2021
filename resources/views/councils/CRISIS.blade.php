@extends("template.article")

@section('title', 'CRISIS - ITBMUN 2020')

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
                <h1 class='title'>CRISIS</h1>
            </div>
            <div class="council-image-container council-background-crisis">
                <img class='council-logo' src="{{URL::asset('assets/councils/councilLogos/Edited/White/CRISIS-white.png')}}">
            </div>
            <div class="council-content">
                <h1>
                    The Start of the Modern Era: 2nd Industrial Revolution
                </h1>
                <p>
                    Early 19th century, the world just witnessed how effective a production line can be. With the power of electricity and assembly line production, mass production had never been this cheap and bountiful. Thus, the Second Industrial Revolution began. England spearheaded such massive innovation and all the stride forward came with a price to pay. Workers were treated poorly in the workplace, children were forced to work from 7 AM to 9 PM, and the people’s overall welfare went down the drain. The British Parliament was now faced with a crossroad: halt progress for a reform on worker rights or march onward to stay ahead in this race of industrial innovation.
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
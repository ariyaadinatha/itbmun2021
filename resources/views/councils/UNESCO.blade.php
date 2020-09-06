@extends("template.article")

@section('title', 'UNESCO - ITBMUN 2020')

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
                <h1 class='title'>UNESCO</h1>
            </div>
            <div class='council-image-container council-background-unesco'>
                <img class='council-logo' src="{{URL::asset('assets/councils/councilLogos/Edited/White/UNESCO-white.png')}}">
            </div>
            <div class="council-content">
                <h1>
                    Globalization & Its Role in the Preservation of Traditional Culture
                </h1>
                <p>
                    UNESCO is the United Nations Educational, Scientific and Cultural Organization. It seeks to build peace through international cooperation in Education, Sciences and Culture. UNESCO's programs contribute to the achievement of the Sustainable Development Goals defined in Agenda 2030, adopted by the UN General Assembly in 2015. UNESCO has a unique role in advancing cooperation in education, the sciences, culture, communication, and information holds strategic stakes at a time when societies across the world face the rising pressures of change and the international community faces new challenges.
                </p>
                <p>
                    Culture is special, defining society as unique individuals with specific background personally. Traditionally, culture shapes how society perceives life, living daily life with habituated activity. More than that, globally, it establishes a group’s existence in the globalized world. Until now, globalization viewed as a challenge for cultural preservation. Vast spread of information benefits privileged culture, like Hollywood & Bollywood, while endangering others, like the Asia-Pacific region. However, as globalization is inevitable & industry revolution upholds trade of information, those have to be viewed as tools for sustaining cultural preservation, including solution of unjust cultural appropriation. In UN, UNESCO is the only body mandated to discuss cultural preservation, making it obligatory to discuss this sooner than later. This year, UNESCO in ITBMUN will hold meeting to create a framework for globalization’s role in preserving culture.
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
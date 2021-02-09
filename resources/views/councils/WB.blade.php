@extends("template.main")

@section('title', 'Councils - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
<main>

<!-- ## 2. Sidebar Navigation ========= -->
@include('components.navbar-top-main')
        
<!-- ## END of Sidebar Navigation ========= -->


<!-- ## 3. Councils Section ========= -->
@include('components.council')
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="about-paragraph text-justify">
                <h2>World Bank</h2>
                <p>
                Global economic decline is one of many things caused by the ongoing Covid-19 pandemic. As an organization with the aim to reduce poverty and support development, the World Bank sees the need to offer financial aid to countries in need, mainly developing countries, so that they can sustain and recover from their economic loss. In this council, delegates are not required to make a position paper. Instead, they are required to make a Loan Proposal of their scheme with the aim of economic restoration after the pandemic, which mainly will be directed toward developing countries. Throughout the conference, the loan proposal will be discussed, amended, finalized and ended in a voting to pass or fail the proposal. The proposed scheme could be presented in the form of a social protection program, universal healthcare, infrastructure development, or even a combination of two or more programs.
                </p>
            </div>
        </div>
    </div>

    </div>
</section> 
<!-- ## END of Councils ========= -->


<!-- ## 4. Footer Navigation ========= -->
@include('components.footer-main')
<!-- ## END of Footer Navigation ========= -->

</main>
@endsection


<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script src="{{URL::asset('js/navigation.js')}}"></script>

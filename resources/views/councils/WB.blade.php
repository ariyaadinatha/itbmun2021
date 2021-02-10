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
<style>
.councils-hero {
    background: linear-gradient(
            359.87deg,
            #000000 4.51%,
            rgba(50, 23, 64, 0.5) 85.49%
        ),
        url({{URL::asset('assets/councils/WB-BG.png')}});
}
</style>
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="about-paragraph text-justify">
                <h2>World Bank</h2>
                <p>
                The World Bank Group is one of the world’s largest sources of funding and knowledge for developing countries, with ending extreme poverty and promoting shared prosperity as their primary missions. By increasing the incomes of the poorest 40 percent of people in every country. With its five institutions, World Bank share a commitment to reducing poverty, increasing shared prosperity, and promoting sustainable development.
                <br> <br>
                <h2> Socioeconomic Scheme to Restore the Economic Fallout from the COVID-19 Pandemic </h2>
                Global economic decline is one of many things caused by the ongoing Covid-19 pandemic. As an organization with the aim to reduce poverty and support development, the World Bank sees the need to offer financial aid to countries in need, mainly developing countries, so that they can sustain and recover from their economic loss. In this council, delegates are not required to make a position paper. Instead, they are required to make a Loan Proposal of their scheme with the aim of economic restoration after the pandemic, which mainly will be directed toward developing countries. Throughout the conference, the loan proposal will be discussed, amended, finalized and ended in a voting to pass or fail the proposal. The proposed scheme could be presented in the form of a social protection program, universal healthcare, infrastructure development, or even a combination of two or more programs.
                <br><br>This council is for you if :
                <br>    1. If you love researching and designing possible projects and solutions for our world
                <br>    2. If you are concerned about the downfall of economy during COVID-19 pandemic
                <br>    3. If you love pitching and presenting your ideas
                <br>    4. If you love to challenge yourself with a different spin on your usual MUN procedure
                <br>    5. If you are a creative soul or an economy geek

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

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
        url({{URL::asset('assets/councils/UNSC-BG.jpg')}});
}
</style>

    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="about-paragraph text-justify">
                <h2>UNSC</h2>
                <p id="#desc">
                As one of United Nations' principal organs, the Security Council is tasked to uphold international peace. This lofty goal is done through special rights and powers, including legally binding resolution, cooperation of armed forces, interruption of economic relations, and severance of diplomatic relations. The Security Council consists of five permanent members, known as the P-5. The General Assembly shall also elect ten other members of the United Nations to be non-permanent members of the Security Council
                <br><br>
                <h2> Stopping the arduous battle of sovereignty in South China Sea </h2>
                South China Sea is stuck in the crossfire of escalating brinkmanship. In April 2020, the recovered China has seized the chance to declare two new administrative districts in the Spratlys and Paracels while continuing to buzz and tail non-Chinese naval crafts. Responding to this, for the first time, the United States hardened their stance by stating China’s claim as unlawful, preceded by increasing Freedom of Navigation Operations (FONOPs) with both the United Kingdom and Australia. ASEAN has vigilantly involved themselves as well, with Vietnam, Philippines, and Indonesia, among others, have denounced China’s recent action while only acknowledging the United Nations Convention on the Law of the Sea (UNCLOS) as a basis for further exchanges. With the West Capella stands off, diplomatic discussions - including the Single Draft for Code of Conduct in 2018 - are at risk of being pushed further behind. As tension continues to ignite, stance continues to harden, and diplomacy starts to fall out of favor, The ITBMUN 2021 UN Security Council must stand in to prevent South East Asia from becoming a battleground of powers.
                <br><br>This council is for you if :
                <br>    1.Interested in discussing the high tension happening in the South China Sea
                <br>    2.Interested in understanding and studying the basics of international law
                <br>    3.Have a high capability of diplomacy and negotiation
                <br>    4.Devoted to teamwork and have a good coordination with your partner delegate

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

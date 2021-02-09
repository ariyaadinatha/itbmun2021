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
                <h2>UNSC</h2>
                <p id="#desc">
                South China Sea is stuck in the crossfire of escalating brinkmanship. In April 2020, the recovered China has seized the chance to declare two new administrative districts in the Spratlys and Paracels while continuing to buzz and tail non-Chinese naval crafts. Responding to this, for the first time, the United States hardened their stance by stating China’s claim as unlawful, preceded by increasing Freedom of Navigation Operations (FONOPs) with both the United Kingdom and Australia. ASEAN has vigilantly involved themselves as well, with Vietnam, Philippines, and Indonesia, among others, have denounced China’s recent action while only acknowledging the United Nations Convention on the Law of the Sea (UNCLOS) as a basis for further exchanges. With the West Capella stands off, diplomatic discussions - including the Single Draft for Code of Conduct in 2018 - are at risk of being pushed further behind. As tension continues to ignite, stance continues to harden, and diplomacy starts to fall out of favor, The ITBMUN 2021 UN Security Council must stand in to prevent South East Asia from becoming a battleground of powers.
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

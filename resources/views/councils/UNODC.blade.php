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
                <h2>UNODC</h2>
                <p>
                In today’s digital era, everything is just one click away; but so is unauthorized access to your personal information. With increasing cases of major companies and government agencies getting hacked, hundreds of millions of sensitive information: credit card numbers, passwords, birthdate, home address and others - are at risk. Three million user data have been leaked from Yahoo, 147 millions social security numbers were taken from Equifax, and the long list goes on: Facebook (540 millions), Marriott (500 millions) and eBay (147 millions). Leakage of crucial credentials have given crime syndicates access to fraudulent purchases, account takeovers, illegal data sale, and other forms of identity-related crimes. As breach continuously widens in scale and grows into an upward trend, UNODC ITBMUN 2021 is in a high pressure to protect cyberspace security. Identifying newest methods of hacking, decreasing information vulnerability, creating post-breach mechanisms, are a few of the issues this council shall discuss.
                <br><br>What should the delegates expect from this council?
                <br>    1. If you are interested in understanding types of technology and technology-related crimes such as hacking
                <br>    2. If you love to debate upon national and international frameworks
                <br>    3. If you are tired of your Instagram being hacked, having different pincode for every social media account, or covering your webcam with tape

                
                
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

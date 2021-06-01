@extends("template.main")

@section('title', 'Sponsors - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
<main>

<!-- ## 2. Sidebar Navigation ========= -->
@include('components.navbar-top-main')
        
<!-- ## END of Sidebar Navigation ========= -->


<style>
.councils-hero {
    background: linear-gradient(
            359.87deg,
            #000000 4.51%,
            rgba(50, 23, 64, 0.5) 85.49%
        ),
        url({{URL::asset('assets/sponsors/lps.png')}});
}
</style>
<section class='councils-hero' id='hero'>
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <h1>Sponsors</h1>
        </div>
    </div>
</section>

<section class="councils-body">
    <div class="row">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="about-paragraph text-justify">
                <h2>LEMBAGA PENJAMIN SIMPANAN</h2>
                    <div class="councils-wrapper">
                        <a class="council" href='#'>
                            <img src="{{URL::asset('assets/sponsors/lps.png')}}">
                        </a>
                    </div>
                <p>
                Lembaga Penjamin Simpanan (LPS) adalah lembaga keuangan negara yang didirikan berdasarkan Undang-Undang Nomor 24 Tahun 2004. LPS menjamin simpanan nasabah di bank dengan nilai simpanan maksimal Rp 2 miliar, dengan syarat 3T. 3T adalah:
                <br>          
                    <br>1. Simpanan tercatat
                    <br>2. Simpanan tidak melebihi suku bunga penjaminan LPS 
                    <br>3. Nasabah tidak melakukan hal yg merugikan bank

                <br><br>
                Untuk informasi lebih lanjut dapat kunjungi website LPS <a href="https://www.lps.go.id" style="color:blue;" target="_blank"> https://www.lps.go.id </a> dan follow Instagram lps di <a href="https://www.instagram.com/lps_idic" style="color:blue;" target="_blank"> @lps_idic </a>. Atau dapat menghubungi langsung HALO LPS dengan menghubungi 154 dari handphone atau pstn
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

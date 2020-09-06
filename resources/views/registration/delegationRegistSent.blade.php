@extends("template.main")

@section('title', 'Registration Sent Successfully - ITBMUN 2020')

@section('content')

<!-- ## 1. Sidebar Navigation ========= -->
@include('components.sidebar-main')

<!-- ## END of Sidebar Navigation ========= -->
    
<main>

<!-- ## 2. Topbar Navigation ========= -->
    @include('components.navbar-top-main')
        
<!-- ## END of Topbar Navigation ========= -->

<!-- ## 3. Content Section ========= -->
    <section class="registration-after">
        <h1>Registration Success</h1>
        <p>
            Please check to your email for the confirmation:<br>
            <ul>
            @for ($i = 1; $i <= $data->delegatesCount; $i++)
                @if ($i = 1)
                <li><b>{{$data->input('email'.$i)}}</b></li>
                @else
                <li>{{$data->input('email'.$i)}}</li>
                @endif
            @endfor
            </ul>
        </p>
    </section>
<!-- ## END of Content Navigation ========= -->

<!-- ## 4. Footer Navigation ========= -->
    @include('components.footer-main')
<!-- ## END of Footer Navigation ========= -->

</main>
@endsection

@section('script')
    <script src="{{URL::asset('js/nav-scroll.js')}}"></script>
    <script src="{{URL::asset('js/navigation.js')}}"></script>
@endsection
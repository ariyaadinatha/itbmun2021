@extends("template.main")

@section('title', 'Question - ITBMUN 2020')

@section('content')

    @include('components.sidebar-main')

    <main>
        @include('components.navbar-top-main')

        <section class='question-hero' id='hero'>
            <div class="hero-desc">
                <h1>Question</h1>
            </div>
        </section>
<!-- mulai dari sini -->

<section class='registration-body' id='index' style='background-color:#0c0c0c'>
    <div class="registration-wrapper" style="display: flex">
        @if ($errors->any())
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        @if($message=Session::get('success'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert"> x </button>
            <strong> {{$message}} </button>
          </div>
        @endif
        <form action="{{url('question/send')}}" method="post" role="form" enctype="multipart/form-data" style="display: flex; width: 100%">
            @csrf
            <div class="registration-form-wrapper">
                <h2 class='mb-3'>Identity<br>&mdash;</h2>

                <div class="registration-row">
                    <div class="registration-col r-col-12">
                        <input type="text" class="form-input" name="sender" id="sender" placeholder=' ' required/>
                        <label class="text-label" for="sender">Email Address</label>
                        <p class="registration-info">
                            <span class='info'></span>
                            <span class='required'>*Required</span>
                        </p>
                    </div>
                </div>

                <h2 class='mb-3'>Content<br>&mdash;</h2>

                <div class="registration-row">
                    <div class="registration-col r-col-12">
                        <input type="text" class="form-input" name="title" id="title" placeholder=' ' required/>
                        <label class="text-label" for="title"> Title </label>
                        <p class="registration-info">
                            <span class='info'></span>
                            <span class='required'>*Required</span>
                        </p>
                    </div>
                </div>

                <div class="registration-row">
                    <div class="registration-col r-col-12">
                        <textarea placeholder=' ' class="txta" name="body" id="body" required></textarea>
                        <label class="text-label" for="body"> Question </label>
                        <p class="registration-info">
                            <span class='info'></span>
                            <span class='required'>*Required</span>
                        </p>
                    </div>
                </div>


                <div class="registration-row">
                    <div class="registration-col r-col-12 nav-button-wrapper">
                        <input type="submit" value="Send" class="button-white-transparent" />
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>



<!-- selesai disini -->

        @include('components.footer-main')
    </main>

@endsection

@section('script')
<script src="{{URL::asset('js/nav-scroll.js')}}"></script>
<script src="{{URL::asset('js/navigation.js')}}"></script>
@endsection

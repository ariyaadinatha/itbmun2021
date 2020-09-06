@extends("template.main")

@section('title', 'Login - ITBMUN 2020')

@section('content')

<main>
<!-- ## 3. Main Hero Section ========= -->
    <section class="login-hero" id="hero">
        <div class="login-container">
            <div class="login-title mb-5">
                <h1>Hello There</h1>
                <h2>
                    <span style="color:#c9c9c9"> You </span> 
                    shouldn't be here
                </h2>
            </div>
            <div class="login-body">
                <div class="login-row">
                    <input type="text" class="form-input-login" name="username" id="username" placeholder=' ' required/>
                    <label class="text-label" for="username">Username</label>
                </div>

                <div class="login-row">
                    <input type="password" class="form-input-login" name="password" id="password" placeholder=' ' required/>
                    <label class="text-label" for="password">Password</label>
                </div>

                <div class="login-row login-submit">
                    <input type="submit" value="Sign In" class="button-white-transparent" />
                </div>
            </div>
        </div>
    </section>
<!-- ## END of Main Hero Section ========= -->
</main>

@endsection

@section('script')

@endsection
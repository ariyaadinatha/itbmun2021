@extends("admin.dashboard")

@section('title', 'Press - ITBMUN 2020')
@section('topbar', 'Press')

@section("dashboardContent")
<div class="content-landing">
    <img src="{{URL::asset('assets/admin/bodyLandingImage.png')}}">
    <h1>Welcome, Admin</h1>
    <p>
        This is just a landing page<br>
        You should navigate to other pages
    </p>
<div>
@endsection
@extends("admin.dashboard")

@section('title', 'Announcement - ITBMUN 2020')
@section('topbar', 'Announcement')

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
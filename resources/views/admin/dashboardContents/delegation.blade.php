@extends("admin.dashboard")

@section('title', 'Delegation Controller - ITBMUN 2020')
@section('topbar', 'Delegation')

@section("dashboardContent")

@if(count($delegations) > 1)
<div class="content-regist">
    <div class="message">
        @if(isset($message))
            {{$message}}
        @endif
    </div>

    <br>

    <div class='dashboard-table'>
        <table>
            <tr>
                <th>ID</th>
                <th>Delegate&nbsp;Name</th>
                <th>Institution</th>
                <th>Contact</th>
                <th>Options</th>
            </tr>

            @foreach($delegations as $delegation)
            <tr>
                <td>{{$delegation->delegationId}}</td>
                <td>{{$delegation->headDelegate}}</td>
                <td>{{$delegation->institution}}</td>
                <td>
                    <i class="fas fa-phone-square-alt"></i>&ensp;{{$delegation->contactNumber}}<br>
                    <i class="fab fa-line"></i>&ensp;{{$delegation->lineId}}<br>
                    <i class="far fa-envelope"></i>&ensp;{{$delegation->email}}
                </td>
                <td>Details</td>
            </tr>
            @endforeach
        </table>
    </div>
<div>
@else
<div class="content-landing">
    <img src="{{URL::asset('assets/admin/bodyLandingImage.png')}}">
    <h1>No Delegates</h1>
    <p>
        It seems nobody has registered yet<br>
        Please share the news that the registration has been opened
    </p>
@endif
@endsection
@extends('layouts.app')

@section('style')
<style>
    .buttoncard {
        border-left: 5px solid #343A40 !important;
        color: black;
        transition: 100ms all;
    }

    a > .buttoncard:hover{
        background-color: #e4e4e4;
    }
</style>
@endsection

@section('title')
ITBMUN Admin Dashboard 
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark" style="color: white">Press Dashboard</div>

                <div class="card-body">
                    @include("alerts.alertSuccess")

                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <a href="/home/create">
                                <div class="card buttoncard p-3 my-2">
                                    Create Post
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-12">
                            <a href="/home/update">
                                <div class="card buttoncard p-3 my-2">
                                    Update Post
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-12">
                            <a href="/home/delete">
                                <div class="card buttoncard p-3 my-2">
                                    Delete Post
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-12">
                            <a href="/press">
                                <div class="card buttoncard p-3 my-2">
                                    Press Page
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

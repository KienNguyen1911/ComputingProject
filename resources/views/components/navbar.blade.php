@extends('header')
@section('navbar')
<div class="navbar">
    <div class="navbar-left">
        <div class="navbar-logo">
            <a href="index.html">
                <img class="some-icon" src="https://ui8-fleet-html.herokuapp.com/img/logo-dark.svg" alt="Fleet" data-metatip="true" data-allytip="true" data-selected="true" data-label-id="0">
            </a>
        </div>
        <div class="navbar-feature">
            <div class="navbar-feature__text">
                Traverlers
            </div>
            <div class="navbar-feature__icon">
                <i class="fa-sharp fa-solid fa-caret-down"></i>
            </div>
        </div>
    </div>
    <div class="navbar-right">
        <a class="navbar-support" href="#">
            Support
        </a>
        <a class="navbar-button" href="">
            List your property
        </a>
        <div class="navbar-notification">
            <div class="navbar-icon__center">
                <i class="fa-regular fa-bell" style="font-size: 20px"></i>
            </div>
        </div>
        <div class="navbar-profile">
            <div class="navbar-icon__center">
                <i class="fa-solid fa-circle-user"></i>
            </div>
        </div>
    </div>
</div>
@endsection
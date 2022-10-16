<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fleet</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
        <link href="{{asset('css/base.css')}}" rel="stylesheet">  
        <link rel="stylesheet" href="{{asset('css/header.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
        <div class="container">
        {{-- Header  --}}
            <div class="header">
                {{-- <div class="navbar">
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
                </div> --}}
                @yield('navbar')
            </div>
        {{-- Background --}}
            <div class="background">
                <div class="background-image">
                    <img src="{{asset('img/main-pic-1.jpg')}}" style="border-radius: 25px; max-width: 100%"alt="Main">
                    <div class="background-text">
                        <div class="background-text__title">
                            Air, sleep, dream
                        </div>
                        <div class="background-text__subtitle">
                            Find and book a great experience.
                        </div>
                        <div class="background-text__button">
                            Start your search
                        </div>
                    </div>
                            {{--Search--}}
            <div class="search">
                <div class="search-navbar">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Stays</a>
                          <li><hr class="dropdown-divider"></li>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Flights</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Cars</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Things to do</a>
                        </li>
                      </ul>
                </div>
                <div class="search-content">
                    <div class="search-bar">
                        <div class="search-bar__icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="search-bar__text">
                            Location
                            <div class="search-bar__subtext">
                            Where are you going?
                            </div>
                        </div>
                    </div>
                    <div class="search-bar">
                        <div class="search-bar__icon">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <div class="search-bar__text">
                            Check in - out
                            <div class="search-bar__subtext">
                            Add date
                            </div>
                        </div>
                    </div>
                    <div class="search-bar">
                        <div class="search-bar__icon">
                            <i class="fa-solid fa-user-pen"></i>
                        </div>
                        <div class="search-bar__text">
                            Travelers
                            <div class="search-bar__subtext">
                                Travelers

                            </div>
                        </div>
                    </div>
                    <div class="search-bar">
                        <div class="search-bar__icon">
                            <div class="search-bar__icon__background">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>

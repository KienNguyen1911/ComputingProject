@include('components.head')
<link href="{{ asset('css/base.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script> --}}

<style>
    .dropdown-toggle::after {
        content: none !important;
    }

    .dropdown-menu {
        width: 230px;
        height: 200px;
    }

    .dropdown-item {
        padding: 12px 1rem !important;
        border-radius: 20px !important;
        transition: 0.1s ease background-color !important;
    }

    .dropdown-item:hover {
        background-color: #23262F !important;
        color: white !important;
    }
</style>

<body>
    <div class="container">
        {{-- Header  --}}
        <div class="header">
            <div class="navbar py-4">
                <div class="navbar-left">
                    <div class="navbar-logo">
                        <a href="{{ route('landingPage') }}">
                            <img class="some-icon" src="https://ui8-fleet-html.herokuapp.com/img/logo-dark.svg"
                                alt="Fleet" data-metatip="true" data-allytip="true" data-selected="true"
                                data-label-id="0">
                        </a>
                    </div>
                    <div class="navbar-feature">
                        <div class="dropdown">
                            <div class="navbar-feature__text dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Traverlers
                            </div>
                            <ul class="dropdown-menu">
                            <div class="dropdown-menu__show">
                            <li><a class="dropdown-item" href="#"><i
                                            class="fa-solid fa-house nav-items__icon__position"></i>Stays</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa-solid fa-plane-circle-check nav-items__icon__position"></i>Flights</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fa-solid fa-list-check nav-items__icon__position"></i>Things to
                                        do</a>
                                </li>
                                <li><a class="dropdown-item" href=""><i
                                            class="fa-solid fa-car-side nav-items__icon__position"></i>Cars</a></li>
                            </div>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="navbar-right">
                    {{-- <a class="navbar-support" href="{{ route('allhome') }}"> --}}
                    <a class="navbar-support" href="{{ route('allhome') }}">
                        Search
                    </a>
                    <a class="navbar-support" href="#">
                        Support
                    </a>
                    <a class="navbar-button" href="">
                        List your property
                    </a>
                    <!-- <div class="navbar-notification">
                        <div class="navbar-icon__center">
                            <i class="fa-regular fa-bell" style="font-size: 20px"></i>
                        </div>
                    </div> -->
                    <div class="btn-group">
                        <button class="btn btn-secondary" type="" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-bell" style="font-size: 20px"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                            <li><a class="dropdown-item" href="#">Menu item</a></li>
                        </ul>
                    </div>
                    <div class="navbar-profile">
                        <div class="navbar-icon__center">
                            @if (Auth::check())
                                <div class="btn-group">
<<<<<<< HEAD
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Large button
=======
                                    <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false" style="box-shadow: none">
                                        <img class="navbar-profile__img" src="{{ Auth::user()->avatar_original }}"
                                            alt="" style="border-radius: 50%; width:30px">
>>>>>>> a1354b682bebd62c2ee6b5a5705a55a76d39f507
                                    </button>
                                    <ul class="dropdown-menu " style="left: -90px; border-radius:16px">
                                        <li><a class="dropdown-item" href="{{ route('reservations-list') }}">
                                                <i class="fa-regular fa-building" style="margin-right: 10px"></i>
                                                View Booking
                                            </a></li>
                                        <li><a class="dropdown-item" href="#">
                                                <i class="fa-regular fa-heart" style="margin-right: 10px"></i>
                                                Your Wishlist
                                            </a></li>
                                        <li><a class="dropdown-item" href="#">
                                                <i class="fa-regular fa-user" style="margin-right: 10px"></i>
                                                Edit Profile
                                            </a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}">
                                                <i class="fa-solid fa-arrow-right-from-bracket"
                                                    style="margin-right: 10px"></i>
                                                Log Out
                                            </a></li>
                                    </ul>
                                </div>
                            @else
                                <a href="{{ route('signup') }}"><i class="fa-solid fa-circle-user"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>
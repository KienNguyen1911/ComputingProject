<link href="{{ asset('css/base.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<body>
    <div class="container">
        {{-- Header  --}}
        <div class="header">
            <div class="navbar py-4">
                <div class="navbar-left">
                    <div class="navbar-logo">
                        <a href="index.html">
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
                            <a href="{{ route('signup') }}"><i class="fa-solid fa-circle-user"></i></a>
                            <div class="navbar-profile-card">
                                <div class="btn-group">
                                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Large button
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-house nav-items__icon__position"></i>Stays</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-plane-circle-check nav-items__icon__position"></i>Flights</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-list-check nav-items__icon__position"></i>Things
                                                to
                                                do</a>
                                        </li>
                                        <li><a class="dropdown-item" href=""><i
                                                    class="fa-solid fa-car-side nav-items__icon__position"></i>Cars</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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
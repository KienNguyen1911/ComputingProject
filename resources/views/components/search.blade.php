@include('components.head')
<link href="{{ asset('css/base.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<div class="container">
    {{-- Background --}}
    <div class="background">
        <div class="background-image">
            <img src="{{ asset('img/main-pic-1.jpg') }}" style="border-radius: 25px; max-width: 100%" alt="Main">
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
            {{-- Search --}}
            <div class="search">
                <div class="search-navbar">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Stays</a>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
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
</body>

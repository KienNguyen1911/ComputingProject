<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fleet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
<link href="{{asset('css/base.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/header.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

<body>
  <div class="container">
    {{-- Navbar  --}}
    <nav class="navbar navbar-expand-lg mt-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img class="some-icon pe-4 border-end" src="https://ui8-fleet-html.herokuapp.com/img/logo-dark.svg" alt="Fleet" data-metatip="true" data-allytip="true" data-selected="true" data-label-id="0">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Traverlers
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-comment-dots"></i>Stays</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-ticket"></i>Flights</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-car-side"></i>Cars</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-list-check"></i>Things to do</a></li>
              </ul>
            </li>
          </ul>
          <span class="">
            <a class="nav-link">Support</a>
          </span>
          <span>
            <a class="nav-link"><button>List your property</button></a>
          </span>
          <span>
            <i class="fa-regular fa-bell big"></i>
          </span>
          <span>
            <i class="fa-regular fa-user"></i>
          </span>
        </div>
      </div>
    </nav>
    {{-- Slider --}}
    <div class="slider">
      <img src="{{asset('img/main-pic-1.jpg')}}" alt="Main">
    </div>
    <div class="img-text">
      <div class="img-title">
        Air, sleep, dream
      </div>
      <div class="img-sub-title">
        Find and book a great experience.
      </div>
      <div class="img-btn">
        Start your search
      </div>
    </div>
    {{-- Search --}}
    <div class="search-wrapper">
      <div class="search-content">
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
        <div class="search-detail">
          <div class="container text-center">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
              <div class="col">
                <i class="fa-solid fa-location-dot"></i>
                Location
                <span>
                  Where are you going?
                </span>
              </div>
              <div class="col"><i class="fa-solid fa-calendar-days"></i>Check in</div>
              <div class="col"><i class="fa-solid fa-calendar-days"></i>Check out</div>
              <div class="col">Traverlers
                <i class="fa-solid fa-magnifying-glass-location"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('components.content')
    {{-- Footer --}}

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
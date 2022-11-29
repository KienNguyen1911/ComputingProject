<link rel="stylesheet" href="{{ asset('css/header.css') }}">
@include('components.head')
@include('components.header')


<link rel="stylesheet" href="{{ asset('css/home-details.css') }}">

<body>

    <div class="section product">
        <div class="product-center center">
            <div class="control">
                <a href="" class="control-button">
                    <i class="fas fa-chevron-left"></i>
                    <span>Go Home</span>
                </a>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="breadcrumb-link" href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="breadcrumb-link" href="#">Stays</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="breadcrumb-link" href="#">New Zealand</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            South Island
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="product-head">
                <div class="product-box">
                    <h2 class="product-title h2">{{ $home->home_name }}</h2>
                    <div class="product-line">
                        <div class="product-avatar"><img src="/img/avatar-1.jpg" alt="Avatar"></div>
                        <div class="product-rating">
                            <i class="fa-solid fa-star"></i>
                            <div class="product-number">{{ $home->home_rating }}</div>
                            <div class="product-reviews">(256 reviews)</div>
                        </div>
                        <div class="product-options">
                            <div class="product-option">
                                <i class="fa-solid fa-house"></i>
                                Superhost
                            </div>
                            <div class="product-option">
                                <i class="fa-solid fa-flag"></i>
                                {{ $home->home_address }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="action">
                    <div class="action-list">
                        <div class="action-item">
                            <i class="fa-solid fa-location-arrow"></i>
                        </div>
                        <div class="action-item">
                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                        </div>
                        <div class="action-item">
                            <i class="fa-regular fa-heart"></i>
                        </div>
                        <div class="action-item">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $firstImage = DB::table('images')->where('home_id', $home->id)->first();
                $secondImage = DB::table('images')->where('home_id', $home->id)->skip(1)->first();
                $thirdImage = DB::table('images')->where('home_id', $home->id)->skip(2)->first();
                $fourthImage = DB::table('images')->where('home_id', $home->id)->skip(3)->first();
            @endphp
            <div class="gallery">
                <div class="gallery-list ">
                    <div class="gallery-preview">
                        <a href="" class="gallery-view">
                           <img src="/homes_image/{{ $firstImage->image }}" alt="">
                        </a>
                        <a href="" class="gallery-button button-small">
                            <i class="fa-regular fa-image"></i>
                            <span>Show all photos</span>
                        </a>
                    </div>
                    <a href="" class="gallery-preview">
                        <img src="/homes_image/{{ $secondImage->image }}" alt="">

                    </a>
                    <a href="" class="gallery-preview">
                        <img src="/homes_image/{{ $thirdImage->image }}" alt="">

                    </a>
                    <a href="" class="gallery-preview">
                        <img src="/homes_image/{{ $fourthImage->image }}" alt="">

                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section description">
        <div class="description-center center">
            <div class="row">
                <div class="description-wrapper col-lg-7">
                    <div class="description-title">
                        <h4 class="description-title h4">Private room in house</h4>
                    </div>
                    <div class="description-profile">
                        <span>Hosted by</span>
                        <div class="description-avatar">
                            <img src="/img/avatar.jpg" alt="">
                        </div>
                        <div class="description-name">Zoe Towne</div>
                    </div>
                    <div class="description-parameters">
                        <div class="description-parameter">
                            <i class="fa-solid fa-house"></i>
                            2 guests
                        </div>
                        <div class="description-parameter">
                            <i class="fa-regular fa-flag"></i>
                            1 bedroom
                        </div>
                        <div class="description-parameter">
                            <i class="fa-regular fa-flag"></i>
                            1 private bath
                        </div>
                    </div>
                    <div class="description-content">
                        <p>{{ $home->home_description }}</p>
                    </div>
                    <div class="description-info">Amenities</div>
                    <div class="description-options">
                        @foreach ($servicehome as $servicehome)
                            <div class="description-option">
                                <i class="fa-solid fa-wifi"></i>
                                {{ $servicehome }}
                            </div>
                        @endforeach
                    </div>
                    <div class="description-full"></div>
                </div>
                <div class="receipt col-lg-5">
                    <div class="receipt-head">
                        <div class="receipt-details">
                            <div class="receipt-cost">
                                ${{ $home->home_price }} <span>/night</span>
                            </div>
                            <div class="receipt-rating">
                                <div class="product-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <div class="product-number">{{ $home->home_rating }}</div>
                                    <div class="product-reviews">(256 reviews)</div>
                                </div>
                            </div>
                        </div>
                        <div class="receipt-avatar">
                            <img src="/img/avatar.jpg" alt="">
                        </div>
                    </div>
                    <div class="receipt-description row">
                        <div class="col-lg-6 col-md-6 ">
                            <div class="receipt-item ">
                                <div class="receipt-icon">
                                    <i class="fa-regular fa-calendar-days"></i>
                                </div>
                                <div class="receipt-box">
                                    <div class="receipt-category">Check-in</div>
                                    <div class="receipt-subtitle">May 15, 2021</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 ">
                            <div class="receipt-item ">
                                <div class="receipt-icon">
                                    <i class="fa-regular fa-calendar-days"></i>
                                </div>
                                <div class="receipt-box">
                                    <div class="receipt-category">Check-out</div>
                                    <div class="receipt-subtitle">May 22, 2021</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 ">
                            <div class="receipt-item ">
                                <div class="receipt-icon">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                                <div class="receipt-box">
                                    <div class="receipt-category">Guest</div>
                                    <div class="receipt-subtitle">2 guests</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="receipt-btn">
                        <span>Reserve</span>
                    </div>
                    <div class="receipt-table">
                        <div class="receipt-line">
                            <div class="receipt-cell">$119 x 7 nights</div>
                            <div class="receipt-cell">$833</div>
                        </div>
                        <div class="receipt-line">
                            <div class="receipt-cell">10% campaign discount</div>
                            <div class="receipt-cell">-$125</div>
                        </div>
                        <div class="receipt-line">
                            <div class="receipt-cell">Service fee</div>
                            <div class="receipt-cell">$103</div>
                        </div>
                        <div class="receipt-line">
                            <div class="receipt-cell">Total</div>
                            <div class="receipt-cell">$833</div>
                        </div>
                    </div>
                    <div class="receipt-foot">
                        <button class="receipt-report">
                            <i class="fa-solid fa-flag"></i>
                            Report this property
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section comments">
        <div class="comments-center center">
            <div class="row">
                <div class="profile col-lg-4">
                    <div class="profile-head">
                        <div class="profile-line">
                            <div class="profile-avatar">
                                <img src="/img/avatar.jpg" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-man">Zoe towne</div>
                                <div class="profile-rating">
                                    <div class="product-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <div class="product-number">4.8</div>
                                        <div class="product-reviews">(256 reviews)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-body">

                    </div>
                </div>
                <div class="comment col-lg-8"></div>
            </div>
        </div>
    </div>

</body>

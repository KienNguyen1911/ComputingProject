<link rel="stylesheet" href="{{ asset('css/header.css') }}">
@include('components.head')
@include('components.header')


<link rel="stylesheet" href="{{ asset('css/home-details.css') }}">

{{-- LINK JQUERY --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


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
                $firstImage = DB::table('images')
                    ->where('home_id', $home->id)
                    ->first();
                $secondImage = DB::table('images')
                    ->where('home_id', $home->id)
                    ->skip(1)
                    ->first();
                $thirdImage = DB::table('images')
                    ->where('home_id', $home->id)
                    ->skip(2)
                    ->first();
                $fourthImage = DB::table('images')
                    ->where('home_id', $home->id)
                    ->skip(3)
                    ->first();
            @endphp
            <div class="gallery">
                <div class="gallery-list ">
                    <div class="gallery-preview">
                        <a href="" class="gallery-view">
                            <img src="/homes_image/{{ $firstImage->image }}" alt="">
                        </a>
                        <a href="" class="gallery-button button-small" data-bs-toggle="modal"
                            data-bs-target="#showAllImages">
                            <i class="fa-regular fa-image"></i>
                            <span>Show all photos</span>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="showAllImages" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen"
                                style="width: 90%; height: 90%; margin-left: 5%; margin-top: 2%;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center" id="exampleModalLabel">Images about
                                            {{ $home->home_name }}</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <section id="all-img">
                                            <div class="modal-images">
                                                <!--Can also do portrait or square, remove the "-" prefix-->
                                                @foreach ($image as $image)
                                                    <div class="modal-item">
                                                        <img class="modal-image" src="/homes_image/{{ $image->image }}"
                                                            alt="Home Images ">
                                                        {{-- <a class="btn btn-icon btn-round view">
                                                            View Image
                                                        </a> --}}
                                                    </div>
                                                @endforeach

                                                <div class="overlay">
                                                    <div class="overlay__inner">
                                                        <button class="close">close X</button>
                                                        <img>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Style Modal --}}
                    <style>
                        .modal-images {
                            display: flex;
                            flex-wrap: wrap;
                            justify-content: center;
                        }

                        .modal-item {
                            position: relative;
                            margin: 10px;

                        }

                        .modal-image {
                            width: 100%;
                            height: 250px;
                            object-fit: cover;
                            transition: transform .2s ease-in-out;
                        }

                        .modal-image:hover {
                            transform: scale(1.1);
                        }

                        .overlay {
                            position: fixed;
                            background: rgba(71, 69, 69, 0.7);
                            top: 0;
                            right: 0;
                            bottom: 0;
                            left: 0;
                            display: none;
                            z-index: 3;
                        }

                        .overlay.open {
                            display: grid;
                            align-items: center;
                            justify-items: center;
                        }

                        .overlay__inner {
                            background: #ffffff;
                            width: 700px;
                            padding: 20px;
                            position: relative;
                            opacity: 1;
                        }

                        .close {
                            position: absolute;
                            top: 3px;
                            right: 10px;
                            background: none;
                            outline: 0;
                            color: #474545;
                            border: 0;
                            text-transform: uppercase;
                            letter-spacing: 2px;
                        }
                    </style>

                    {{-- Script Modal --}}
                    <script>
                        const modalImages = document.querySelectorAll('.modal-image');
                        const modalOverlay = document.querySelector('.overlay');
                        const modalOverlayInner = document.querySelector('.overlay__inner');
                        const modalOverlayImage = document.querySelector('.overlay__inner img');
                        const modalOverlayClose = document.querySelector('.overlay__inner .close');

                        modalImages.forEach(image => {
                            image.addEventListener('click', () => {
                                modalOverlay.classList.add('open');
                                const src = image.getAttribute('src');
                                modalOverlayImage.setAttribute('src', src);
                                modalOverlayImage.style.width = '100%';
                                modalOverlayInner.style.width = '70%';
                            });
                        });

                        modalOverlayClose.addEventListener('click', () => {
                            modalOverlay.classList.remove('open');
                        });
                    </script>
                    {{-- End Modal --}}

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
                            <div class="receipt-cost" id="price">
                                @php
                                    $home_price = number_format($home->home_price, 0, ',', '.');
                                @endphp
                                VND {{ $home_price }} <span>/night</span>
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

                    {{-- =====================FORM BOOKING ===================================== --}}
                    <form action="{{ route('postReservation', ['id' => $home->id]) }}" method="POST">
                        @csrf
                        <div class="receipt-description row">
                            <div class="col-lg-6 col-md-6 ">
                                <div class="receipt-item ">
                                    <div class="receipt-icon">
                                        <i class="fa-regular fa-calendar-days"></i>
                                    </div>
                                    <div class="receipt-box">
                                        <div class="receipt-category">Check-in</div>
                                        <input type="text" name="start" class="daterange form-control"
                                            value="" placeholder="YYYY-MM-DD" required />
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
                                        <input type="text" name="end" class="daterange form-control"
                                            value="" placeholder="YYYY-MM-DD" required />
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

                        {{-- <div class="receipt-btn" id="calculate">
                            <span>Calculate</span>
                        </div> --}}
                        {{-- FEES --}}
                        {{-- <div class="receipt-table">
                            <div class="receipt-line">
                                <div class="receipt-cell">VND 119 x 7 nights</div>
                                <div class="receipt-cell">VND 833</div>
                            </div>
                            <div class="receipt-line">
                                <div class="receipt-cell">10% campaign discount</div>
                                <div class="receipt-cell">-VND 125</div>
                            </div>
                            <div class="receipt-line">
                                <div class="receipt-cell">Service fee</div>
                                <div class="receipt-cell">VND 103</div>
                            </div>

                            <div class="receipt-line">
                                <div class="receipt-cell">Total</div>
                                <div class="receipt-cell" id="total-price">VND 857</div>
                            </div>
                        </div> --}}

                        <button class="receipt-btn" type="submit">
                            <span>Reserve</span>
                        </button>

                    </form>

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

    {{-- <div class="section comments">
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
    </div> --}}

    {{-- dd($payment->start); --}}
    <script type="text/javascript">
        $(function() {
            $(".daterange").daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: "Clear",
                },
                minDate: moment().subtract(0, "days"),


                isInvalidDate: function(date) {
                    // create a variable to hold the date
                    var paymentDate = <?php echo json_encode($payment); ?>;
                    // for loop to check if the date is in the array
                    for (var i = 0; i < paymentDate.length; i++) {
                        // if the date is in the array return true
                        for (var m = moment(paymentDate[i].start); m.isBefore(paymentDate[i].end) ; m.add(1, "days")) {
                            if (date.format('YYYY-M-D') == m.format('YYYY-M-D')) {
                                return true;
                            }
                        }
                    }
                }
            });

            $(".daterange").on("apply.daterangepicker", function(ev, picker) {
                $('input[name="start"]').val(picker.startDate.format("YYYY-MM-DD"));
                $('input[name="end"]').val(picker.endDate.format("YYYY-MM-DD"));
                
            });

            $('input[name="start"]').on(
                "cancel.daterangepicker",
                function(ev, picker) {
                    $(this).val("");
                }
            );

        });
    </script>

</body>

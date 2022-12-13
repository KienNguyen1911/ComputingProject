@include('components.head')
<link href="{{ asset('css/base.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/calender/mobiscroll.javascript.min.css') }}"> --}}
{{-- <script src="{{ asset('js/calender/mobiscroll.javascript.min.js') }}"></script> --}}

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<body>
    <div class="container">
        {{-- Background --}}
        <div class="background">
            <div class="background-image">
                <img src="{{ asset('img/main-pic-1.jpg') }}" style="border-radius: 25px; max-width: 100%"
                    alt="Main">
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
                    <form action="{{ route('postSearch') }}" method="post">
                        @csrf
                        <div class="search-content">
                            <div class="search-bar">
                                <div class="search-bar__icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Location
                                </div>
                                <div class="search-bar__text">
                                    {{-- <input class="search-bar__subtext" placeholder="Where are you going?" type="text" /> --}}
                                    @php
                                        $location = DB::table('homes')->select('home_address')->distinct()->get();
                                        // dd($location);
                                    @endphp
                                    <select name="home_address" id="" class="search-bar__subtext">
                                        @foreach ($location as $location)
                                            <option value="{{$location->home_address}}">{{$location->home_address}}</option>
                                        @endforeach
                                    </select>
                                    {{-- Where are you going? --}}
                                </div>
                            </div>
                            <div class="search-bar">
                                <div class="search-bar__icon" id="demo-booking-single">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    Check in - out
                                </div>
                                <div type="button" class="search-bar__text">
                                    <input class="search-bar__subtext" placeholder="Your schedule" type="text"
                                        name="datefilter" />

                                </div>
                            </div>
                            <div class="search-bar">
                                <div class="search-bar__icon">
                                    <i class="fa-solid fa-user-pen"></i>
                                    Travelers
                                </div>
                                <div class="search-bar__text">
                                    <input class="search-bar__subtext" placeholder="How many?" />

                                </div>
                            </div>
                            <div class="search-bar">
                                <button type="submit" class="search-bar__icon"
                                    style="border: none; background: transparent">
                                    <div class="search-bar__icon__background">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(function() {

            // min = moment().subtract(1, 'days');
            $('input[name="datefilter"]').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                },
                minDate: moment().subtract(0, 'days'),
                // disabledDate: 9,
                isInvalidDate: '1/1/2023',
            });

            $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format(
                    'MM/DD/YYYY'));
            });

            $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });

        });
    </script>
</body>

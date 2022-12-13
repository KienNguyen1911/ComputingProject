    <!DOCTYPE html>
    <html lang="en">
    @if (Auth::check() && Auth::user()->user_role == 'admin')

        <head>
            <meta charset="utf-8" />
            <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
            <link rel="icon" type="image/png" href="../img/favicon.png">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
            <title>
                Now UI Dashboard by Creative Tim
            </title>
            <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
                name='viewport' />

            <!--     Fonts and icons     -->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
                integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
                crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
                integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />

            <!-- CSS Files -->
            <link href="../css/bootstrap.min.css" rel="stylesheet" />
            <link href="../css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />

            <!-- CSS Just for demo purpose, don't include it in your project -->
            <link href="../demo/demo.css" rel="stylesheet" />

            <!-- Jquery daterangepicker -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
            <link rel="stylesheet" type="text/css"
                href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

        </head>

        <body class="">
            <div class="wrapper ">
                <div class="sidebar" data-color="orange">
                    <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
                    <div class="logo">
                        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                            FH
                        </a>
                        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                            Fleet Homestay
                        </a>
                    </div>
                    <div class="sidebar-wrapper" id="sidebar-wrapper">
                        <ul class="nav navUL">
                            <li class=" {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                                <a href="{{ route('admin.dashboard') }}">
                                    <i class="now-ui-icons design_app"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>

                            <li class="{{ request()->is('admin/notifications') ? 'active' : '' }} ">
                                <a href="{{ route('admin.notifications') }}">
                                    <i class="now-ui-icons ui-1_bell-53"></i>
                                    <p>Notifications</p>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/user') ? 'active' : '' }}">
                                <a href="{{ route('admin.user') }}">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>User Profile</p>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/payment-manage/*') ? 'active' : '' }}">
                                <a href="{{ route('getPaymentList') }}">
                                    <i class="now-ui-icons design_bullet-list-67"></i>
                                    <p>Manage Payment</p>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/type-manage') ? 'active' : '' }}">
                                <a href="{{ route('view.type') }}">
                                    <i class="now-ui-icons location_map-big"></i>
                                    <p>Manage Type</p>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/product-manage') ? 'active' : '' }}">
                                <a href="{{ route('view.home') }}">
                                    <i class="now-ui-icons location_map-big"></i>
                                    <p>Manage Home</p>
                                </a>
                            </li>
                            <li class="{{ request()->is('admin/product-manage') ? 'active' : '' }}">
                                <a href="{{ route('view.service') }}">
                                    <i class="now-ui-icons location_map-big"></i>
                                    <p>Manage Service</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    <p>Logout</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-panel" id="main-panel">
                    <!-- Navbar -->
                    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                        <div class="container-fluid">
                            <div class="navbar-wrapper">
                                <div class="navbar-toggle">
                                    <button type="button" class="navbar-toggler">
                                        <span class="navbar-toggler-bar bar1"></span>
                                        <span class="navbar-toggler-bar bar2"></span>
                                        <span class="navbar-toggler-bar bar3"></span>
                                    </button>
                                </div>
                                <a class="navbar-brand" href="#pablo">Dashboard</a>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar navbar-kebab"></span>
                                <span class="navbar-toggler-bar navbar-kebab"></span>
                                <span class="navbar-toggler-bar navbar-kebab"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                                <form>
                                    <div class="input-group no-border">
                                        <input type="text" value="" class="form-control"
                                            placeholder="Search...">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="now-ui-icons ui-1_zoom-bold"></i>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pablo">
                                            <i class="now-ui-icons media-2_sound-wave"></i>
                                            <p>
                                                <span class="d-lg-none d-md-block">Stats</span>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="now-ui-icons location_world"></i>
                                            <p>
                                                <span class="d-lg-none d-md-block">Some Actions</span>
                                            </p>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pablo">
                                            <img src="{{ Auth::user()->avatar_original }}" alt=""
                                                srcset="" style="border-radius: 50%; width:30px">
                                            <p>
                                                <span class="d-lg-none d-md-block">Account</span>
                                            </p>
                                        </a>
                                        {{-- {{Auth::user()->user_name}} --}}
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                    @if (View::hasSection('charts'))
                        <div class="panel-header panel-header-lg">
                            <canvas id="bigDashboardChart"></canvas>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js@^3"></script>
                        <script src="https://cdn.jsdelivr.net/npm/moment@^2"></script>
                        <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-moment@^1"></script>
                        @php
                            $dates = DB::table('payments')->select('vnp_PayDate')->get();
                            // $date = date('Y-m-d ', strtotime($payment->vnp_PayDate));
                            dd($dates);
                        @endphp
                        <script>
                            var ctx = document.getElementById('bigDashboardChart').getContext("2d");

                            var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
                            gradientStroke.addColorStop(0, '#80b6f4');
                            gradientStroke.addColorStop(1, chartColor);

                            var gradientFill = ctx.createLinearGradient(0, 200, 0, 50);
                            gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
                            gradientFill.addColorStop(1, "rgba(255, 255, 255, 0.24)");

                            var myChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    // labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],

                                    labels: [

                                    ],
                                    datasets: [{
                                        label: "Data",
                                        borderColor: chartColor,
                                        pointBorderColor: chartColor,
                                        pointBackgroundColor: "#1e3d60",
                                        pointHoverBackgroundColor: "#1e3d60",
                                        pointHoverBorderColor: chartColor,
                                        pointBorderWidth: 1,
                                        pointHoverRadius: 7,
                                        pointHoverBorderWidth: 2,
                                        pointRadius: 5,
                                        fill: true,
                                        backgroundColor: gradientFill,
                                        borderWidth: 2,
                                        data: [50, 150, 100, 190, 130, 90, 150, 160, 120, 140, 190, 95]
                                    }]
                                },
                                options: {
                                    layout: {
                                        padding: {
                                            left: 20,
                                            right: 20,
                                            top: 0,
                                            bottom: 0
                                        }
                                    },
                                    maintainAspectRatio: false,
                                    tooltips: {
                                        backgroundColor: '#fff',
                                        titleFontColor: '#333',
                                        bodyFontColor: '#666',
                                        bodySpacing: 4,
                                        xPadding: 12,
                                        mode: "nearest",
                                        intersect: 0,
                                        position: "nearest"
                                    },
                                    legend: {
                                        position: "bottom",
                                        fillStyle: "#FFF",
                                        display: false
                                    },
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                fontColor: "rgba(255,255,255,0.4)",
                                                fontStyle: "bold",
                                                beginAtZero: true,
                                                maxTicksLimit: 5,
                                                padding: 10
                                            },
                                            gridLines: {
                                                drawTicks: true,
                                                drawBorder: false,
                                                display: true,
                                                color: "rgba(255,255,255,0.1)",
                                                zeroLineColor: "transparent"
                                            }

                                        }],
                                        xAxes: [{
                                            gridLines: {
                                                zeroLineColor: "transparent",
                                                display: false,

                                            },
                                            ticks: {
                                                padding: 10,
                                                fontColor: "rgba(255,255,255,0.4)",
                                                fontStyle: "bold"
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    @endif
                    <div class="panel-header panel-header-sm">
                    </div>
                    <div class="content">
                        @yield('login')
                        @yield('notifications')
                        @yield('user')
                        @yield('tables')
                        @yield('charts')

                        {{-- type --}}
                        @yield('view-type')
                        @yield('add-type')
                        @yield('edit-type')

                        {{-- product --}}
                        @yield('view-home')
                        @yield('add-home')
                        @yield('images')
                        @yield('edit-home')

                        {{-- service --}}
                        @yield('view-service')
                        @yield('add-service')
                        @yield('edit-service')

                        {{-- user --}}

                        {{-- reservation --}}
                        @yield('view-reservation')
                        @yield('add-reservation')
                        @yield('edit-reservation')

                        {{-- payment --}}
                        @yield('view-payment')
                        @yield('payment-details')
                    </div>
                </div>
            </div>
            <!--   Core JS Files   -->
            {{-- <script src="../js/core/jquery.min.js"></script> --}}
            <script src="../js/core/popper.min.js"></script>
            <script src="../js/core/bootstrap.min.js"></script>
            <script src="../js/plugins/perfect-scrollbar.jquery.min.js"></script>

            <!--  Google Maps Plugin    -->
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

            <!-- Chart JS -->
            <script src="../js/plugins/chartjs.min.js"></script>

            <!--  Notifications Plugin    -->
            <script src="../js/plugins/bootstrap-notify.js"></script>

            <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="../js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
            <script src="../demo/demo.js"></script>
            <script>
                $(document).ready(function() {
                    // Javascript method's body can be found in/js/demos.js
                    demo.initDashboardPageCharts();

                });
            </script>
        </body>
    @else
        <h1>You are not permissioned to access</h1>
    @endif

    </html>

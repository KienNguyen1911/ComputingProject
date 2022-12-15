@extends('admin.layoutAdmin')

@section('charts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel-header panel-header-lg" style="padding-top: 45px">
                <canvas id="bigChart"></canvas>
            </div>
            @php
                // total price by month in 2022
                $totalPrice = [];
                $totalPrice['Jan'] = 0;
                $totalPrice['Feb'] = 0;
                $totalPrice['Mar'] = 0;
                $totalPrice['Apr'] = 0;
                $totalPrice['May'] = 0;
                $totalPrice['Jun'] = 0;
                $totalPrice['Jul'] = 0;
                $totalPrice['Aug'] = 0;
                $totalPrice['Sep'] = 0;
                $totalPrice['Oct'] = 0;
                $totalPrice['Nov'] = 0;
                $totalPrice['Dec'] = 0;
                
                foreach ($payment as $order) {
                    $month = date('M', strtotime($order->vnp_PayDate));
                    $totalPrice[$month] += $order->total_price;
                }
                // dd($totalPrice);
                
                // get date by month from vnp_PayDate
                $daysPayDate = [];
                foreach ($payment as $key => $value) {
                    # code...
                    $day = date('d', strtotime($value->vnp_PayDate));
                    $daysPayDate[$day][] = $value;
                }
                // dd($daysPayDate);
                // show all days in month
                $daysInMonth = Carbon\Carbon::now()->daysInMonth;
                // dd($daysInMonth);
                $allDays = [];
                for ($i = 1; $i <= $daysInMonth; $i++) {
                    $allDays[] = $i ;
                }
                // dd($allDays);
            @endphp
            <script>
                var ctx = document.getElementById('bigChart').getContext('2d');
                var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);
                gradientStroke.addColorStop(1, 'rgba(72,72,176,0.2)');
                gradientStroke.addColorStop(0.4, 'rgba(72,72,176,0.0)');
                gradientStroke.addColorStop(0, 'rgba(119,52,169,0)'); //purple colors
                var gradientFill = ctx.createLinearGradient(0, 230, 0, 50);
                gradientFill.addColorStop(0, 'rgba(72,72,176,0)');
                gradientFill.addColorStop(1, 'rgba(119,52,169,0.40)'); //purple colors

                //   get days in month
                const daysInMonth = (month, year) => {
                    return new Date(year, month, 0).getDate();
                };
                // show all days in month
                const showDaysInMonth = (month, year) => {
                    let days = [];
                    for (let i = 1; i <= daysInMonth(month, year); i++) {
                        days.push(i + "/" + month + "/" + year);
                    }
                    return days;
                };

                var myChart = new Chart(ctx, {
                    type: 'line',
                    responsive: true,
                    data: {
                        labels: showDaysInMonth(12, 2022),
                        datasets: [{
                            label: 'Revenue',
                            borderColor: '#d346b1',
                            pointBorderColor: '#FFF',
                            pointBackgroundColor: '#d346b1',
                            pointBorderWidth: 2,
                            pointHoverRadius: 4,
                            pointHoverBorderWidth: 1,
                            pointRadius: 4,
                            fill: true,
                            backgroundColor: gradientFill,
                            borderWidth: 2,
                            data: [
                                // total price by day in 2022
                                for (let i = 1; i <= daysInMonth(12, 2022); i++) {
                                    {{ $totalPriceByDay[$i] }}
                                }
                            ]
                        }]
                    },
                    options: {
                        maintainAspectRatio: false,
                        legend: {
                            display: false
                        },
                        tooltips: {
                            backgroundColor: '#f5f5f5',
                            titleFontColor: '#333',
                            bodyFontColor: '#666',
                            bodySpacing: 4,
                            xPadding: 12,
                            mode: "nearest",
                            intersect: 0,
                            position: "nearest"
                        },
                        responsive: true,
                        scales: {
                            y: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: false,
                                    color: 'rgba(29,140,248,0.0)',
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    suggestedMin: 60,
                                    suggestedMax: 125,
                                    padding: 20,
                                    fontColor: "#9a9a9a"
                                }
                            }],
                            x: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: true,
                                    color: 'rgba(225,78,202,0.1)',
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    padding: 20,
                                    fontColor: "#9a9a9a"
                                }
                            }]
                        }
                    }
                });
            </script>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Global Sales</h5>
                    <h4 class="card-title">Shipped Products</h4>
                    <div class="dropdown">
                        <button type="button"
                            class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret"
                            data-toggle="dropdown">
                            <i class="now-ui-icons loader_gear"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <a class="dropdown-item text-danger" href="#">Remove Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="lineChartDate"></canvas>
                        <script type="">
                            var ctx = document.getElementById('lineChartDate').getContext('2d');
                            var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);
                            gradientStroke.addColorStop(1, 'rgba(72,72,176,0.2)');
                            gradientStroke.addColorStop(0.4, 'rgba(72,72,176,0.0)');
                            gradientStroke.addColorStop(0, 'rgba(119,52,169,0)'); //purple colors
                            var myChart = new Chart(ctx, {
                                type: 'line',
                                responsive: true,
                                data: {
                                    labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
                                    datasets: [{
                                        label: 'Revenue',
                                        borderColor: '#d346b1',
                                        pointBorderColor: '#FFF',
                                        pointBackgroundColor: '#d346b1',
                                        pointBorderWidth: 2,
                                        pointHoverRadius: 4,
                                        pointHoverBorderWidth: 1,
                                        pointRadius: 4,
                                        fill: true,
                                        backgroundColor: gradientStroke,
                                        borderWidth: 2,
                                        data: [
                                            '{{ $totalPrice['Jan'] }}',
                                            '{{ $totalPrice['Feb'] }}',
                                            '{{ $totalPrice['Mar'] }}',
                                            '{{ $totalPrice['Apr'] }}',
                                            '{{ $totalPrice['May'] }}',
                                            '{{ $totalPrice['Jun'] }}',
                                            '{{ $totalPrice['Jul'] }}',
                                            '{{ $totalPrice['Aug'] }}',
                                            '{{ $totalPrice['Sep'] }}',
                                            '{{ $totalPrice['Oct'] }}',
                                            '{{ $totalPrice['Nov'] }}',
                                            '{{ $totalPrice['Dec'] }}',
                                        ]
                                    }]
                                },
                                options: {
                                    maintainAspectRatio: false,
                                    legend: {
                                        display: false
                                    },
                                    tooltips: {
                                        backgroundColor: '#f5f5f5',
                                        titleFontColor: '#333',
                                        bodyFontColor: '#666',
                                        bodySpacing: 4,
                                        xPadding: 12,
                                        mode: "nearest",
                                        intersect: 0,
                                        position: "nearest"
                                    },
                                    responsive: true,
                                    scales: {
                                        yAxes: [{
                                            barPercentage: 1.6,
                                            gridLines: {
                                                drawBorder: false,
                                                color: 'rgba(29,140,248,0.0)',
                                                zeroLineColor: "transparent",
                                            },
                                            ticks: {
                                                suggestedMin: 60,
                                                suggestedMax: 125,
                                                padding: 20,
                                                fontColor: "#9a9a9a"
                                            }
                                        }],
                                        xAxes: [{
                                            barPercentage: 1.6,
                                            gridLines: {
                                                drawBorder: true,
                                                color: 'rgba(225,78,202,0.1)',
                                                zeroLineColor: "transparent",
                                            },
                                            ticks: {
                                                padding: 20,
                                                fontColor: "#9a9a9a"
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">2018 Sales</h5>
                    <h4 class="card-title">All products</h4>
                    <div class="dropdown">
                        <button type="button"
                            class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret"
                            data-toggle="dropdown">
                            <i class="now-ui-icons loader_gear"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <a class="dropdown-item text-danger" href="#">Remove Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Email Statistics</h5>
                    <h4 class="card-title">24 Hours Performance</h4>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="barChartSimpleGradientsNumbers"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card  card-tasks">
                <div class="card-header ">
                    <h5 class="card-category">Backend development</h5>
                    <h4 class="card-title">Tasks</h4>
                </div>
                <div class="card-body ">
                    <div class="table-full-width table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="text-left">Sign contract for "What are conference organizers
                                        afraid of?"</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Edit Task">
                                            <i class="now-ui-icons ui-2_settings-90"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Remove">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="text-left">Lines From Great Russian Literature? Or E-mails
                                        From My Boss?</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Edit Task">
                                            <i class="now-ui-icons ui-2_settings-90"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Remove">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="text-left">Flooded: One year later, assessing what was lost
                                        and what was found when a ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Edit Task">
                                            <i class="now-ui-icons ui-2_settings-90"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title=""
                                            class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral"
                                            data-original-title="Remove">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-category">All Persons List</h5>
                    <h4 class="card-title"> Employees Stats</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Name
                                </th>
                                <th>
                                    Country
                                </th>
                                <th>
                                    City
                                </th>
                                <th class="text-right">
                                    Salary
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Dakota Rice
                                    </td>
                                    <td>
                                        Niger
                                    </td>
                                    <td>
                                        Oud-Turnhout
                                    </td>
                                    <td class="text-right">
                                        $36,738
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Minerva Hooper
                                    </td>
                                    <td>
                                        Curaçao
                                    </td>
                                    <td>
                                        Sinaai-Waas
                                    </td>
                                    <td class="text-right">
                                        $23,789
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Sage Rodriguez
                                    </td>
                                    <td>
                                        Netherlands
                                    </td>
                                    <td>
                                        Baileux
                                    </td>
                                    <td class="text-right">
                                        $56,142
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Doris Greene
                                    </td>
                                    <td>
                                        Malawi
                                    </td>
                                    <td>
                                        Feldkirchen in Kärnten
                                    </td>
                                    <td class="text-right">
                                        $63,542
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Mason Porter
                                    </td>
                                    <td>
                                        Chile
                                    </td>
                                    <td>
                                        Gloucester
                                    </td>
                                    <td class="text-right">
                                        $78,615
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

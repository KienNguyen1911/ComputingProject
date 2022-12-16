<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>VNPAY RESPONSE</title>
    <!-- Bootstrap core CSS -->
    {{-- <link href="{{ asset('/vnpay/bootstrap.min.css') }}" rel="stylesheet" /> --}}
    <!-- Custom styles for this template -->
    {{-- <link href="{{ asset('/vnpay/jumbotron-narrow.css') }}" rel="stylesheet"> --}}
    <script src="{{ asset('/vnpay/jquery-1.11.3.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/components/content.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<style>
    .form-group {
        display: flex;
    }

    p {
        margin-left: 10px;
    }
</style>

<body>
    @include('components.header')
    <!--Begin display -->
    <div class="section center my-5">
        @php
            $reservation = DB::table('reservations')
                ->where('id', $payment->reservation_id)
                ->first();
            // dd($reservation);
            $home = DB::table('homes')
                ->where('id', $reservation->home_id)
                ->first();
            $image = DB::table('images')
                ->where('home_id', $home->id)
                ->first();
            // dd($image);
            $dateStart = new DateTime($reservation->start);
            $dateEnd = new DateTime($reservation->end);
            $interval = $dateStart->diff($dateEnd);
            
            $price = $home->home_price;
            $price = number_format($price, 0, ',', '.');
            
            $total = $payment->total_price;
            $total = number_format($total, 0, ',', '.');
            // dd($interval->format('%a'));
        @endphp
        <div class="row">
            <div class="col-md-8">

                <div class="home-info">
                    <div class="home-preview">
                        <img src="/homes_image/{{ $image->image }}  " alt="" style="width: 100%;">
                    </div>
                    <div class="home-title">
                        <h2 style="font-weight: 700; padding: 16px 0px 8px; margin: 0px">{{ $home->home_name }}</h2>
                        <div class="sub-info" style="display: flex; justify-content: space-between">
                            <h4 style="margin: 0px; padding: 6px 8px; background: #C0EEE4; border-radius: 8px">Address:
                                {{ $home->home_address }}</h4>
                            <a href="{{ route('home-details', ['id'=>$home->id]) }}" class="btn btn-outline-primary">View Home Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="bill-info" style="border: 2px solid rgb(0 169 191); padding: 8px 12px; border-radius: 16px; box-shadow: rgba(0, 169, 191, 0.1) 5px 5px" >
                    <div class="header clearfix">
                        <h3 class="text-muted">VNPay Bill</h3>
                    </div>
                    <div class="table-responsive">
                        <div class="form-group">
                            <label>Bill Code: </label>
                            <p>
                                {{ $payment->reservation_id }}
                            </p>
                        </div>

                        <div class="form-group" style="display: block; margin-bottom: 12px;">
                            <label>Bill Information: </label>
                            <p style="margin: 0px">
                                {{ $payment->note }}
                            </p>
                        </div>
                        <div class="form-group">
                            <label>TmnCode:</label>
                            <label>
                                <p>
                                    {{ $payment->vnp_TmnCode }}
                            </label>
                            </p>
                        </div>
                        <div class="form-group">
                            <label>Payment Code in VNPAY: </label>
                            <p>
                                {{ $payment->vnp_TransactionNo }}
                            </p>
                        </div>
                        <div class="form-group">
                            <label>Bank Code: </label>
                            <p>
                                {{ $payment->vnp_BankCode }}
                            </p>
                        </div>
                        <div class="form-group">
                            <label>Pay Date: </label>
                            <p>
                                {{  date('Y-m-d H:i:s', strtotime($payment->vnp_PayDate)) }}
                            </p>
                        </div>

                        <br>
                        <div class="header clearfix">
                            <h3 class="text-muted">Bill Information</h3>
                        </div>

                        <div class="form-group">
                            <label>Home Price: </label>
                            <p>
                                {{ $price }} VND/night
                            </p>
                        </div>

                        <div class="form-group">
                            <label>Start Date </label>
                            <p>
                                {{ $reservation->start }}
                            </p>
                        </div>

                        <div class="form-group">
                            <label>End Date: </label>
                            <p>
                                {{ $reservation->end }}
                            </p>
                        </div>

                        <div class="form-group">
                            <label>Date Number: </label>
                            <p>
                                {{ $interval->format('%a') }} days
                            </p>
                        </div>

                        <div class="form-group">
                            <label>Total: </label>
                            <p>
                                {{ $total }} VND
                            </p>
                        </div>

                        <div class="form-group">
                            <label style="padding: 6px 0px">Result:</label>
                            <p
                                style="padding: 6px 8px; border-radius: 8px; background: greenyellow; margin-bottom: 0px;">
                                Pay Success
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

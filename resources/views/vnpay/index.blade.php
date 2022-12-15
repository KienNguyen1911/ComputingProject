<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>New Order</title>
    <!-- Bootstrap core CSS -->
    {{-- <link href="{{ asset('/vnpay/bootstrap.min.css') }}" rel="stylesheet" /> --}}
    <!-- Custom styles for this template -->
    {{-- <link href="{{ asset('/vnpay/jumbotron-narrow.css') }}" rel="stylesheet"> --}}
    <script src="{{ asset('/vnpay/jquery-1.11.3.min.js') }}"></script>
</head>

<body>
    @include('components.header')
    <div class="container" style="padding: 20px 80px">
        <div class="header clearfix">
            <h3 class="text-muted">VNPAY </h3>
        </div>
        <h3>New Order</h3>
        <div class="table-responsive">
            <form action="{{ route('postVNPay', ['id'=>$data->id]) }}" id="create_form" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="language">Payment method </label>
                    <select name="order_type" id="order_type" class="form-control">
                        <option value="billpayment">Bill Payment</option>
                        <option value="topup">Telephone Card</option>
                        <option value="fashion">Fashion</option>
                        <option value="other">Other - more at VNPAY</option>
                    </select>
                </div>
                {{-- bỏ mã hóa đơn --}}
                <div class="form-group mt-2">
                    <label for="amount">Amount</label>
                    <input class="form-control" id="amount" name="amount" type="number" value="{{$data->total_price}}" readonly />
                </div>
                <div class="form-group mt-2">
                    <label for="order_desc">Payment Descript</label>
                    <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Payment Descript</textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="bank_code">Bank</label>
                    <select name="bank_code" id="bank_code" class="form-control">
                        <option value="">No choice</option>
                        <option value="NCB"> Bank NCB</option>
                        <option value="AGRIBANK"> Bank Agribank</option>
                        <option value="SCB"> Bank SCB</option>
                        <option value="SACOMBANK">Bank SacomBank</option>
                        <option value="EXIMBANK"> Bank EximBank</option>
                        <option value="MSBANK"> Bank MSBANK</option>
                        <option value="NAMABANK"> Bank NamABank</option>
                        <option value="VNMART"> E-Wallet VnMart</option>
                        <option value="VIETINBANK">Bank Vietinbank</option>
                        <option value="VIETCOMBANK"> Bank VCB</option>
                        <option value="HDBANK">Bank HDBank</option>
                        <option value="DONGABANK"> Bank Dong A</option>
                        <option value="TPBANK"> Bank TPBank</option>
                        <option value="OJB"> Bank OceanBank</option>
                        <option value="BIDV"> Bank BIDV</option>
                        <option value="TECHCOMBANK"> Bank Techcombank</option>
                        <option value="VPBANK"> Bank VPBank</option>
                        <option value="MBBANK"> Bank MBBank</option>
                        <option value="ACB"> Bank ACB</option>
                        <option value="OCB"> Bank OCB</option>
                        <option value="IVB"> Bank IVB</option>
                        <option value="VISA"> Pay by VISA/MASTER</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="language">Language</label>
                    <select name="language" id="language" class="form-control">
                        <option value="en">English</option>
                        <option value="vn">Tiếng Việt</option>
                    </select>
                </div>
                {{-- bỏ thời hạn thanh toán --}}
 
                {{-- <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Post</button> --}}
                <button type="submit" name="redirect" id="redirect" class="btn btn-primary btn-block mt-3" style="width: 100%">Payment</button>

            </form>
        </div>
        <p>
            &nbsp;
        </p>
        <footer class="footer">
            <p>&copy; VNPAY <?php echo date('Y'); ?></p>
        </footer>
    </div>




</body>

</html>

<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    //
    public function getPayment(Request $request, $id)
    {

        $data = Reservation::find($id);
        // $value = $_SESSION['reservation_id'] = $id;
        // dd($value);
        return view('components.payment', ['data' => $data]);
    }

    public function postPayment(Request $request, $id)
    {
        $data = Reservation::find($id);
        $data->total_price = $request->total_price;
        return view('vnpay.index', ['data' => $data]);
    }

    public function postVNPay(Request $request)
    {
        // dd($request);
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        // $vnp_Returnurl = "http://localhost:8000/payment/10";
        $vnp_TmnCode = "RM8VTI9U"; //Mã website tại VNPAY 
        $vnp_HashSecret = "YDBWOBZLBAWFDGIVAUIDWDFCASTQAJRH"; //Chuỗi bí mật

        $randomString = Str::random(30);
        $vnp_TxnRef = $randomString; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $request->order_desc;
        $vnp_OrderType = $request->order_type;
        $vnp_Amount = $request->amount * 100;
        $vnp_Locale = $request->language;
        $vnp_BankCode = $request->bank_code;
        // dd($reseration_id);
        // $vnp_OrderInfo = 'Thanh toán đơn hàng';
        // $vnp_OrderType = 'billpayment';
        // $vnp_Amount =  10000 * 100;
        // $vnp_Locale = 'vn';
        // $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        // session_start();
        $_SESSION['reservation_id'] = $request->id;
        // dd($_SESSION['reservation_id']);

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => route('getVNPayReturn'),
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_Bill_Mobile"=>$request->id
        );
        dd($inputData);

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }
        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        // dd($inputData);

        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url , 'reservation_id' => $request->id
        );

        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url );
            die();
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo
    }

    public function getVNPayReturn(Request $request)
    {
        # code...
        // dd($request->toArray());
        $vnpayData = $request->all();
        dd($vnpayData);
    }

    public function randomString()
    {
        $randomString = Str::random(30);
        return $randomString;
    }
}

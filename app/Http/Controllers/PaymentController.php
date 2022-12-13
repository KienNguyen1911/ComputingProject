<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function getPayment(Request $request, $id)
    {

        $data = Reservation::find($id);
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

        $randomString = $request->id;
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
        $value = $request->id;
        // dd($value);
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
            // "RESERVATION_ID"=>$request->id
        );
        // dd($inputData);

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
        $reservation = Reservation::find($vnpayData['vnp_TxnRef']);
        $vnp_TxnRef = $reservation->id;
        $vnp_Amount = $vnpayData['vnp_Amount'] / 100;
        $vnp_BankCode = $vnpayData['vnp_BankCode'];
        $vnp_CardType = $vnpayData['vnp_CardType'];
        $vnp_PayDate = $vnpayData['vnp_PayDate'];
        $vnp_ResponseCode = $vnpayData['vnp_ResponseCode'];
        $vnp_TmnCode = $vnpayData['vnp_TmnCode'];
        $vnp_TransactionNo = $vnpayData['vnp_TransactionNo'];
        $vnp_OrderInfo = $vnpayData['vnp_OrderInfo'];
        $vnp_BankTranNo = $vnpayData['vnp_BankTranNo'];

        // $vnp_PayDate = date('Y-m-d H:i:s', strtotime($vnp_PayDate));

        $payment = new Payment();
        $payment->reservation_id = $vnp_TxnRef;
        $payment->total_price = $vnp_Amount;
        $payment->note = $vnp_OrderInfo;
        $payment->vnp_TmnCode = $vnp_TmnCode;
        $payment->vnp_TransactionNo = $vnp_TransactionNo;
        $payment->vnp_BankCode = $vnp_BankCode;
        $payment->vnp_PayDate = $vnp_PayDate;
        // dd($payment);
        $payment->save();

        return view('vnpay.vnpay_return', ['payment' => $payment]);
    }

    public function getPaymentDetail(Request $request, $id)
    {
        # code...
        $payment = DB::table('payments')->where('reservation_id', $id)->first();
        return view('vnpay.vnpay_return', ['payment' => $payment]);
    }

    // ================== ADMIN ==================
    public function getPaymentList()
    {
        # code...
        $data = DB::table('payments')
        ->join('reservations', 'payments.reservation_id', '=', 'reservations.id')
        ->join('homes', 'reservations.home_id', '=', 'homes.id')
        ->join('users', 'reservations.user_id', '=', 'users.id')	
        ->select('payments.*', 'reservations.start', 'reservations.end','reservations.user_id','homes.home_name', 'users.name as user_name')
        ->get();
        // dd($data);
        return view('admin.payment-manage.view', ['data' => $data]);
    }

    public function getPaymentDetailAdmin(Request $request, $id)
    {
        # code...
        $payment = DB::table('payments')->where('payments.id', $id)
        ->join('reservations', 'payments.reservation_id', '=', 'reservations.id')
        ->join('homes', 'reservations.home_id', '=', 'homes.id')
        ->join('users', 'reservations.user_id', '=', 'users.id')
        ->first();
        // dd($payment);
        return view('admin.payment-manage.payment-details', ['payment' => $payment]);
    }

    public function getDeletePayment($id)
    {
        # code...
        $payment = Payment::find($id);
        $payment->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }

    public function searchPayment(Request $request)
    {
        # code...
        $data = DB::table('payments')
        ->join('reservations', 'payments.reservation_id', '=', 'reservations.id')
        ->join('homes', 'reservations.home_id', '=', 'homes.id')
        ->join('users', 'reservations.user_id', '=', 'users.id')
        ->select('payments.*', 'reservations.start', 'reservations.end','reservations.user_id','homes.home_name', 'users.name as user_name')
        ->where('users.name', 'like', '%'.$request->search.'%')
        ->orWhere('homes.home_name', 'like', '%'.$request->search.'%')
        ->orWhere('users.id', 'like', '%'.$request->search.'%')
        ->get();
        return view('admin.payment-manage.view', ['data' => $data]);
    }

    public function filterPaymentByDate(Request $request)
    {
        # code...
        // convert date to text
        
        $date = explode('-', $request->date);
        $date = implode('', $date);
        // dd($date);
        $data = DB::table('payments')
        ->join('reservations', 'payments.reservation_id', '=', 'reservations.id')
        ->join('homes', 'reservations.home_id', '=', 'homes.id')
        ->join('users', 'reservations.user_id', '=', 'users.id')
        ->select('payments.*', 'reservations.start', 'reservations.end','reservations.user_id','homes.home_name', 'users.name as user_name')
        ->where('payments.vnp_PayDate', 'like', '%'.$date.'%')
        ->get();
        return view('admin.payment-manage.view', ['data' => $data]);
    }
}

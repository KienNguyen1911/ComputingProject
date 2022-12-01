<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function getPayment($id)
    {
        $data = Reservation::find($id);
        return view('components.payment', ['data' => $data]);
    }
}

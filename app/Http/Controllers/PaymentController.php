<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function getPayment()
    {
        return view('components.confirm-pay');
    }
}

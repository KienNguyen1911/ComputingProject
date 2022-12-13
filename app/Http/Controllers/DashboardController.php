<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function getDashboard()
    {
        $payment = DB::table('payments')
        ->join('reservations', 'payments.reservation_id', '=', 'reservations.id')
        ->join('homes', 'reservations.home_id', '=', 'homes.id')
        ->join('users', 'reservations.user_id', '=', 'users.id')
        ->get();
        // dd($payment);
        return view('admin.dashboard', ['payment' => $payment]);
    }

    public function getDemo()
    {
        return view('admin.demo');
    }

    public function getNotifications()
    {
        return view('admin.notifications');
    }

    public function getTables()
    {
        return view('admin.tables');
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboard()
    {
        return view('admin.dashboard');
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

    public function getUser()
    {
        return view('admin.user');
    }
}

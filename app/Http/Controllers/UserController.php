<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getUser()
    {
        $users = User::all();
        return view('admin.user-manage.view', ['users' => $users]);
    }
}

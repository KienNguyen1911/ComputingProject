<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    // ==================== USER ====================
    public function postReservation(Request $request, $id)
    {
        if(Auth::check() == 'true')
        {
            $userid = Auth::user()->id;
            $data = DB::table('reservations')->where('home_id', $id)->where('user_id', $userid)->first();
            // dd($data);
            if ($data == null) {
                $new_reservation = new Reservation();
                $new_reservation->user_id = Auth::user()->id;
                $new_reservation->home_id = $id;
                $new_reservation->start = $request->start;
                $new_reservation->end = $request->end;
                // $new_reservation->total_price = $request->total_price;
                // $new_reservation->status = $request->status;
                $new_reservation->save();
                // dd($new_reservation);
                return redirect()->route('getPayment', ['id' => $new_reservation->id]);
                // return redirect()->route('getPayment');
            } else {
                $reservation = Reservation::find($data->id);
                $reservation->user_id = $userid;
                $reservation->home_id = $id;
                $reservation->start = $request->start;
                $reservation->end = $request->end;
                $reservation->save();
                return redirect()->route('getPayment', ['id' => $reservation->id]);
                // return redirect()->back()->with('error', 'You have already booked this home');
            }
        }
        else
        {
            return redirect()->route('signin');
        }
    }




    // ==================== ADMIN ====================
    public function viewReservation()
    {
        # code...
        // $data = Reservation::all();
        $data = DB::table('reservations')
            ->join('homes', 'reservations.home_id', '=', 'homes.id')
            ->join('users', 'reservations.user_id', '=', 'users.id')
            ->select('reservations.*', 'homes.home_name', 'users.name')
            ->get();
            // dd($data);
        return view('admin.reservation-manage.view', ['data' => $data]);
    }

    public function getAddReservation()
    {
        # code...
        $users = User::all();
        $homes = Home::all();
        return view('admin.reservation-manage.add', ['users' => $users], ['homes' => $homes]);
    }

    public function createReservation(Request $request)
    {
        # code...
        $userid = $request->user_id;
        $homeid = $request->home_id;

        $check = DB::table('reservations')->where('user_id', $userid)->where('home_id', $homeid)->first();

        if($check == null)
        {
            $new_reservation = new Reservation();
            $new_reservation->user_id = $request->user_id;
            $new_reservation->home_id = $request->home_id;
            $new_reservation->start = $request->start;
            $new_reservation->end = $request->end;
            // $new_reservation->total_price = $request->total_price;
            // $new_reservation->status = $request->status;
            $new_reservation->save();
            return redirect()->route('viewReservation');
        }
        else
        {
            $reservation = Reservation::find($check->id);
            // $new_reservation = new Reservation();
            $reservation->user_id = $request->user_id;
            $reservation->home_id = $request->home_id;
            $reservation->start = $request->start;
            $reservation->end = $request->end;
            // $reservation->total_price = $request->total_price;
            // $reservation->status = $request->status;
            $reservation->save();
            return redirect()->route('viewReservation');
            // return redirect()->back()->with('error', 'This user has already booked this home');
        }

    }

    public function getEditReservation($id)
    {
        # code...
        $reservation = Reservation::find($id);
        $users = User::all();
        $homes = Home::all();
        return view('admin.reservation-manage.edit', ['reservation' => $reservation, 'users' => $users, 'homes' => $homes]);
    }

    public function postEditReservation(Request $request, $id)
    {
        # code...
        $reservation = Reservation::find($id);
        $reservation->user_id = $request->user_id;
        $reservation->home_id = $request->home_id;
        $reservation->start = $request->start;
        $reservation->end = $request->end;
        // $reservation->total_price = $request->total_price;
        // $reservation->status = $request->status;
        $reservation->save();
        return redirect()->route('viewReservation');
    }

    public function getDeleteReservation($id)
    {
        # code...
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect()->route('viewReservation');
    }
}

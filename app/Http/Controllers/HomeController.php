<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Image;
use App\Models\Type;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;
use App\Models\Service;

class HomeController extends Controller
{
    //
    // ==================== ADMIN =================================
    public function getHome()
    {
        $data = Home::all();
        $type = Type::all();
        // $service = Service::all();
        // dd($data);
        return view('admin.product-manage.view', ['data' => $data, 'type' => $type]);
    }

    public function getAddHome()
    {
        $type = Type::all();
        $service = Service::all();
        return view('admin.product-manage.add', ['type' => $type], ['service' => $service]);
    }


    public function postAddHome(Request $request)
    {
        try {
            //code...

            $request->validate([
                'type_id' => 'required',
                // 'service_id' => 'required',
                'home_name' => 'required',
                'home_description' => 'required',
                'home_price' => 'required',
                'home_address' => 'required',
                'home_status' => 'required',
                'home_capacity' => 'required',
                'home_rating' => 'required',
            ]);
            $new_home = new Home();
            $new_home->type_id = $request->type_id;
            $new_home->service = json_encode($request->service);
            $new_home->home_name = $request->home_name;
            $new_home->home_description = $request->home_description;
            $new_home->home_price = $request->home_price;
            $new_home->home_address = $request->home_address;
            $new_home->home_status = $request->home_status;
            $new_home->home_capacity = $request->home_capacity;
            $new_home->home_rating = $request->home_rating;
            $new_home->save();
            // dd($new_home);
            if ($request->has('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = $new_home['home_name'] . '-image-' . time() . rand(1, 1000) . '.' . $image->extension();
                    $image->move(public_path('homes_image'), $imageName);
                    $new_image = new Image();
                    $new_image->home_id = $new_home->id;
                    $new_image->image = $imageName;
                    $new_image->save();
                }
            }

            return redirect()->route('view.home');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('errors', $th->getMessage());
        }
    }

    public function images($id)
    {
        $home = Home::find($id);
        if (!$home) abort(404);
        $images = $home->images;
        return view('admin.product-manage.images', ['images' => $images], ['home' => $home]);
    }

    public function deleteImage($id)
    {
        $image = Image::find($id);
        if (!$image) abort(404);
        unlink(public_path('homes_image/' . $image->image));
        $image->delete();
        return redirect()->back();
    }


    public function getEditHome($id)
    {
        $home = Home::find($id);
        // dd($home);
        // if (!$home) abort(404);
        $type = Type::all();
        $service = Service::all();
        $servicehome = json_decode($home->service);
        return view('admin.product-manage.edit', ['home' => $home, 'type' => $type, 'service' => $service, 'servicehome' => $servicehome]);
    }

    public function postEditHome(Request $request, $id)
    {
        try {
            //code...
            $home = Home::find($id);
            if (!$home) abort(404);
            $home->type_id = $request->type_id;
            $home->service = json_encode($request->service);
            $home->home_name = $request->home_name;
            $home->home_description = $request->home_description;
            $home->home_price = $request->home_price;
            $home->home_address = $request->home_address;
            $home->home_status = $request->home_status;
            $home->home_capacity = $request->home_capacity;
            $home->home_rating = $request->home_rating;
            $home->save();

            if ($request->has('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = $home['home_name'] . '-image-' . time() . rand(1, 1000) . '.' . $image->extension();
                    $image->move(public_path('homes_image'), $imageName);
                    $new_image = new Image();
                    $new_image->home_id = $home->id;
                    $new_image->image = $imageName;
                    $new_image->save();
                }
                // dd($new_image);
            }
            return redirect()->route('view.home');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function getDeleteHome($id)
    {
        // chưa có xóa ảnh theo home
        $home = Home::find($id);
        if ($home->images) {
            foreach ($home->images as $image) {
                $image->delete();
                unlink(public_path('homes_image/' . $image->image));
            }
        }
        $home->delete();
        return redirect()->route('view.home');
    }

    // ==================== USER =================================
    public function landingPage()
    {
        # code...
        $data = Home::all();
        $type = Type::all();
        $service = Service::all();
        return view('welcome', ['data' => $data, 'type' => $type, 'service' => $service]);
    }

    public function allHome()
    {
        $data = Home::all();
        $type = Type::all();
        $service = Service::all();
        return redirect()->route('allhome', ['data' => $data, 'type' => $type, 'service' => $service]);
    }

    public function getAllHome()
    {
        $home = Home::all();
        $type = Type::all();
        $service = Service::all();
        $image = Image::all();
        // $image = Image::where('home_id', $id)->first();
        return view('components.allhome', ['home' => $home, 'type' => $type, 'service' => $service, 'image' => $image]);
    }

    public function getHomeDetails($id)
    {
        $home = Home::find($id);
        $servicehome = json_decode($home->service);
        $image = Image::where('home_id', $id)->get();
        // dd($image);
        return view('home-details', ['home' => $home, 'image' => $image, 'servicehome' => $servicehome]);
    }
}

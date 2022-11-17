<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Image;

class HomeController extends Controller
{
    //
    public function getHome()
    {
        $home = Home::all();
        return view('admin.product-manage.view', ['home' => $home]);
    }

    public function getAddHome()
    {
        return view('admin.product-manage.add');
    }


    public function postAddHome(Request $request)
    {
        try {
            //code...
            $new_home = new Home();
            $new_home->home_name = $request->home_name;
            $new_home->home_description = $request->home_description;
            $new_home->home_price = $request->home_price;
            $new_home->home_address = $request->home_address;
            $new_home->home_status = $request->home_status;
            $new_home->home_capacity = $request->home_capacity;
            $new_home->home_rating = $request->home_rating;
            $new_home->save();
            // dd($new_home);
            if($request->has('images')){
                foreach($request->file('images')as $image){
                    $imageName = $new_home['home_name'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                    $image->move(public_path('homes_image'),$imageName);
                    // Image::create([
                    //     'home_id'=>$new_home->id,
                    //     'image'=>$imageName
                    // ]);
                    $new_image = new Image();
                    $new_image->home_id = $new_home->id;
                    $new_image->image = $imageName;
                    $new_image->save();
                }
                // dd($new_image);
            }
            
            return redirect()->route('view.home');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', $th->getMessage());
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
        unlink(public_path('homes_image/'.$image->image));
        $image->delete();
        return redirect()->back();
    }


    public function getEditHome($id)
    {
        $home = Home::find($id);
        if (!$home) abort(404);
        return view('admin.product-manage.edit', ['home' => $home]);
    }

    public function postEditHome(Request $request, $id)
    {
        try {
            //code...
            $home = Home::find($id);
            if (!$home) abort(404);
            $home->home_name = $request->home_name;
            $home->home_description = $request->home_description;
            $home->home_price = $request->home_price;
            $home->home_address = $request->home_address;
            $home->home_status = $request->home_status;
            $home->home_capacity = $request->home_capacity;
            $home->home_rating = $request->home_rating;
            $home->save();

            if($request->has('images')){
                foreach($request->file('images')as $image){
                    $imageName = $home['home_name'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                    $image->move(public_path('homes_image'),$imageName);
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
        if($home -> images){
            foreach($home -> images as $image){
                $image -> delete();
                unlink(public_path('homes_image/'.$image->image));
            }
        }
        $home->delete();
        return redirect()->route('view.home');
    }
}

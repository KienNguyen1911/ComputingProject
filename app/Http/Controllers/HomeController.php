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
        $data = $request->validate([
            'home_name' => 'required',
            'home_description' => 'required',
            'home_price' => 'required',
            'home_address' => 'required',
            'home_status' => 'required',
            'home_capacity' => 'required',	
        ]);
        $new_home = Home::create($data);
        if($request->has('images')){
            foreach($request->file('images')as $image){
                $imageName = $data['home_name'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('homes'),$imageName);
                Image::create([
                    'home_id'=>$new_home->id,
                    'image'=>$imageName
                ]);
            }
        }
        // return redirect()->route('view.home');
    }

    public function images($id){
        $home = Home::find($id);
        if(!$home) abort(404);
        $images = $home->images;
        return view('images',['images'=>$images], ['home' => $home]);
    }
}

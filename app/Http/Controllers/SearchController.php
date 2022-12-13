<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function postSearch(Request $request)
    {
        $search = $request->home_address;
        $data = Home::where('home_address', 'like', '%' . $search . '%')->get();
        // dd($data);
        
        return view('components.resultSearch', ['data' => $data, 'search' => $search]);
    }

    public function postFilter(Request $request)
    {
        // $search = $request->home_address;
        // $data = Home::where('home_address', 'like', '%' . $search . '%')->get();
        // dd($request->all());
        $filter_type = $request->type_name;
        // $data = Home::where('type_id', 'like', '%' . $filter_type . '%')->get();
        $filter_services = $request->service;
        $filter_services = array_filter($filter_services);
        foreach ($filter_services as $key => $value) {
            // dd($value);
            $data = Home::where('service', 'like', '%' . $value . '%')->get();
        }
        // $filter_services = json_decode($filter_services);
        // dd($filter_services);
        // $data = Home::where('service', 'like', '%' . $filter_services . '%')->get();
        $data = Home::where('type_id', 'like', '%' . $filter_type . '%')->get();
        // dd($data);
        return view('components.resultSearch', ['data' => $data]);
    }
}

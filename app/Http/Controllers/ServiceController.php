<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //
    public function getService()
    {
        $services = Service::all();
        return view('admin.service-manage.view', ['services' => $services]);
    }

    public function getAddService()
    {
        return view('admin.service-manage.add');
    }

    public function postAddService(Request $request)
    {
        $this->validate($request, [
            'service_name' => 'required|min:3|max:100',
            'service_price' => 'required|numeric',
            'service_description' => 'required|min:3|max:100',
        ]);
        $service = new Service();
        $service->service_name = $request->service_name;
        $service->service_price = $request->service_price;
        $service->service_description = $request->service_description;
        $service->save();
        return redirect()->route('view.service')->with('message', 'Add service successfully!');
    }
    
    public function getEditService($id)
    {
        $service = Service::find($id);
        return view('admin.service-manage.edit', ['service' => $service]);
    }

    public function postEditService(Request $request, $id)
    {
        $this->validate($request, [
            'service_name' => 'required|min:3|max:100',
            'service_price' => 'required|numeric',
            'service_description' => 'required|min:3|max:100',
        ]);
        $service = Service::find($id);
        $service->service_name = $request->service_name;
        $service->service_price = $request->service_price;
        $service->service_description = $request->service_description;
        $service->save();
        return redirect()->route('view.service')->with('message', 'Edit service successfully!');
    }

    public function getDeleteService($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('view.service')->with('message', 'Delete service successfully!');
    }
}

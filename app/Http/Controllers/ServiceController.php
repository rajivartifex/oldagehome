<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function list()
    {
        $services = Service::all();
        return view('admin.pages.services.servicelist',compact('services'));
    }
    public function manage($id)
    {
        $service = Service::find($id);
        return view('admin.pages.services.manage',compact('service'));
    }

    public function store(Request $request)
    {
        /* Edit Service */
        if($request->serviceId){
            $service = Service::find($request->serviceId);
            $service->service_title = $request->service_title;
            $service->service_desc = $request->service_desc;
            $service->save();
            session()->flash('success', 'Service Updated Successfully!');
            return redirect()->route('service-list');
        }else{
            /* Add Service */
            $service = new Service();
            $service->service_title = $request->service_title;
            $service->service_desc = $request->service_desc;
            $service->save();
            session()->flash('success', 'Service Added Successfully!');
            return redirect()->route('service-list');
        }
    }
}

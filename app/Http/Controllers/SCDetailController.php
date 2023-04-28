<?php

namespace App\Http\Controllers;

use App\Models\SeniorCitizen;
use Illuminate\Http\Request;

class SCDetailController extends Controller
{
    public function index()
    {
        $scdetails = SeniorCitizen::all();
        return view('admin.pages.sc.index',compact('scdetails'));
    }

    public function manage($id)
    {
        $scDetail = SeniorCitizen::find($id);
        return view('admin.pages.sc.manage',compact('scDetail'));
    }

    public function store(Request $request)
    {
        if($request->scId){
            $scDetail = SeniorCitizen::find($request->scId);
            $scDetail->registration_number = $request->registration_number;
            $scDetail->name = $request->name;
            $scDetail->dob = $request->dob;
            $scDetail->contact_no = $request->contact_no;
            $scDetail->communication_address = $request->communication_address;
            $scDetail->emergency_address = $request->emergency_address;
            $scDetail->registation_date = $request->registation_date;
            $scDetail->save();
            session()->flash('success', 'Senior Citizen Updated Successfully!');
            return redirect()->route('sc-index');
        }else{
            /* Add Service */
            $scDetail = new SeniorCitizen();
            $scDetail->registration_number = $request->registration_number;
            $scDetail->name = $request->name;
            $scDetail->dob = $request->dob;
            $scDetail->contact_no = $request->contact_no;
            $scDetail->communication_address = $request->communication_address;
            $scDetail->emergency_address = $request->emergency_address;
            $scDetail->registation_date = $request->registation_date;
            $scDetail->save();
            session()->flash('success', 'Senior Citizen Added Successfully!');
            return redirect()->route('sc-index');
        }
    }
}

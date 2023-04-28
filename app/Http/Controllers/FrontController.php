<?php

namespace App\Http\Controllers;

use App\Models\SeniorCitizen;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function services()
    {
        $services = Service::all();
        return view('pages.services',compact('services'));
    }

    public function home()
    {
        return view('pages.main');
    }

    public function search()
    {
        return view('pages.search');
    }

    public function findscDetail(Request $request)
    {
        if($request->ajax()){
            $search = $request->search;
            if($search){
                $data = SeniorCitizen::where('registration_number','LIKE','%'. $search.'%')->get();
                return response()->json($data);
            }
        }
    }

    public function rules()
    {
        return view('pages.rules');
    }
}

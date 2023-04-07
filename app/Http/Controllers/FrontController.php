<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function services()
    {
        $services = Service::all();
        return view('pages.services',compact('services'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function index()
    {
        return view('pages.enq');
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        session()->flash('success', 'Enquiry Added Successfully!');
        return back();
    }

    public function backendEnqList()
    {
        $contacts = Contact::all();
        return view('admin.pages.enq',compact('contacts'));
    }
}

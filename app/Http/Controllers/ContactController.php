<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Rules\ZipCodeRule;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('contact.index');
    }

    public function confirm(ContactRequest $request)
    {
        $inputs = $request->all();
        return view('contact.confirm',
        ['inputs'=>$inputs,
        ]);
    }

    public function thanks(Request $request)
    {
        $contact = new Contact();
        $contact->create(['fullname','gender','email','postcode','address','building_name','opinion'])
        ->save();
        return view('contact.thanks');
    }
}

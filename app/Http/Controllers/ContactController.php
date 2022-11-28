<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Rules\ZipCodeRule;
use Illuminate\Pagination\Paginator;

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
        Contact::create([
            'fullname'=>$request->surname,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'postcode'=>$request->postcode,
            'address'=>$request->address,
            'building_name'=>$request->building_number,
            'opinion'=>$request->text
        ]);

        $postcode = $request ->postcode;
        mb_convert_kana($postcode, "n");

        return view('contact.thanks');
    }

    public function search()
    {
        $contacts = Contact::Paginate(9);
        return view('contact.search',['contacts' => $contacts]);
    }

    public function find(Request $request)
    {
        
    }
}

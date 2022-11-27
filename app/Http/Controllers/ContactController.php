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

    public function regist(Request $request)
    {
        if ($request->get('back')) {
        return redirect('contact.index')->withInput();
    }
    return;
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
        return redirect()->route('contact')
         ->with(['message' => 'お問い合わせが完了しました。', 'status'=> 'info']);
    }

    public function search(Request $request)
    {
        $searchs = Contact::Paginate(4);
        dd($searchs);
        return view('contact.search',['searchs => $searchs']);
    }
}

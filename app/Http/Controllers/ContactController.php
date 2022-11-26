<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

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
    public function confirm(Request $request)
    {
        $inputs = $request->all();
        dd($inputs);
        return view('contact.confirm',[
            'inputs'=>$inputs,
        ]);
    }
}

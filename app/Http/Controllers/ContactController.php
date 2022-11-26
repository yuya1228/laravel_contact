<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index');
    }
    public function confirm(Request $request)
    {
        $contacts = $request->inquiry;
        return view(contact.confirm,compact('contact'));
    }
}

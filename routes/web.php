<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('contact',ContactController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;


Route::get('/', function () {
    return view('welcome');
});

Route::get('contact',[ContactController::class, 'index'])->name('contact.index');
Route::get('contact/confirm',[ContactController::class,'confirm']);
Route::post('contact/confirm',[ContactController::class,'confirm'])->name('contact.confirm');
Route::get('contact/thanks',[ContactController::class,'thanks']);
Route::post('contact/thanks',[ContactController::class,'thanks'])->name('contact.thanks');
Route::get('contact/search',[ContactController::class,'search'])->name('contact.search');
Route::delete('/destroy{id}',[ContactController::class,'destroy'])->name('contact.destroy');



<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Navs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::all();
        $nav = Navs::all();
        return view('/contact_us' , compact('contact','nav'));
    }
}

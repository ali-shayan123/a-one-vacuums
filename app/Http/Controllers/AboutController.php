<?php

namespace App\Http\Controllers;
use App\About;
use App\Navs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = About::all();
        $nav = Navs::all();
        return view('/about_us' , compact('about','nav'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Home;
use App\Reviews;
use App\Navs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Home::all();
        $review = Reviews::all();
        $nav = Navs::all();
        return view('index' , compact('data','review','nav'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Products;
use App\Navs;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index($id){
        $product = Products::all();
        $nav = Navs::all();
        return view('products', compact('nav'));
    }

   
}

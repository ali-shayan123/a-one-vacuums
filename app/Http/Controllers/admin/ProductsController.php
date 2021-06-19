<?php

namespace App\Http\Controllers\admin;

use App\Categories;
use App\Products;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use File;


class ProductsController extends BaseController
{
    public function index(){
        $data['products'] = Products::all();

        return view('products.index' , $data);
    }
    public function add(){
        $data['categories'] = Categories::all();

        return view('products.add' , $data);
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required'
        
        ]);

        if ($validator->fails()) {
            return redirect('products/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        if($request->image){
            $imagename = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/products'), $imagename);


        }

        Products::create([
            'name' => $request->name ,
            'image' => $imagename ,
            'category_id' => $request->category_id , 
            'price' => $request->price ,
            // 'sales_price' => $request->sales_price ,
            // 'status' => $request->status 
            
        ]);

        return redirect('products');
    }

    public function edit($id){
        $records = Products::find($id);
        $data['records'] = $records;
        $data['categories'] = Categories::all();

        return view('products/edit' , $data);
    }

    public function update(Request $request , $id){
        $records = Products::find($id);
        $data['products'] = $records;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('products/edit')
                        ->withErrors($validator)
                        ->withInput();
        }


        if ($request->image && File::exists(public_path('uploads/products/' . $records->image))) {
            File::delete(public_path('uploads/products/' . $records->image));
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/products/'), $imageName);

        $records->image = ($request->image) ? $imageName : $records->image;

        }

        $records->name = $request->name;
        $records->category_id = $request->category_id;
        $records->price = $request->price;
        $records->save();

        return redirect('products');


    }

}
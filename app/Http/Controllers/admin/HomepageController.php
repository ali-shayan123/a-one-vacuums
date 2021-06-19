<?php

namespace App\Http\Controllers\admin;

use File;
use Illuminate\Support\Facades\Validator;
use App\Home;
use App\Reviews;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class HomepageController extends BaseController
{
    public function index(){       
        $data['home'] = Home::all();
        return view('admin.home.index' , $data);
    }

    //Reviews
    public function indexreview(){        
        $data['review'] = Reviews::all();
        return view('admin.home.indexreview' , $data);
    }
    //Reviews

    public function edit($id){
        $records = Home::find($id);
        $data['records'] = $records;
        $data['home'] = Home::all();
        return view('admin.home.edit' , $data);
    }

    //Reviews
    public function editreview($id){
        $records = Reviews::find($id);
        $data['records'] = $records;
        $data['review'] = Reviews::all();
        return view('admin.home.editreview' , $data);
    }
    //Reviews

    public function update(Request $request , $id){
        $records = Home::find($id);
        $data['home'] = $records;
        $validator = Validator::make($request->all(), [
            'welcome' => 'required',
            'tagline' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admin.home.index')
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->banner && File::exists(public_path('uploads/home' . $records->banner))) {
            File::delete(public_path('uploads/home' . $records->banner));
            $imageName = time() . '.' . $request->banner->extension();
            $request->banner->move(public_path('uploads/home'), $imageName);

        $records->banner = ($request->banner) ? $imageName : $records->banner;

        }

        $records->welcome = $request->welcome;
        $records->span = $request->span;
        $records->tagline = $request->tagline;
        $records->describe = $request->describe;
        $records->save();

        return redirect('home');


    }

    //Reviews
    public function updatereview(Request $request , $id){
        $records = Reviews::find($id);
        $data['review'] = $records;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admin.home.indexreview')
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->image && File::exists(public_path('uploads/review' . $records->image))) {
            File::delete(public_path('uploads/review' . $records->image));
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/review'), $imageName);

        $records->image = ($request->image) ? $imageName : $records->image;

        }

        $records->our_clients = $request->our_clients;
        $records->tagline = $request->tagline;
        $records->name = $request->name;
        $records->description = $request->description;
        $records->save();

        return redirect('homereview');


    }
    //Reviews

}
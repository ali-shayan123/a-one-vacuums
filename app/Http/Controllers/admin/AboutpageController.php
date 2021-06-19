<?php

namespace App\Http\Controllers\admin;

use File;
use Illuminate\Support\Facades\Validator;
use App\About;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AboutpageController extends BaseController
{
    public function index(){
        
        $data['about'] = About::all();
        return view('admin.about.index' , $data);

    }

    public function edit($id){
        $records = About::find($id);
        $data['records'] = $records;
        $data['about'] = About::all();
        return view('admin.about.edit' , $data);
    }
    

    public function update(Request $request , $id){
        $records = About::find($id);
        $data['about'] = $records;
        $validator = Validator::make($request->all(), [
            'welcome' => 'required',
            'tagline' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('admin.about.index')
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->banner && File::exists(public_path('uploads/about' . $records->banner))) {
            File::delete(public_path('uploads/about' . $records->banner));
            $imageName = time() . '.' . $request->banner->extension();
            $request->banner->move(public_path('uploads/about'), $imageName);

        $records->banner = ($request->banner) ? $imageName : $records->banner;

        }

        $records->welcome = $request->welcome;
        $records->span = $request->span;
        $records->tagline = $request->tagline;
        $records->describe = $request->describe;
        $records->save();

        return redirect('about');


    }

}
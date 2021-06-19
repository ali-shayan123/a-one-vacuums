<?php

namespace App\Http\Controllers\admin;

use App\Admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\AdminController;

class LoginController extends BaseController
{
    public function index(){
        //dd(\Hash::make('admin@123'));
        return view('admin.login');
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            $array = [
                'email' => $request->email,
                'password' => $request->password
            ];
            
    }

    $admindata = Admin::where('email' , $array['email'])->first();
    //dd($dbusername);
    if(!empty($admindata)){
        
        if(\Hash::check($array['password'], $admindata->password)){
            session(['AdminID' => $admindata->id]);
            session(['AdminName' => $admindata->name]);
            $name = session('AdminNmae');
            // dd($name);
            session(['AdminEmail' => $admindata->email]);
            session(['AdminContact' => $admindata->contact]);
            session(['islogin' => true]);
            // $name = session('AdminName');
            // dd($name);
            return redirect('dashboard');
          
        }
        else{
            return redirect()-> back()-> with('Error , Wrong Username or Password')-> withInput();
        }
    }else{
        return redirect()-> back()-> with('Error , Wrong Username or Password')-> withInput();

    }
}

}

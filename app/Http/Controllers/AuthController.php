<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAdmin;


class AuthController extends Controller
{
    public function register()
    {

     return view('admin.register');
    }

    public function qeydiyyat(Request $request){

        $data = $request->only('name','email','password');
        $data['password']=bcrypt($data['password']);
        UserAdmin::create($data);
        return view ('admin.login');
    }

    public function login()
    {

     return view('admin.login');
    }

    public function girish()
    {

        $data=$request->only('email','name','password');
        if(UserAdmin::attempt($data)){
            return redirect(route('admin'));
        }
        else{
            return back()->with('status',"Yanlis email ve ya shifre");
        }
     
    }
}

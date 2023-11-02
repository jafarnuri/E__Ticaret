<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\UserAdmin;


class AuthController extends Controller
{
    public function _qeydiyyat()
    {

     return view('admin.register');
    }

    public function qeydiyyat(Request $request){

        $data = $request->only('name','email','password');
        $data['password']=bcrypt($data['password']);
        UserAdmin::create($data);
        return view ('admin.login');
    }

    public function _girish()
    {

     return view('admin.login');
    }

    public function girish(Request $request)
    {

        $data=$request->only('email','password');
        if(UserAdmin::attempt($data)){
            return redirect(route('admin'));
        }
        else{
            return back()->with('status',"Yanlis email ve ya shifre");
        }
     
    }
}

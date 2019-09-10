<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    public function adminLoginForm()
    {
        $data['title']='Welcome';
        return view('admin.adminlogin',$data);
    }
    public function adminLogin(Request $request)
    {
     $request->validate([
          'email'=>'required | email',
          'password'=>'required',
      ]);
     $credentials=$request->only('email','password');
     if(Auth::attempt($credentials))
     {
         return redirect()->intended('dashboard');
     }
     Session::flash('email','email or password invalid');
     return redirect()->back()->with(['message'=>'eamil or password Invalid']);
    }

}

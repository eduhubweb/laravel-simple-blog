<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function profile()
   {
       $data['title']="User profile";
       return view('admin.user.profile',$data);
   }
}

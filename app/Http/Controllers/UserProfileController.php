<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function profile()
    {
        return view('admin.user.profile');
    }
}

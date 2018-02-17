<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authProfile()
    {


        return view('auth.profile.profile');
    }
}

<?php

namespace App\Http\Controllers;

use App\Member;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeDashboard()
    {
        $counter = [];
        $counter['member'] = Member::count();
        $counter['female'] = User::where('sex','female')->count();
        $counter['male'] = User::where('sex','male')->count();

        return view('home-dashboard', ['counter' => $counter]);
    }
}

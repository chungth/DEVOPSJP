<?php

namespace OjiOba\Http\Controllers;

use OjiOba\Http\Requests;
use Illuminate\Http\Request;
use OjiOba\Profile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO: paginate profile
        $profiles = Profile::all();
        return view('home',compact('profiles'));
    }
}

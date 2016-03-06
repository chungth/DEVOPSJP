<?php

namespace OjiOba\Http\Controllers;

use Illuminate\Http\Request;

use OjiOba\Http\Requests;

class ProfilesController extends Controller
{
    public function create()
    {
        return view('profiles.create');
    }

    public function store()
    {
        //TODO: action here

        return redirect(route('home'));
    }

}

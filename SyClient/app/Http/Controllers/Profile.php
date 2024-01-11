<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile extends Controller
{
    function index(){
        return view('Profile.Profile');
    }
}

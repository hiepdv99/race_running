<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FrontEndController extends BaseController
{
    function getHome(){
        return view('home');
    }

    function getAbout(){
        return view('about');
    }

    function getContact(){
        return view('contact');
    }

    function getRace(){
        return view('race');
    }

    function getMember(){
        return view('member');
    }
}

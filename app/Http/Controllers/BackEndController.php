<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class BackEndController extends BaseController
{
    function getHome(){
        return view('backend.home');
    }

    function getRace(){
        return view('backend.listRace');
    }

    function getTrack(){
        return view('backend.listTrack');
    }

    function addRace(){
        return view('backend.addRace');
    }

    function addTrack(){
        return view('backend.addTrack');
    }
    function getMember(){
        return view('backend.listMember');
    }
    function getFeedBack(){
        return view('backend.listFeedBack');
    }
    // function getHome()
    // {
    //     $users = DB::select('select * from admin', [1]);

    //     return view('backend.home', ['users' => $users]);
    // }
}

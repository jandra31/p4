<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PollController extends Controller
{
    //
    public function home(){
        return view('poll');
    }
    //add vote results
}

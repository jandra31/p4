<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function landing(){
        //conditional routing so only authorized users can view login
        if (Auth::guest()){
            return view('poll');
        }
        else{
            return view('dashboard');
        }
    }
}

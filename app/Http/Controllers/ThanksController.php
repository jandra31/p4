<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\results;

class ThanksController extends Controller
{
    //
    public function landing(){
        //conditional routing so only authorized users can view logi
        return view('thanks');
    }
    public function addPollResults(Request $request){
        $results = new results();

        $results->location_index = 1;
        $results->timestamp = now();
        $results->rating = $request->get('rating');
        //reward code is currently not used left as a hook for future development
        $results->reward_code = '';
        $results->save();
        return view('thanks');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\location;
use App\results;

class DataViewController extends Controller
{
    //
    public function landing(Request $request){
        if ($request->get('r')==1){
            //user
            return view('data_view')->with(getUsers());
        }
        elseif ($request->get('r')==2){
            //locations
            return view('data_view')->with($this->getLocations());
        }
        elseif ($request->get('r')==3){
            //results
            return view('data_view')->with($this->getResults());
        }
    }
    public function newLocation(){
        return view('data_editor');
    }
    public function update(Request $request){
        return view('data_editor')->with($this->getLocation($request->get('id')));
    }

    public function addLocation(Request $request){
        $request->validate([
            'location_name'=> 'required|max:30',
            'country'=> 'required|max:30',
            'external_code'=> 'required|max:30',
        ]);

        $location = new location();

        $location->location_name = $request->get('location_name');
        $location->country = $request->get('country');
        $location->external_code = $request->get('external_code');
        $location->save();
        return view('data_view')->with($this->getLocations());

    }
    public function addPollResults(Request $request){
        $results = new results();

        $results->location_index = $request->get('location_id');
        $results->timestamp = now();
        $results->rating = $request->get('rating');
        //reward code is currently not used left as a hook for future development
        $results->reward_code = '';
        $results->save();
    }
    public function getLocations(){
        $location = location::all();
        return ['type'=>'location','results'=>$location->toArray()];
    }
    public function getLocation($id){
        $location = location::where('id','=',$id)->get();
        return ['type'=>'preload','results'=>$location->toArray()];
    }
    public function getResults(){
        $result= results::all();
        return ['type'=>'results','results'=>$result->toArray()];

    }
    //only update locations we dont want users to be able to modify poll data same for deletion
    public function updateLocation(){
        $location = location::where('id','=','')->first();
        if (!$location){
            dump("location could not be updated");
        }
        else{
            $location->location_name='';
            $location->country='';
            $location->external_code='';
        }
    }
    public function deleteLocation(Request $request){
        # First get a book to delete
        $location = location::where('id', '=', $request->get('id'))->first();

        if (!$location) {
            dump('Did not delete- location not found.');
        } else {
            $location->delete();
            return view('data_view')->with($this->getLocations());
        }
    }



}

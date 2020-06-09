<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    public function index(Request $request){

        $location = Location::paginate(9);

        $array_locations = array('locations'=>$location);

        return view ('tables/locations',$array_locations);
    }

    public function delete($id){

        $location = Location::find($id);
        $location->delete();
    
        
        return redirect('tables/locations');

    }

    public function store(Request $request){


        $location = new Location();
        $location->location_name= $request->get('location');
        $location->beach_name= $request->get('beach');
        $location->latitude= $request->get('latitude');
        $location->longitude= $request->get('longitude');

        $location->save();

        return redirect('tables/locations');
    }
}

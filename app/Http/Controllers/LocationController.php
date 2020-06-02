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
}

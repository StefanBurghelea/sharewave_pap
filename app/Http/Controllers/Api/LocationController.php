<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Location;


class LocationController extends Controller
{
    
    public function locations(){

        return Location::orderBy('id', 'DESC')->get();
    
    }

    public function getLocation($id){

        return Location::find($id);

    }


}

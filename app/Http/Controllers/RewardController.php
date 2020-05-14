<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reward;

class RewardController extends Controller
{
    public function index(Request $request){

        $rewards = Reward::paginate(9);

        $array_rewards = array('rewards'=>$rewards);

        return view ('tables/rewards',$array_rewards);

    }
}

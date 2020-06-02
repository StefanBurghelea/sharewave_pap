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

    public function delete($id){

        $reward = Reward::find($id);
        $reward->delete();
    
        
        return redirect('tables/rewards');

    }
}

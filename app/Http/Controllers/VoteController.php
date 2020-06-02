<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;
use App\User;

class VoteController extends Controller
{
    
    /* public function index(Request $request){

        $vote = Vote::paginate(9);

        $array_votes = array('votes'=>$vote);

        return view ('tables/votes',$array_votes);
    } */

    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){

        $votes = Vote::with('user')->paginate(15); // em vem de ir 1-1 vai n-1 para ter melhor processamaneto

        return view('tables.votes', compact('votes'));
    }

    public function delete($id){

        $vote = Vote::find($id);
        $vote->delete();
    
        
        return redirect('tables/votes');

    }
    
}

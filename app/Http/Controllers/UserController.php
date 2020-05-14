<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(Request $request){

        $users = User::paginate(9);

        $array_users = array('users'=>$users);

        return view ('tables/users',$array_users);

    }

}

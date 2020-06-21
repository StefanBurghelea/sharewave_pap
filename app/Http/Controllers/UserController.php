<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(Request $request){

        $users = User::paginate(9);

        $array_users = array('users'=>$users);

        return view ('tables/users',$array_users);

    }

    public function delete($id){

        $user = User::find($id);
        $user->delete();
    
        
        return redirect('tables/users');

    }

    public function update(Request $request){

        $email = $request->get('email');
        $privilege = $request->get('privilege');

        DB::update('update users set privileges = '.$privilege.' where email = ?', [$email]);

        return redirect('tables/users');

    }

}

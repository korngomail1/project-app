<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;

class signinController extends Controller
{
    function index(){
        return view('auth.register');
    }

    function create(Request $request){

        if($request->retypepassword == $request->password){
            $request->validate([
                'username' => ['string', 'unique:user'],
            ]);

            $user = new User;
            $user->username =$request->username ?: NULL;
            $user->password = $request->password;
            $user->save();

            $user_role = new UserRole;
            $user_role->users_id = $user->id;
            $user_role->role_id = 2;
            $user_role->save();

            return redirect('/login');
        }
        else{
            return back()->withErrors(['msg' => 'Passwords do not match']);
        }
    }
}

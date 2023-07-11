<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 

use App\Models\User;
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function Postlogin(Request $request)
    { 
        $username = $request->username;
        $password = $request->password;

        $this->validate($request,['username'=>'required','password'=>'required']);

        $admin = User::select() 
            ->orWhere('username','like',$username)
            ->where('password','=',$password)
            ->first();
        if ($admin == null) {
            return redirect()->to('/login')->withErrors(['msg' => 'incorrect username or password']);
        }

        auth()->login($admin);
        if (Auth::user()->Role[0]->role_id == 2) {
            return redirect()->to('home');
        }
        return redirect()->to('_admin/schedule');
    }

    public function logout(Request $request)
    {

        Auth::logout();

        return redirect('/login');
    }



}

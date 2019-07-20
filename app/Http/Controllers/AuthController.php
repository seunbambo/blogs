<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function postRegister($Request)
    {
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();
        $user->roles()->attach(Role::where('name', 'User')->first());
        //Every user is a normal user by default
        Auth::login($user);
        return redirect()->route('/dashbord');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('/dashbord');
        }
        return redirect()->back();
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('/dashbord');
    }

}

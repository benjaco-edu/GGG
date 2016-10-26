<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;


class AuthController extends Controller
{
    public function showLogin(){
        return view('login');
    }
    public function postLoginForm(){
        $validator = \Validator::make(\Input::all(), [
            'username'=>"required",
            'password'=>"required"
        ]);
        if ($validator->fails()) {
            return redirect("/")->withErrors($validator);
        }
        $auth = \Auth::attempt([
            'username' => \Input::get('username'),
            'password' => \Input::get('password'),
        ], false);

        if (!$auth) {
            return redirect("/")->withErrors([
                "Forkert login"
            ]);
        }
        return redirect("/home");
    }
}

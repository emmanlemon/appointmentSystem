<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use DB;

class AuthController extends Controller
{
    public function auth(){
        return view('auth.login');
    }   

    public function register(){
        return view('auth.register');
    }

    
    public function forgot_password(){
        return view('auth.forgot_password');
    }

    public function login(Request $request){
        $validateUser = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email',
            ]
        );

        if ($validateUser->fails()) {
            return redirect()->back()->withErrors(['msg' => 'The Message']);
        }
    }
}

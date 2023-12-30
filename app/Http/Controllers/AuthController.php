<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use Crypt;
use Validator;
use App\Models\User;
use App\Models\ForgotPassword;
use Session;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Notifications\ForgotPasswordNotification;
use Illuminate\Support\Facades\Notification;

class AuthController extends Controller
{
    public $email;

    public function auth(){
        return view('auth.login');
    }   

    public function register(){
        return view('auth.register');
    }

    public function register_post(RegistrationRequest $request){
        $encrypted = Hash::make($request->input('password'));
        User::create([
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'contact_number' => $request->input('contact_number'),
            'email' => $request->input('email'),
            'password' => $encrypted,
            'role'=> $request->input('role'),
        ]);
        return redirect('login')->with('success', 'Created Successfully!');
    }
    public function forgot_password(){
        return view('auth.forgot_password');
    }

    public function forgotPassword(Request $request){
        $data = User::where('email', $request->input('email'))->first();
        if(!empty($data->id)){
            $randomNumbers = array_map(function () {
                return rand(1, 9);
            }, range(1, 5));

            ForgotPassword::create([
                'email' => $data->email,
                'passkey' => implode($randomNumbers)
            ]);

            Notification::route('mail', $data->email)
                ->notify(new ForgotPasswordNotification(implode($randomNumbers)));
            return view('auth.reset_password');
        }else{
            return redirect()->back()->with('error', 'Account Not Found! Please Try Again!');
        }
    }

    public function reset_password(Request $request){
        $data = ForgotPassword::where('passkey' , $request->input('passkey'))->first();
        if(!empty($data->id)){
            return view('auth.resetPassword', ['email' => $data->email] );
        }
        else{
            return redirect('reset-pass')->with('error', 'Your OTP is Not Found! Please Try Again!');     
        }
    }
    
    public function reset_pass(Request $request){
        return view('auth.reset_password');
    }

    public function resetPassword(Request $request){
        $data = User::where('email', $request->input('email'))->first();
        $data->update([ "password" => $request->input('password')]);
        return redirect('login')->with('success', 'Your Password Successfully!');
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = User::where('email', $request->input('email'))->first();
        if(!empty($data->id)){
            if(Hash::check($request->password, $data->password)){
                $session = ['loginId'=> $data->id, 'role' => $data->role];
                $request->session()->put($session);
                if($data->role == 2){
                    //admin
                    return redirect('page/admin');
                }elseif($data->role == 1){
                    //doctor
                    return redirect('page/doctor');
                }else{
                    //client
                    return redirect('page/client');
                }
            }else{
                return redirect()->back()->with('error', 'Wrong Password! Please Try Again!');
            }
        }
        return redirect()->back()->with('error', 'Account Not Found! Please Try Again!');
    }

    public function logout()
    {
        if(Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('/login')->with('success', 'Logout Successfully!');
        }
    }
}

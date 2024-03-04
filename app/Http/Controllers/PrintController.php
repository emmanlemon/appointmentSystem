<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use Session;
use DB;


class PrintController extends Controller
{
    public function index($page = null , $id = null){
        $column = [
            'users.first_name as doctor_first_name',
            'users.middle_name as doctor_middle_name',
            'users.last_name as doctor_last_name',
            'appointments.*',
            // 'appointments.date as date',
            // 'appointments.time as time',
            // 'appointments.address as address',
            // 'appointments.contact_number as contact_number',
            // 'appointments.contact_number as contact_number',
            // 'appointments.status as status',
        ];

        $appointment = DB::table('appointments')
        ->select($column)
        ->leftJoin('users' , 'users.id' , 'appointments.doctor_id')
        ->first();
        $user = User::where('id' , Session::get('loginId'))->first();
        if($user->role == 2){
            $path = "admin";
        }elseif($user->role == 1){
            $path = "doctor";
        }else{
            $path = "client";
        }
        return view("{$path}/print/{$page}" , compact('appointment'));
    }
}

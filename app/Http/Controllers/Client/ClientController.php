<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use Session; 
use DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($page = null)
    {
        $column = [
            'users.first_name as doctor_first_name',
            'users.first_name as doctor_first_name',
            'users.middle_name as doctor_middle_name',
            'users.last_name as doctor_last_name',
            'appointments.*',
        ];
        $user = Session::get('loginId');
        $appointments = DB::table('appointments')
        ->select($column)
        ->leftJoin('users', 'users.id', '=', 'appointments.doctor_id')
        ->where('appointments.user_id', '=', $user)
        ->get()->groupBy(function($data) {
            return $data->doctor_first_name .' '. $data->doctor_middle_name.' '.$data->doctor_last_name ;
        });
        $doctors = User::where('role' , '=' , '1')->paginate(5);
        if($page != null){
            return view('client.'.$page , compact('doctors' ,'appointments'));
        }
        return view('client.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use Session;
use DB;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $user = Session::get('loginId');
        if(empty($user)){
            return redirect()->back()->with('error' , 'You need to login First.');
        }
        Appointment::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'address' => $request->address,
            'date_of_birth' => $request->date_of_birth,
            'contact_number' => $request->contact_number,
            'city' => $request->city,
            'province' => $request->province,       
            'email' => $request->email,
            'date' => $request->date,
            'time' => $request->time,
            'comments' => $request->comments,
            'user_id' => $user,
            'doctor_id' => $request->doctor_id
        ]);
        return redirect()->back()->with('msg' , 'Send Successfully');
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
    public function update(Request $request, Appointment $appointment)
    {
        $user = Session::get('role');
        if($user == '1'){
            $appointment->status = $request->input('status');
            $appointment->save();
            return redirect()->back()->with('msg', 'Update Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->back()->with('delete', 'Deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Announcement;
use App\Models\Carousel;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($page = null)
    {
        $column = [
            'users.first_name as doctor_first_name',
            'users.middle_name as doctor_middle_name',
            'users.last_name as doctor_last_name',
            'appointments.full_name as user_full_name',
            'appointments.date as date',
            'appointments.time as time',
            'appointments.address as address',
            'appointments.contact_number as contact_number',
            'appointments.status as status',
        ];
        $doctors = DB::table('users')->leftJoin('services as s', 's.id', '=', 'users.service_id')
        ->select('*' , 'users.id as id')
        ->where('users.role', '=', '1')
        ->get();
        $clients = Appointment::all();
        $announcements = Announcement::all();
        $carousels = Carousel::all();
        $services = Service::all();
        $user = User::where('id' ,Session::get('loginId'))->first();
        $appointmentLists = DB::table('appointments')
        ->select($column)
        ->leftJoin('users' , 'users.id' , 'appointments.doctor_id')
        ->get();
        $reports = DB::table('appointments')
        ->select($column)
        ->leftJoin('users' , 'users.id' , 'appointments.doctor_id')
        ->where('appointments.status' , 1)
        ->get();
        if($page != null){
            return view('admin.'.$page , compact('doctors' , 'clients' ,'appointmentLists','carousels','announcements' ,'reports', 'services' , 'user' ));
        }
        return view('admin.index' , compact('doctors' , 'clients' ,'appointmentLists','carousels','announcements' ,'reports', 'services' , 'user'));
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

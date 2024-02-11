<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Announcement;
use App\Models\Carousel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request , $page = null)
    {
        $column = [
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
        $transactions = DB::table('appointments')
        ->select($column)
        ->leftJoin('users', 'users.id', '=', 'appointments.doctor_id')
        ->leftJoin('services', 'services.id', '=', 'appointments.doctor_id')
        ->where('appointments.user_id', '=', $user)
        ->get();
        $clientHeader = $request->query('clientHeader');
        session()->put('clientHeader', $clientHeader);
        $user = User::where('id' ,Session::get('loginId'))->first();
        $carousels = Carousel::all();
        $announcements = Announcement::latest()->first();
        $doctors = DB::table('users')->leftJoin('services as s', 's.id', '=', 'users.service_id')
        ->select('*' , 'users.id as id')
        ->where('users.role', '=', '1')
        ->paginate(5);

        if($page != null){
            return view('client.'.$page , compact('doctors' ,'appointments', 'carousels','announcements','user','transactions'));
        }
        return view('client.index' , compact('carousels','announcements','user' , 'transactions'));
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

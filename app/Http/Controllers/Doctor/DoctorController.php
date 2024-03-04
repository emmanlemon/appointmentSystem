<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($page = null)
    {
        $user = Session::get('loginId');
        $doctors = User::where('role', '=', '1')->get();
        $appointments = Appointment::where('doctor_id', '=', $user)->paginate(10);
        $pendingCount = Appointment::where('doctor_id', $user)->where('status', 'pending')->count();
        $declinedCount = Appointment::where('doctor_id', $user)->where('status', 'declined')->count();
        $approvedCount = Appointment::where('doctor_id', $user)->where('status', 'approved')->count();
        $appointmentreports = Appointment::where('doctor_id', '=', $user)->where('appointments.status', '=', 1)->paginate(5);

        if ($page != null) {
            return view('doctor.' . $page, compact('appointments', 'appointmentreports' , 'pendingCount', 'declinedCount' , 'approvedCount'));
        }
        return view('doctor.index', compact('appointments', 'appointmentreports' , 'pendingCount', 'declinedCount' , 'approvedCount'));
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
        $request->validate([
            'contact_number' => 'unique:users,contact_number',
            'email' => 'unique:users,email'
        ]);
        $encrypted = Hash::make('password');
        $fileNameImage = $request->image->getClientOriginalName();
        $filePathImage = 'images/doctor' . $fileNameImage;
        $request->image->move(public_path('images/doctor'), $fileNameImage);
        User::create([
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'contact_number' => $request->input('contact_number'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'service_id' => $request->input('services'),
            'achievements' => $request->input('achievements'),
            'password' => $encrypted,
            'role' => $request->input('role'),
            'image' => $request->image->getClientOriginalName()
        ]);
        return redirect()->back()->with('success', 'Doctor Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fileNameImage = $request->image->getClientOriginalName();
        $request->image->move(public_path('images/doctor'), $fileNameImage);
        $user = User::findorFail($id);
        $user->update([
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'contact_number' => $request->input('contact_number'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'service_id' => $request->input('service_id'),
            'image' => $request->image->getClientOriginalName()
        ]);
        return redirect()->back()->with('success', 'Doctor Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findorFail($id);
        $user->delete();
        return redirect()->back()->with('delete', 'Doctor Deleted Successfully');
    }
}

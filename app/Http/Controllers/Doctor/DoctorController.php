<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
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
        $appointmentreports = Appointment::where('doctor_id', '=', $user)->where('status', '=', 'APPROVED')->paginate(5);
        if ($page != null) {
            return view('doctor.' . $page, compact('appointments', 'appointmentreports'));
        }
        return view('doctor.index', compact('appointments', 'appointmentreports'));
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
            'services' => $request->input('services'),
            'password' => $encrypted,
            'role' => $request->input('role'),
            'image' => $request->image->getClientOriginalName()
        ]);
        return redirect()->back()->with('success', 'Created Successfully!');
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
            'services' => $request->input('services'),
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
        return redirect()->back()->with('delete', 'Deleted Successfully');
    }
}

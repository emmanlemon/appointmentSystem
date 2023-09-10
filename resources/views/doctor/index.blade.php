@include('layout')
@extends('components.format.sidebarNavigation')
<title>Doctor Dashboard</title>
@section('sideBarNavigation')
<section class="home-section">
    <div class="title"><span>
        Doctor Dashboard</span>
    </div>
    <div class="p-3 d-flex gap-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Appointment Detail</h5>
                <p class="card-text">{{ $appointments->count() }}</p>
                <a href="{{ route('doctor' , 'appointment_detail') }}" class="btn btn-primary">See Doctor List</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Appointment Report</h5>
                <p class="card-text">{{ $appointmentreports->count() }}</p>
                <a href="{{ route('doctor' , 'reports') }}" class="btn btn-primary">See Doctor List</a>
            </div>
        </div>
    </div>
</section>
@endsection

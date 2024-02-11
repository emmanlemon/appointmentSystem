@extends('layout.master')

@section('content')
<title>Doctor Dashboard</title>
@section('sideBarNavigation')
<section class="home-section">
    <div class="title"><span>
        Doctor Dashboard</span>
        <div class="btn-group" class="position: fixed;">
            <button type="button" class="btn btn-primary"><i class="fa fa-user-circle-o" aria-hidden="true"></i></button>
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right"> <!-- Add dropdown-menu-right class here -->
              <a class="dropdown-item" href="#">s</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('auth.logout') }}">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Logout</span>
              </a>
            </div>    
          </div>
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

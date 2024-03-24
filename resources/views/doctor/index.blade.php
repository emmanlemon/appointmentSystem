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
      {{-- <div class="row">
        <div class="col">
          <div id="dateRangePicker" class="input-group date">
            <input type="text" class="form-control" />
            <span class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </span>
          </div>
        </div>
      </div> --}}
      <div class="row">
        <div class="col d-flex">
          <div id='calendar' class='bg-white p-16 vh-100 w-75'></div>
          <div class="w-25 bg-white border border-info shadow rounded">
            <div class="text-center text-uppercase font-weight-bold fs-4 text-white p-2" style="background-color:#329dc7;"> List of Appointments</div>
            {{-- @php
            $approvedCount = 0;
            $declinedCount = 0;
            $pendingCount = 0;
        @endphp
        
        @forelse ($appointments as $appointment)
            @if ($appointment->status == 'approved')

                @php $approvedCount++ @endphp
            @elseif ($appointment->status == 'declined')
                @php $declinedCount++ @endphp
            @elseif ($appointment->status == 'pending')
                @php $pendingCount++ @endphp
            @endif
        @empty
            <!-- No appointments -->
        @endforelse 
         --}}
        <div class="bg-warning p-2 text-white fs-5">
          Pending : {{ $pendingCount }}
        </div>
        <div class="bg-success p-2 text-white fs-5">
          Approved : {{ $approvedCount }}
        </div>
        <div class="bg-danger p-2 text-white fs-5">
          Declined : {{ $declinedCount }}
        </div>        
          </div>
        </div>
      </div>
</section>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.10/index.global.min.js'></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
    initialView: 'timeGridWeek', // Set the initial view to timeGridWeek
    slotDuration: '00:15:00', // Set the duration for each time slot
    nowIndicator: true, // Show the current time indicator
    slotLabelFormat: {
      hour: 'numeric',
      minute: '2-digit',
      omitZeroMinute: false,
      meridiem: 'short'
    },
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'timeGridWeek,timeGridDay'
    },
    events: [
          @foreach($appointments as $appointment)
              {
                  title: '{{ $appointment->transaction_number }} {{ $appointment->full_name }}',
                  color: '{{ $appointment->status == "Pending" ? "Yellow" : ($appointment->status == "Approved" ? "green" : "red") }}',
                  start: '{{ $appointment->date }} {{ $appointment->time }}',
              },
          @endforeach
      ],
        });
        calendar.render();
      });

    </script>
@endsection

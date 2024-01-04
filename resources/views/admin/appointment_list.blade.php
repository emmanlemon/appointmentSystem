@extends('layout.master')

@section('content')
<title>Admin Appointment List</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>Appointment List</span>
      <!-- Example split danger button -->
<div class="btn-group" class="position: fixed;">
  <button type="button" class="btn btn-primary"><i class="fa fa-user-circle-o" aria-hidden="true"></i></button>
  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu dropdown-menu-right"> <!-- Add dropdown-menu-right class here -->
    <a class="dropdown-item" href="#">{{ $user->email }}</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="{{ route('auth.logout') }}">
      <i class='bx bx-log-out'></i>
      <span class="links_name">Logout</span>
    </a>
  </div>    
</div>
</div>
   <div class="container">
    <div class="input-group rounded my-2">
        <input type="text" id="searchInput" class="form-control p-3" placeholder="Search patient...">
        <span class="input-group-text border-0" id="search-addon">
            <i class='bx bx-search-alt-2' ></i>
    </span>
      </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Patient Full Name</th>
            <th scope="col">Address</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Doctor Full Name</th>
            <th scope="col">Preffered Date & Time</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
        @php $count = 1; @endphp
          @forelse($appointmentLists as $appointmentList)
          <tr>
            <th>{{ $count++ }}</th>
            <td>{{ $appointmentList->user_full_name }}</td>
            <td>{{ $appointmentList->address }}</td>
            <td>{{ $appointmentList->contact_number }}</td>
            <td>{{ $appointmentList->doctor_first_name }} {{ $appointmentList->doctor_middle_name }} {{ $appointmentList->doctor_last_name }}</td>
            <td>{{ date('F j, Y', strtotime($appointmentList->date)) }} {{ date('g:i a', strtotime($appointmentList->time)) }}</td>
            <td>{{ $appointmentList->status == 0 ? 'PENDING' : 'APPROVED' }}</td>
          </tr>
          @empty
            <tr>
                <td colspan="7">No Appointments Available</td>
            </tr>
          @endforelse
        </tbody>
      </table>
   </div>
</section>
@endsection

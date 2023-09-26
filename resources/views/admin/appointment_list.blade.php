@include('layout')
@extends('components.format.sidebarNavigation')
<title>Admin Appointment List</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>Appointment List</span></div>
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

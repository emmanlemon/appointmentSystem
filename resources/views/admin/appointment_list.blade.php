@extends('components.format.sidebarNavigation')
<title>Admin Appointment List</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>Appointment List</span></div>
   <div class="container">
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
            <td>{{ $appointmentList->user_first_name }} {{ $appointmentList->user_middle_name }} {{ $appointmentList->user_last_name }}</td>
            <td>{{ $appointmentList->address }}</td>
            <td>{{ $appointmentList->contact_number }}</td>
            <td>{{ $appointmentList->doctor_first_name }} {{ $appointmentList->doctor_middle_name }} {{ $appointmentList->doctor_last_name }}</td>
            <td>{{ $appointmentList->date }} {{ $appointmentList->time }}</td>
            <td>{{ $appointmentList->status }}</td>
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
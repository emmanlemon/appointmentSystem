@include('layout')
@extends('components.format.sidebarNavigation')
<title>Appointment Detail Doctor</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>
   Patient Appointment Detail</span>
</div>
<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Gender</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email</th>
            <th scope="col">Prefered Date and Time</th>
            <th scope="col">Concern</th>
          </tr>
        </thead>
        <tbody>
          @php $count = 1; @endphp
          @forelse($appointments as $appointment)
          <tr>
            <th>{{ $count++ }}</th>
            <td>{{ $appointment->full_name }}</td>
            <td>{{ $appointment->date_of_birth }}</td>
            <td>{{ $appointment->gender }}</td>
            <td>{{ $appointment->contact_number }}</td>
            <td>{{ $appointment->email }}</td>
            <td>{{ $appointment->date }} {{ $appointment->time }}</td>
            <td>{{ $appointment->concern }}</td>
          </tr>
          @empty
            <tr>

            </tr>
          @endforelse
        </tbody>
      </table>
      <div class="d-flex justify-content-end"> {{ $appointments->links() }}</div>
</div>
</section>
@endsection

@include('layout')
@extends('components.format.sidebarNavigation')
<title>Admin Report List</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>Report List</span></div>
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
          @forelse($reports as $report)
          <tr>
            <th>{{ $count++ }}</th>
            <td>{{ $report->user_first_name }} {{ $report->user_middle_name }} {{ $report->user_last_name }}</td>
            <td>{{ $report->address }}</td>
            <td>{{ $report->contact_number }}</td>
            <td>{{ $report->doctor_first_name }} {{ $report->doctor_middle_name }} {{ $report->doctor_last_name }}</td>
            <td>{{ $report->date }} {{ $report->time }}</td>
            <td>{{ $report->status }}</td>
          </tr>
          @empty
            <tr>
                <td colspan="7">No reports found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
   </div>
</section>
@endsection

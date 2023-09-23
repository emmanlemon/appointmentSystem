@include('layout')
@extends('components.format.sidebarNavigation')
<title>Admin Report List</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>Report List</span></div>
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
          @forelse($reports as $report)
          <tr>
            <th>{{ $count++ }}</th>
            <td>{{ $report->user_full_name }}</td>
            <td>{{ $report->address }}</td>
            <td>{{ $report->contact_number }}</td>
            <td>{{ $report->doctor_first_name }} {{ $report->doctor_middle_name }} {{ $report->doctor_last_name }}</td>
            <td>{{ $report->date }} {{ $report->time }}</td>
            <td>{{ $report->status === '0' ? 'PENDING' : 'APPROVED' }}</td>
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

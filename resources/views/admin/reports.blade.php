@extends('layout.master')

@section('content')
<title>Admin Report List</title>
<section class="home-section">
   <div class="title"><span>Report List</span>
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
          @forelse($reports as $report)
          <tr>
            <th>{{ $count++ }}</th>
            <td>{{ $report->user_full_name }}</td>
            <td>{{ $report->address }}</td>
            <td>{{ $report->contact_number }}</td>
            <td>{{ $report->doctor_first_name }} {{ $report->doctor_middle_name }} {{ $report->doctor_last_name }}</td>
            <td>{{ date('F j, Y', strtotime($report->date)) }} {{ date('g:i a', strtotime($report->time)) }}</td>
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

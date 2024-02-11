@extends('layout.master')

@section('content')
<title>Transaction List</title>
@section('sideBarNavigationClient')
<section class="home-section">
  <div class="title"><span>Transaction List</span>
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
  <div class="row justify-content-center">
    <div class="col-md-6">
        <div class="input-group rounded my-2">
            <input type="text" id="searchInput" class="form-control" placeholder="Search ...">
            <span class="input-group-text border-0" id="search-addon">
                <i class='bx bx-search-alt-2'></i>
            </span>
        </div>
    </div>
</div>
  <table class="table mt-2 text-center">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Status</th>
          <th scope="col">Transaction No.</th>
          <th scope="col">Doctor</th>
          <th scope="col">Date</th>
          <th scope="col">Time</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
      @php $count = 1; @endphp
      @forelse ($transactions as $row)
      <tr>
          <th>{{ $count++ }}</th>
          <td><span class="{{ $row->status === '1' ? 'bg-success' : 'bg-primary'}} px-2 py-1 m-1 text-white rounded">{{ $row->status === '1' ? 'APPROVED' : 'PENDING'}}</span></td>
          <td>{{ $row->transaction_number }}</td>
          <td>{{ $row->doctor_first_name }} {{ $row->doctor_middle_name }} {{ $row->doctor_last_name }}</td>
          <td>{{ date('F j, Y', strtotime($row->date)) }}</td>
          <td> {{ date('g:i a', strtotime($row->time)) }}</td>
          <td>
                      <button class="btn btn-warning" data-toggle="modal" data-target="#editAppointmentModal{{ $row->id }}" data-id="{{ $row->id }}">
                        <i class="fa fa-print" aria-hidden="true"></i>
                    </button>
          </td>
        </tr>
      @empty
        <span class="p-5">No Appointment found.</span>
      @endforelse
    </tbody>
  </table>
</div>
</section>
@endsection
@endsection
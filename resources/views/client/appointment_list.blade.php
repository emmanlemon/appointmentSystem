@extends('layout.master')

@section('content')
<title>Appointment List</title>
@section('sideBarNavigationClient')
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
  @if(Session::has('msg'))
  <div class="alert alert-success mt-2">{{ Session::get('msg') }}</div>
  @elseif(Session::has('delete'))
  <div class="alert alert-danger mt-2">{{ Session::get('delete') }}</div>
  @endif
  @forelse ($appointments as $appointment => $client)
  <table class="table mt-2">
      <thead>
        <tr>
          <th colspan="12" class="bg-info">Doctor Name: {{ $appointment }}</th>
        </tr>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Birthdate</th>
          <th scope="col">Gender</th>
          <th scope="col">Address</th>
          <th scope="col">Email</th>
          <th scope="col">Contact #</th>
          <th scope="col">Date & Time</th>
          <th scope="col">Status</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
      @php $count = 1; @endphp
        @foreach ($client as $row)
        <tr>
          <th>{{ $count++ }}</th>
          <td>{{ $row->full_name }}</td>
          <td>{{ date('F j, Y', strtotime($row->date_of_birth))}}</td>
          <td>{{ $row->gender }}</td>
          <td>{{ $row->address }}</td>
          <td>{{ $row->email }}</td>
          <td>{{ $row->contact_number }}</td>
          <td>{{ date('F j, Y', strtotime($row->date)) }} {{ date('g:i a', strtotime($row->time)) }}</td>
          <td><span class="{{ $row->status === '1' ? 'bg-success' : 'bg-primary'}} px-2 py-1 m-1 text-white rounded">{{ $row->status === '1' ? 'APPROVED' : 'PENDING'}}</span></td>
          <td colspan="2" class="col">
              <div class="d-flex gap-1 justify-content-between">
                  <div>
                      <button class="btn btn-success" data-toggle="modal" data-target="#editAppointmentModal{{ $row->id }}" data-id="{{ $row->id }}">
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                      </button>
                      @include('components.molecule.client.editAppointment')
                  </div>
                  <div>
                      <form action="{{ route('appointment.destroy', $row->id) }}" method="post">
  
                          <button class="btn btn-danger" type="submit">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>  @csrf
                          @method('delete')
                      </form>
                  </div>
              </div>
          </td>
        </tr>
       @endforeach
      </tbody>
    </table>
      @empty
        <span class="p-5">No Appointment found.</span>
      @endforelse
</div>
</section>
@endsection
@endsection
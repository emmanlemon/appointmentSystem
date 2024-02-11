@extends('layout.master')

@section('content')
<title>Appointment List Doctor</title>
@section('sideBarNavigation')
<section class="home-section">
    <div class="title"><span>
      Appointment List Doctor</span>
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
    <div class="container">
      @if(Session::has('msg'))
          <div class="alert alert-success">{{ Session::get('msg') }}</div>
      @endif
      <div class="input-group rounded my-2">
          <input type="text" id="searchInput" class="form-control p-3" placeholder="Search Patient...">
          <span class="input-group-text border-0" id="search-addon">
              <i class='bx bx-search-alt-2' ></i>
      </span>
        </div>
      <table class="table table-striped text-center">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Full Name</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Prefered Date and Time</th>
              <th scope="col">Email</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php $count = 1; @endphp
            @forelse($appointments as $appointment)
            <tr>
              <th>{{ $count++ }}</th>
              <td>{{ $appointment->full_name }}</td>
              <td>{{ $appointment->contact_number }}</td>
              <td>{{ date('F j, Y', strtotime($appointment->date)) }} {{ date('g:i a', strtotime($appointment->time)) }}</td>
              <td>{{ $appointment->email }}</td>
              <td>
                  <form action="{{ route('appointment.update' , $appointment->id) }}" method="post">
                      @csrf
                      @method('PUT')
                      <select class="form-select" name="status" {{ $appointment->status != '0' ? 'disabled' : ''}}>
                          <option selected>{{ $appointment->status != '0' ? 'APPROVED' : 'PENDING'}}</option>
                          <option value="{{  $appointment->status == '0' ? 'APPROVED' : 'PENDING'}}">{{  $appointment->status == '0' ? 'APPROVED' : 'PENDING'}}</option>
                      </select>
              </td>
              <td>
                  <button class="btn btn-success">Edit</button>
              </form>
                  <button class="btn btn-danger">Delete</button></td>
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


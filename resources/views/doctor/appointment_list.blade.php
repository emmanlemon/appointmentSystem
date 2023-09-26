@include('layout')
@extends('components.format.sidebarNavigation')
<title>Appointment List Doctor</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>
    Patient Appointment List</span>
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
    <table class="table table-striped">
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

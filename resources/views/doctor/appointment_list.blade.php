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
            <td>{{ $appointment->first_name }} {{ $appointment->middle_name }} {{ $appointment->last_name }}</td>
            <td>{{ $appointment->contact_number }}</td>
            <td>{{ $appointment->date }} {{ $appointment->time }}</td>
            <td>{{ $appointment->email }}</td>
            <td>
                <form action="{{ route('appointment.update' , $appointment->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <select class="form-select" name="status">
                    <option selected>{{ $appointment->status }}</option>
                    @if($appointment->status == '0')
                    <option value="APPROVED">APPROVED</option>
                    @else
                    <option value="PENDING">PENDING</option>
                    @endif
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

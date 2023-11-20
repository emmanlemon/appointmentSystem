@extends('layout')
@extends('components.format.sidebarNavigation')

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<title>Admin Doctor</title>

@section('sideBarNavigation')
<section class="home-section">
   <div class="title">
      <span>Doctor List</span>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDoctorModal">Add Doctor +</button>
   </div>
   <div class="container mt-4">
      @if(Session::has('delete') || Session::has('success'))
         <div class="alert alert-{{ Session::has('delete') ? 'danger' : 'success' }}">
            {{ Session::get(Session::has('delete') ? 'delete' : 'success') }}
         </div>
      @endif
      <div class="input-group mt-3">
         <input type="text" id="searchInput" class="form-control" placeholder="Search doctors..." aria-label="Search doctors">
         <button class="btn btn-outline-secondary" type="button">Search</button>
      </div>
      <div class="table-responsive mt-3">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Picture</th>
                  <th scope="col">Full Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Services</th>
                  <th scope="col">Action</th>
               </tr>
            </thead>
            <tbody>
               @php $count = 1; @endphp
               @forelse($doctors as $doctor)
               <tr>
                  <td>{{ $count++ }}</td>
                  <td><img src="{{ asset("images/doctor/$doctor->image") }}" alt="" height="100px" width="100px"></td>
                  <td>{{ $doctor->first_name }} {{ $doctor->middle_name }} {{ $doctor->last_name }}</td>
                  <td>{{ $doctor->address }}</td>
                  <td>{{ $doctor->contact_number }}</td>
                  <td>{{ $doctor->email }}</td>
                  <td>{{ $doctor->name }}</td>
                  <td>
                     <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editDoctorModal{{ $doctor->id }}" data-id="{{ $doctor->id }}">Edit</button>
                        <form action='{{ route('doctor.destroy', $doctor->id) }}' method="post">
                           <input class="btn btn-danger" type="submit" value="Delete" />
                           @method('delete')
                           @csrf
                        </form>
                     </div>
                  </td>
               </tr>
               <!-- Include the Edit Doctor modal -->
               @include('components.molecule.doctor.editDoctor')
               @empty
               <tr>
                  <td colspan="8">No Doctor found.</td>
               </tr>
               @endforelse
            </tbody>
         </table>
      </div>
   </div>
</section>

<!-- Add Doctor Modal -->
<div class="modal" id="addDoctorModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Doctor</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- Form for adding a new doctor -->
                <!-- Your form fields will go here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- You can add a button to submit the form -->
            </div>
        </div>
    </div>
</div>
@endsection

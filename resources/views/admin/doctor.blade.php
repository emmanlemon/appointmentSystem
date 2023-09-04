@include('layout')
@include('components.molecule.doctor.addDoctor')
@extends('components.format.sidebarNavigation')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<title>Admin Doctor</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>
    Doctor List</span>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Add Doctor +</button>
</div>
   <div class="container">
    @if(Session::has('delete'))
    <div class="alert alert-danger">{{ Session::get('delete') }}</div>
    @elseif(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div class="input-group rounded">
        <input type="text" id="searchInput" class="form-control p-3" placeholder="Search doctors...">
        <span class="input-group-text border-0" id="search-addon">
            <i class='bx bx-search-alt-2' ></i>
    </span>
      </div>
        <div class="row mt-3">
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Services</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php $count = 1; @endphp
                  @forelse($doctors as $doctor)
                  <tr>
                    <th>{{ $count++ }}</th>
                    <td><img src="{{ asset("images/doctor/$doctor->image") }}" alt="" height="200px" width="200px"></td>
                    <td>{{ $doctor->first_name }} {{ $doctor->middle_name }} {{ $doctor->last_name }}</td>
                    <td>{{ $doctor->address }}</td>
                    <td>{{ $doctor->contact_number }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->services }}</td>
                    <td colspan="2" class="col">
                      <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editDoctorModal{{ $doctor->id }}" data-id="{{ $doctor->id }}">Edit</button>
                        @include('components.molecule.doctor.editDoctor')
                        <form action='{{ route('doctor.destroy', $doctor->id) }}' method="post">
                          <input class="btn btn-danger" type="submit" value="Delete" />
                          @method('delete')
                          @csrf
                        </form>
                      </div>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="8">No Doctor found.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
   </div>
</section>
@endsection


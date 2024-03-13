@extends('layout.master')

@section('content')
<title>Book an Appointment</title>
<div class="container min-vh-100 mt-2">

    <div class="h-25 w-100 p-4" style="background-image:url({{ asset('images/find.png') }}); background-size: 100% 200px; background-repeat: no-repeat;">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="input-group rounded my-2">
                <input type="text" id="searchInput" class="form-control" placeholder="Search doctors...">
                <span class="input-group-text border-0" id="search-addon">
                    <i class='bx bx-search-alt-2'></i>
                </span>
            </div>
            @if(Session::has('error'))
            <div class="alert alert-danger mt-2">{{ Session::get('error') }}</div>
            @elseif(Session::has('msg'))
            <div class="alert alert-success mt-2">{{ Session::get('msg') }}</div>
            @endif
        </div>
    </div>
    @forelse ($doctors as $doctor)
    <div id="find_doctor">
      <div class="card d-flex flex-row my-2 text-capitalize">
        <img src="{{ asset("images/doctor/$doctor->image") }}" height="200px" width="200px">
        <div class="text-body px-2 w-100 p-0 m-0">
            <h1>{{ $doctor->first_name }} {{ $doctor->middle_name }} {{ $doctor->last_name }}</h1>
            <h4 class="p-0 m-0"> Specialization: {{ $doctor->name }}</h4>
            <h5 class="p-0 m-0">Description: {{ $doctor->description }}</h5>
            <h6 class="p-0 m-0">Achievements: {{ $doctor->achievements }}</h6>
            {{-- <p class="p-0 m-0">Contact Number: {{ $doctor->contact_number }}</p>
            <p class="p-0 m-0">Email: {{ $doctor->email }}</p> --}}
        </div>
        <div class="d-flex align-items-center mx-2">
            <button class="btn btn-primary" data-toggle="modal" data-target="#appointmentModal{{ $doctor->id }}">Book An Appointment</button>
        </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="appointmentModal{{ $doctor->id }}" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel{{ $doctor->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="appointmentModalLabel{{ $doctor->id }}">Appointment Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('appointment.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                        <div class="my-2">
                            <span class="title-header">Full Name</span>
                            <input type="text" name="full_name" class="form-control form-control-lg" placeholder="Full Name" required/>
                        </div>
                        <div class="my-2">
                                <label class="form-label">Marital Status</label>
                                <select class="form-select" name="marital_status">
                                  <option value="Single">Single</option>
                                  <option value="Married">Married</option>
                                  <option value="Separated">Separated</option>
                                  <option value="Divorced">Divorced</option>
                                  <option value="Widowed">Widowed</option>
                                </select>
                        </div>
                         {{-- <div class="d-flex flex-row gap-1 w-100">
                            <div class="my-2">
                                <span class="title-header">Age</span>
                                <input type="number" name="age" class="form-control form-control-lg" placeholder="Age" required/>
                            </div>
                            <div class="my-2">
                                    <label class="form-label">Marital Status</label>
                                    <select class="form-select" name="marital_status">
                                      <option value="Single">Single</option>
                                      <option value="Married">Married</option>
                                      <option value="Separated">Separated</option>
                                      <option value="Divorced">Divorced</option>
                                      <option value="Widowed">Widowed</option>
                                    </select>
                            </div>
                        </div> --}}
                        <div class="d-flex flex-row gap-1">
                          <div class="form-outline mb-2">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control form-control-lg" required/>
                          </div>
                          <div class="form-outline mb-2 w-100">
                            <label class="form-label">Gender</label>
                            <select class="form-select" name="gender">
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                        <div class="my-2">
                            <span class="title-header">Address</span>
                            <input type="text" name="address" class="form-control form-control-lg" placeholder="Address" required/>
                        </div>
                        {{-- <span class="title-header">Address</span>
                        <div class="fullname d-flex flex-row gap-1">
                          <div class="form-outline mb-2">
                            <label class="form-label">Street Address</label>
                            <input type="text" name="address" class="form-control form-control-lg" placeholder="Street Address" required/>
                          </div>
                          <div class="form-outline mb-2">
                            <label class="form-label">City</label>
                            <input type="text" name="city" class="form-control form-control-lg" placeholder="City" required/>
                          </div>
                          <div class="form-outline mb-2">
                            <label class="form-label">Province</label>
                            <input type="text" name="province" class="form-control form-control-lg" placeholder="Province" required/>
                          </div>
                        </div> --}}
                        <div class="fullname d-flex flex-row gap-1">
                          <div class="form-outline mb-2">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required/>
                          </div>
                          <div class="form-outline mb-2">
                            <label class="form-label">Contact Number</label>
                            <input type="number" name="contact_number" class="form-control form-control-lg" placeholder="Contact Number" required/>
                          </div>
                        </div>
                        <div class="fullname d-flex flex-row gap-1">
                          <div class="form-outline mb-2 w-100">
                            <label class="form-label">Appointment Date</label>
                            <input type="date" name="date" class="form-control form-control-lg" required/>
                          </div>
                          <div class="form-outline mb-2 w-100">
                            <label class="form-label">Appointment Time</label>
                            <input type="time" name="time" class="form-control form-control-lg" required/>
                          </div>
                        </div>
                        <div class="form-group">
                            <label>Additional Information/Concern</label>
                            <textarea class="form-control" name="concern" rows="4"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @empty

    @endforelse
    <div class="d-flex justify-content-end">{{ $doctors->links() }}</div>
</div>
@endsection
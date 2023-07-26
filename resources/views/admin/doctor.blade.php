@extends('components.format.sidebarNavigation')
<title>Admin Doctor</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>
    Doctor List</span>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Add Doctor +</button>
</div>
   <div class="container">
    @if(Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @elseif(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

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
            <td colspan="2">
                  <button class="btn btn-success">Edit</button>
              <form action='{{ route('doctor.destroy' , $doctor->id) }}' method="post">
                      <input class="btn btn-danger float-right" type="submit" value="Delete" />
                      @method('delete')
                      @csrf
              </form>
          </td>
          </tr>
          @empty
            <tr>
              <td colspan="7">No Doctor found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
   </div>
</section>
@endsection


  <!-- Add Doctor Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Doctor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('doctor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-outline mb-2">
              <label class="form-label">First Name</label>
                <input type="type" name="first_name" class="form-control form-control-lg"
                  placeholder="Enter Name" value="{{ old('first_name') }}"/>
                @error('first_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
          </div>
          
          <div class="form-outline mb-2">
            <label class="form-label">Middle Name</label>
              <input type="type" name="middle_name" class="form-control form-control-lg"
                placeholder="Enter Name" value="{{ old('middle_name') }}"/>
              @error('middle_name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>

          <div class="form-outline mb-2">
            <label class="form-label">Last Name</label>
              <input type="type" name="last_name" class="form-control form-control-lg"
                placeholder="Enter Name" value="{{ old('last_name') }}"/>
              @error('last_name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>

          <div class="form-outline mb-2">
            <label class="form-label">Contact number</label>
              <input type="type" name="contact_number" class="form-control form-control-lg"
                placeholder="Enter Name" value="{{ old('contact_number') }}"/>
              @error('contact_number')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>
          
          <div class="form-outline mb-2">
            <label class="form-label">Address</label>
              <input type="type" name="address" class="form-control form-control-lg"
                placeholder="Enter Name"  value="{{ old('address') }}"/>
              @error('address')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>

          <!-- Email input -->
          <div class="form-outline mb-2">
          <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address"  value="{{ old('email') }}"/>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-outline mb-2">
            <label class="form-label">Services</label>
              <input type="type" name="services" class="form-control form-control-lg"
                placeholder="Services"  value="{{ old('services') }}"/>
              @error('services')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-outline mb-2">
              <label for="formFileSm" class="form-label">Image</label>
              <input class="form-control form-control-sm" name="image" accept="image/*" type="file" required>
              </div>
              <input type="hidden" name="role" value="1">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>

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
                  placeholder="Enter Name" value="{{ old('first_name') }}" required/>
                @error('first_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
          </div>

          <div class="form-outline mb-2">
            <label class="form-label">Middle Name</label>
              <input type="type" name="middle_name" class="form-control form-control-lg"
                placeholder="Enter Name" value="{{ old('middle_name') }}" required/>
              @error('middle_name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>

          <div class="form-outline mb-2">
            <label class="form-label">Last Name</label>
              <input type="type" name="last_name" class="form-control form-control-lg"
                placeholder="Enter Name" value="{{ old('last_name') }}" required/>
              @error('last_name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>

          <div class="form-outline mb-2">
            <label class="form-label">Contact number</label>
              <input type="type" name="contact_number" class="form-control form-control-lg"
                placeholder="Enter Name" value="{{ old('contact_number') }}" required/>
              @error('contact_number')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>

          <div class="form-outline mb-2">
            <label class="form-label">Address</label>
              <input type="type" name="address" class="form-control form-control-lg"
                placeholder="Enter Name"  value="{{ old('address') }}" required/>
              @error('address')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>

          <!-- Email input -->
          <div class="form-outline mb-2">
          <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address"  value="{{ old('email') }}" required/>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-outline mb-2">
            <label class="form-label">Services</label>
            <select class="form-select" name="service_id" aria-label="Default select example" required>
                <option selected>Open this select menu</option>
                @forelse($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
                @empty
                <option value="" disabled>No Current Service.</option>
              @endforelse
              </select>
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



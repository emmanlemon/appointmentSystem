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
                    {{ $doctor->id }}
                    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                    <span class="title-header">Full Name</span>
                    <div class="d-flex flex-row gap-1 w-100">
                      <div class="form-outline mb-2">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control form-control-lg" placeholder="First Name" required/>
                      </div>
                      <div class="form-outline mb-2">
                        <label class="form-label">Middle Name</label>
                        <input type="text" name="middle_name" class="form-control form-control-lg" placeholder="Middle Name" required/>
                      </div>
                      <div class="form-outline mb-2">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control form-control-lg" placeholder="Last Name" required/>
                      </div>
                    </div>
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
                    <span class="title-header">Address</span>
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
                    </div>
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
                      <label>Additional Information/Comments</label>
                      <textarea class="form-control" name="comments" rows="4"></textarea>
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
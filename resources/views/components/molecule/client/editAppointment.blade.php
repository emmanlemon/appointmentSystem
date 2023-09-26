<div class="modal fade" id="editAppointmentModal{{ $row->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" data-backdrop="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Appointment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('appointment.update' , $row->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="my-2">
                        <span class="title-header">Full Name</span>
                        <input type="text" name="full_name" class="form-control form-control-lg"
                            placeholder="Full Name" value="{{ $row->full_name }}" required />
                    </div>
                    <div class="my-2">
                        <span class="title-header">Age</span>
                        <input type="number" name="age" value="{{ $row->age }}" class="form-control form-control-lg" placeholder="Age"
                            required />
                    </div>
                    <div class="my-2">
                        <label class="form-label">Marital Status</label>
                        <select class="form-select" name="marital_status">
                            <option value="Single" @if($row->marital_status === 'Single') selected @endif>Single</option>
                            <option value="Married" @if($row->marital_status === 'Married') selected @endif>Married</option>
                            <option value="Separated" @if($row->marital_status === 'Separated') selected @endif>Separated</option>
                            <option value="Divorced" @if($row->marital_status === 'Divorced') selected @endif>Divorced</option>
                            <option value="Widowed" @if($row->marital_status === 'Widowed') selected @endif>Widowed</option>
                        </select>
                    </div>
                    <div class="d-flex flex-row gap-1">
                        <div class="form-outline mb-2">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control form-control-lg" value="{{ $row->date }}" required />
                        </div>
                        <div class="form-outline mb-2 w-100">
                            <label class="form-label">Gender</label>
                            <select class="form-select" name="gender">
                                <option value="Male" @if($row->gender === 'Male') selected @endif>Male</option>
                                <option value="Female" @if($row->gender === 'Female') selected @endif>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="my-2">
                        <span class="title-header">Address</span>
                        <input type="text" name="address" class="form-control form-control-lg" value="{{ $row->address }}" placeholder="Address"
                            required />
                    </div>
                    <div class="fullname d-flex flex-row gap-1">
                        <div class="form-outline mb-2">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control form-control-lg" value="{{ $row->email }}"
                                placeholder="Email" required />
                        </div>
                        <div class="form-outline mb-2">
                            <label class="form-label">Contact Number</label>
                            <input type="number" name="contact_number" value="{{ $row->contact_number }}" class="form-control form-control-lg"
                                placeholder="Contact Number" required />
                        </div>
                    </div>
                    <div class="fullname d-flex flex-row gap-1">
                        <div class="form-outline mb-2 w-100">
                            <label class="form-label">Appointment Date</label>
                            <input type="date" name="date" class="form-control form-control-lg" required value="{{ $row->date }}" />
                        </div>
                        <div class="form-outline mb-2 w-100">
                            <label class="form-label">Appointment Time</label>
                            <input type="time" name="time" class="form-control form-control-lg" required value="{{ $row->time }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Additional Information/Concern</label>
                        <textarea class="form-control" name="concern" rows="4">{{ $row->concern }}</textarea>
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

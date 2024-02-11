
  <!-- Add Doctor Modal -->
  <div class="modal fade" id="addServiceChildModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Announcement</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('service.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-outline mb-2">
                <label class="form-label">Services</label>
                <select class="form-select" name="service_id" aria-label="Default select example" required>
                    <option value="null">Open this select menu</option>
                    @forelse($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                    @empty
                    <option value="" disabled>No Current Service.</option>
                  @endforelse
                  </select>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label">Name</label>
                  <input type="type" name="name" class="form-control form-control-lg"
                    placeholder="Enter Name" required/>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>

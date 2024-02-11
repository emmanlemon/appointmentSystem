
  <!-- Add Doctor Modal -->
  <div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Event</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-outline mb-2">
              <label class="form-label">Title</label>
                <input type="type" name="title" class="form-control form-control-lg"
                  placeholder="Enter Title" required/>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label">Event Date</label>
                  <input type="date" name="event_date" class="form-control form-control-lg"
                    placeholder="Enter Title" required/>
              </div>
              <div class="form-outline mb-2">
                <label for="formFileSm" class="form-label">Image</label>
                <input class="form-control form-control-sm" name="image[]" accept="image/*" type="file" required>
                <input class="form-control form-control-sm" name="image[]" accept="image/*" type="file" required>
                <input class="form-control form-control-sm" name="image[]" accept="image/*" type="file" required>
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

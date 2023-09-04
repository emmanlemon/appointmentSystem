
<div class="modal fade" id="editServiceModal{{ $service->id }}" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('services.update' , $service->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-outline mb-2">
              <label class="form-label">Name of Service</label>
                <input type="type" class="form-control form-control-lg" value="{{ $service->name }}"
                  placeholder="Enter Name of Service" name="name" required/>
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

@extends('components.format.sidebarNavigation')
<title>Admin Carousel</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>
    Carousel List</span>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Add Carousel +</button>
</div>
   <div class="container">
    @if(Session::has('delete'))
    <div class="alert alert-danger">{{ Session::get('delete') }}</div>
    @elseif(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Picture</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @php $count = 1; @endphp
          @forelse($carousels as $carousel)
          <tr>
            <th>{{ $count++ }}</th>
            <td><img src="{{ asset("images/carousel/$carousel->image") }}" alt="" height="200px" width="200px"></td> 
            <td>{{ $carousel->title }}</td>
            <td>{{ $carousel->description }}</td>
            <td>{{ $carousel->created_at }}</td>
            <td colspan="2">
              <div>
                  <button class="btn btn-success">Edit</button>
              </div>
              <form action='{{ route('carousel.destroy' , $carousel->id) }}' method="post">
                      <input class="btn btn-danger" type="submit" value="Delete" />
                      @method('delete')
                      @csrf
              </form>
            </td>
          </tr>
          @empty
            <tr>
                <td colspan="7">No Carousel found.</td>
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
          <h5 class="modal-title" id="exampleModalLongTitle">Add Carousel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('carousel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-outline mb-2">
              <label class="form-label">Title</label>
                <input type="type" name="title" class="form-control form-control-lg"
                  placeholder="Enter Title" required/>
            </div>
            <div class="form-outline mb-2">
                <label class="form-label">Description</label>
                  <input type="type" name="description" class="form-control form-control-lg"
                    placeholder="Enter Description" required/>
              </div>
              <div class="form-outline mb-2">
                <label for="formFileSm" class="form-label">Image</label>
                <input class="form-control form-control-sm" name="image" accept="image/*" type="file" required>
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
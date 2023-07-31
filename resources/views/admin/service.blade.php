@include('components.molecule.admin.addService')
@extends('components.format.sidebarNavigation')
<title>Admin Carousel</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>
    Service List</span>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addServiceModal">Add Service +</button>
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
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @php $count = 1; @endphp
          @forelse($carousels as $carousel)
          <tr>
            <th>{{ $count++ }}</th>
            <td colspan="2">
              <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editDoctorModal">Edit</button>
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
                <td colspan="7">No Service found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
   </div>
</section>
@endsection

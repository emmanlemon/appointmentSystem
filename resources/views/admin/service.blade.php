@include('layout')
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

    <div class="input-group rounded mb-1">
        <input type="text" id="searchInput" class="form-control p-3" placeholder="Search Service...">
        <span class="input-group-text border-0" id="search-addon">
            <i class='bx bx-search-alt-2' ></i>
    </span>
      </div>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Prescription</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @php $count = 1; @endphp
          @forelse($services as $service)
          <tr>
            <th>{{ $count++ }}</th>
            <td><img src="{{ asset("images/services/$service->image") }}" alt="" height="200px" width="200px"></td>
            <th>{{ $service->name }}</th>
            <th>{{ $service->description }}</th>
            <th>{{ $service->prescription }}</th>
                <td colspan="2" class="col">
                    <div class="d-flex gap-2">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editServiceModal{{ $service->id }}" data-id="{{ $service->id }}">Edit</button>
                        @include('components.molecule.admin.editService')
                      <form action='{{ route('services.destroy', $service->id) }}' method="post">
                        <input class="btn btn-danger" type="submit" value="Delete" />
                        @method('delete')
                        @csrf
                      </form>
                    </div>
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

@extends('layout.master')

@section('content')
<title>Admin Carousel</title>
@section('sideBarNavigation')
@include('components.molecule.admin.addService')
@include('components.molecule.admin.addServiceChild')
<section class="home-section">
   <div class="title"><span>
    Service List
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addServiceModal">Add Service +</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addServiceChildModal">Add ServiceChild +</button>
  </span>
      <!-- Example split danger button -->
<div class="btn-group" class="position: fixed;">
  <button type="button" class="btn btn-primary"><i class="fa fa-user-circle-o" aria-hidden="true"></i></button>
  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu dropdown-menu-right"> <!-- Add dropdown-menu-right class here -->
    <a class="dropdown-item" href="#">{{ $user->email }}</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="{{ route('auth.logout') }}">
      <i class='bx bx-log-out'></i>
      <span class="links_name">Logout</span>
    </a>
  </div>    
</div>
</div>
   <div class="container">
    <div class="input-group rounded mb-1">
      <input type="text" id="searchInput" class="form-control p-3" placeholder="Search Service...">
      <span class="input-group-text border-0" id="search-addon">
          <i class='bx bx-search-alt-2' ></i>
   </span>
    </div>
    
    @if(Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @elseif(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @elseif(Session::has('delete'))
    <div class="alert alert-danger">{{ Session::get('delete') }}</div>
    @endif

    <table class="table table-striped text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Prescription</th>
            <th scope="col">Service Child</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @php $count = 1; @endphp
          @forelse($servicesWithChildren as $service)
          <tr>
            <th>{{ $count++ }}</th>
            <td><img src="{{ asset("images/services/$service->image") }}" alt="" height="200px" width="200px"></td>
            <th>{{ $service->name }}</th>
            <th>{{ $service->description }}</th>
            <th>{{ $service->prescription }}</th>
            <th>
              <button type="button" class="btn btn-warning py-2 px-3" data-toggle="modal" data-target="#showServiceChild{{ $service->id }}" data-id="{{ $service->id }}"><i class="fa fa-eye" aria-hidden="true"></i></button>     
              <div class="modal fade" id="showServiceChild{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">{{ $service->name }} Service Child</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                         <table class="table table-striped">
                          <tbody>
                            @foreach($service->children->chunk(3) as $chunk)
                              <tr>
                                @forelse($chunk as $row)
                                  <td>
                                    <div class="d-flex gap-2 text-capitalize">
                                      {{ $row->name }}
                                    <form action="{{ route('service.delete', $row->id) }}" method="post">
                                      <button class="btn btn-danger" type="submit">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                      </button>  
                                      @csrf
                                      @method('delete')
                                    </form>
                                    </div>
                                  </td>
                                  @empty
                                  <p>No Service Child.</p>
                                  @endforelse
                                 </tr>
                            @endforeach
                          </tbody>  
                         </table>
                      {{-- @forelse($service->children as $children)
                      <div class="d-flex gap-2 text-capitalize mb-1">
                        {{ $children->name }} 
                        <form action="{{ route('service.delete', $children->id) }}" method="post">
                          <button class="btn btn-danger" type="submit">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>  
                          @csrf
                          @method('delete')
                        </form>
                      </div>
                      @empty
                      @endforelse --}}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </th>
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
          {{-- <tr colspan="7">
            <td colspan="7">
              <div class="d-flex gap-2" style="overflow-x: auto;">
                @forelse($service->children as $children)
                  {{ $children->name }} 
                  <form action="{{ route('service.delete', $children->id) }}" method="post">
                    <button class="btn btn-danger" type="submit">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>  
                    @csrf
                    @method('delete')
                  </form>
                @empty
                @endforelse
              </div>
            </td>
          </tr>           --}}
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


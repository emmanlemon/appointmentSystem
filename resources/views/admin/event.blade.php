@extends('layout.master')

@section('content')
<title>Admin Event</title>
@section('sideBarNavigation')
@include('components.molecule.admin.addEvent')
<section class="home-section">
   <div class="title"><span>
    Event List
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEventModal">Add Event +</button>
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
    @if(Session::has('delete'))
    <div class="alert alert-danger">{{ Session::get('delete') }}</div>
    @elseif(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <div class="input-group rounded my-2">
      <input type="text" id="searchInput" class="form-control p-3" placeholder="Search Event...">
      <span class="input-group-text border-0" id="search-addon">
          <i class='bx bx-search-alt-2' ></i>
    </span>
    </div>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Event Date</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php $count = 1; @endphp
          @forelse($events as $event)
          <tr>
            <th>{{ $count++ }}</th>
            <th>{{ $event->title }}</th>
            <th>{{ $event->event_date }}</th>
            <th>
                  @forelse (json_decode($event->file_name) as $img)
                      <img src="{{ asset("images/events/$img->fileName") }}" alt="" height="200px" width="200px" style="margin-right: 10px;">
                  @empty
                  @endforelse
          </th>          
            <td colspan="2">
              <form action='{{ route('events.destroy' , $event->id) }}' method="post">
                      <input class="btn btn-danger float-right" type="submit" value="Delete" />
                      @method('delete')
                      @csrf
              </form>
          </td>
          </tr>
          @empty
            <tr>
              <td colspan="7">No Event found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
   </div>
</section>

  @endsection

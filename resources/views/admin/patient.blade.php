@extends('layout.master')

@section('content')
<title>Admin Patient List</title>
<section class="home-section">
   <div class="title"><span>Patient List</span>
  
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
    <div class="input-group rounded my-2">
        <input type="text" id="searchInput" class="form-control p-3" placeholder="Search Patient...">
        <span class="input-group-text border-0" id="search-addon">
            <i class='bx bx-search-alt-2' ></i>
    </span>
      </div>
      <div class="table-responsive">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
            <th scope="col">Status</th>
            <th scope="col">Address</th>
            <th scope="col">Birthdate</th>
            <th scope="col">Contact</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
         @php $count = 1; @endphp
          @forelse($clients as $client)
          <tr>
            <th>{{ $count++ }}</th>
            <td>{{ $client->full_name }}</td>
            <td>{{ $client->gender }}</td>
            <td>{{ $client->age }}</td>
            <td>{{ $client->marital_status }}</td>
            <td>{{ $client->address }}</td>
            <td>{{ date('F j, Y', strtotime($client->date_of_birth)) }}</td>
            <td>{{ $client->contact_number }}</td>
            <td>{{ $client->address }}</td>
            <td>{{ $client->email }}</td>
          </tr>
          @empty
            <tr>
                <td colspan="10">No Patient found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
      </div>
   </div>
</section>
@endsection

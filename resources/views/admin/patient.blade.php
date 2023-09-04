@include('layout')
@extends('components.format.sidebarNavigation')
<title>Admin Patient List</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>Patient List</span></div>
   <div class="container">
    <div class="input-group rounded my-2">
        <input type="text" id="searchInput" class="form-control p-3" placeholder="Search Patient...">
        <span class="input-group-text border-0" id="search-addon">
            <i class='bx bx-search-alt-2' ></i>
    </span>
      </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
         @php $count = 1; @endphp
          @forelse($clients as $client)
          <tr>
            <th>{{ $count++ }}</th>
            <td>{{ $client->first_name }} {{ $client->middle_name }} {{ $client->last_name }}</td>
            <td>{{ $client->gender }}</td>
            <td>{{ $client->address }}</td>
            <td>{{ $client->date_of_birth }}</td>
            <td>{{ $client->contact_number }}</td>
            <td>{{ $client->city }} {{ $client->province }}</td>
            <td>{{ $client->email }}</td>
          </tr>
          @empty
            <tr>
                <td colspan="8">No Patient found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
   </div>
</section>
@endsection

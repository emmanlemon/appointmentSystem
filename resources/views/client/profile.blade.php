@extends('layout.master')

@section('content')
<title>Profile</title>
@section('sideBarNavigationClient')
<section class="home-section">
    <div class="title"><span>Profile</span>
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
    <table class="table table-striped text-uppercase">
      <thead>
        <tr>
          <th scope="col"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            INFORMATION</th>
            <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Name</th>
          <td class="text-center">{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</td>
        </tr>
        <tr>
          <th scope="row">Age</th>
          <td class="text-center">{{ $user->age }}</td>
        </tr>
        <!-- <tr>
          <th scope="row">Gender</th>
          <td class="text-center">{{ $user->gender }}</td>
        </tr> -->
        <tr>
          <th scope="row">Address</th>
          <td class="text-center">{{ $user->address }}</td>
        </tr>
        <tr>
          <th scope="row">Contact Number</th>
          <td class="text-center">{{ $user->contact_number }}</td>
        </tr>
        <tr>
          <th scope="row">Email</th>
          <td class="text-center">{{ $user->email }}</td>
        </tr>
        <tr>
          <th scope="row">Date Created</th>
          <td class="text-center">{{ $user->created_at }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

@endsection
@endsection
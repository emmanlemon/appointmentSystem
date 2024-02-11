@extends('layout.master')

@section('content')
<title>Appointment List</title>
@section('sideBarNavigationClient')
<section class="home-section">
    <div class="title"><span>Dashboard</span>
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
</section>
@endsection
@endsection
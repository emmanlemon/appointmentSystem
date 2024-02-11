@extends('layout.master')

@section('content')
<title>Admin Dashboard</title>
@section('sideBarNavigation')
<section class="home-section">
    <div class="title">
        <span>
        Admin Dashboard
    </span>
   <!-- Example split danger button -->
   <div class="btn-group">
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
<div class="p-3 d-flex gap-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Doctor</h5>
            <p class="card-text">{{ $doctors->count() }}</p>
            <a href="{{ route('admin' , 'doctor') }}" class="btn btn-primary">See Doctor List</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Patient</h5>
            <p class="card-text">{{ $clients->count() }}</p>
            <a href="{{ route('admin' , 'patient') }}" class="btn btn-primary">See Patient List</a>
    </div>
</div>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Service</h5>
        <p class="card-text">{{ $services->count() }}</p>
        <a href="{{ route('admin' , 'service') }}" class="btn btn-primary">See Service List</a>
</div>
</div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Announcements</h5>
            <p class="card-text">{{ $announcements->count() }}</p>
            <a href="{{ route('admin' , 'announcement') }}" class="btn btn-primary">See Announcement</a>
    </div>
</div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Carousel</h5>
            <p class="card-text">{{ $carousels->count() }}</p>
            <a href="{{ route('admin' , 'carousel') }}" class="btn btn-primary">See Carousel List</a>
    </div>
</div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Reports</h5>
            <p class="card-text">{{ $reports->count() }}</p>
            <a href="{{ route('admin', 'reports') }}" class="btn btn-primary">See Report List</a>
    </div>
</div>

</div>

</section>
@endsection

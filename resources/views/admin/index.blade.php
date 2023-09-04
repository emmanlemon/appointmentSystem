@include('layout')
@extends('components.format.sidebarNavigation')
<title>Admin Dashboard</title>
@section('sideBarNavigation')
<section class="home-section">
    <div class="title"><span>
        Admin Dashboard</span>
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
            <h5 class="card-title">Announcements</h5>
            <p class="card-text">{{ $announcements->count() }}</p>
            <a href="{{ route('admin' , 'announcement') }}" class="btn btn-primary">See Announcement List</a>
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
    </div>
</section>
@endsection

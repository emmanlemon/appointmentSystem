@extends('layout.master')

@section('content')
<title>Admin Log</title>
@section('sideBarNavigation')
<section class="home-section">
   <div class="title"><span>
    Admin Log List</span>
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
        <input type="text" id="searchInput" class="form-control p-3" placeholder="Search Log...">
        <span class="input-group-text border-0" id="search-addon">
            <i class='bx bx-search-alt-2' ></i>
      </span>
      </div>
    <table class="table table-striped text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Login History</th>
          </tr>
        </thead>
        <tbody>
        @php $count = 1; @endphp
          @forelse($loginHistory as $user)
          <tr>
            <th>{{ $count++ }}</th>
            <td>{{ $user->user->first_name }}{{ $user->user->middle_name }}{{ $user->user->last_name }}</td>
            <td>{{ $user->user->email }}</td>
            <td>{{ $user->user->role == 0 ? "Client" : ($user->user->role == 1 ? "Doctor" : "Admin")}}</td>
            <td>{{ date('F j, Y g:i a', strtotime($user->created_at)) }}</td>
          </tr>
          @empty
            <tr>
                <td colspan="7">No Log found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
      <div class="d-flex justify-content-end">
        {{ $loginHistory->links()}}
    </div>
   </div>
</section>
@endsection

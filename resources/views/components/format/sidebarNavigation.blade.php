<link rel="stylesheet" style="text/css" href="{{ url('css/sideBarNavigation.css') }}">
<div class="sidebar">
    <img src="{{ asset('images/logoMBP.png') }}"
        alt="" style="width:50px; height:50px;">
    <div class="logo-details">
        <div class="logo_name">MBP-Blessed Trinity General Hospital</div>
    </div>
    <ul class="nav-list" style="padding-left:0;">
      <li>
        <a href="{{ Session::get('role') != 1 ? route('admin', 'index') : route('doctor' , 'index') }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="#" style="background-color:#329dc7;">
          <span class="links_name">Master List</span>
        </a>
        <span class="tooltip">Master List</span>
      </li>
      @if(Session::get('role') == 2)
     <li>
       <a href="{{ route('admin' , 'doctor') }}">
        <i class='bx bx-user-circle' ></i>
        <span class="links_name">Doctor</span>
       </a>
       <span class="tooltip">Doctor</span>
     </li>
     <li>
        <a href="{{ route('admin' , 'patient') }}">
            <i class='bx bx-plus-medical'></i>
        <span class="links_name">Patient List</span>
        </a>
        <span class="tooltip">Patient List</span>
      </li>
      <li>
        <a href="{{ route('admin' , 'service') }}">
            <i class='bx bxs-capsule' ></i>
            <span class="links_name">Service List</span>
        </a>
        <span class="tooltip">Service List</span>
      </li>
      <li>
        <a href="{{ route('admin' , 'appointment_list') }}">
            <i class='bx bxs-envelope' ></i>
            <span class="links_name">Appointment List</span>
        </a>
        <span class="tooltip">Appointment List</span>
      </li>
      <li>
        <a href="{{ route('admin' , 'announcement') }}">
          <i class='bx bx-cog' ></i>
          <span class="links_name">Content Management</span>
        </a>
        <span class="tooltip">Content Management</span>
      </li>
      <li>
        <a href="{{ route('admin' , 'event') }}">
          <i class='bx bx-cog' ></i>
          <span class="links_name">Event List</span>
        </a>
        <span class="tooltip">Event List</span>
      </li>
      <li>
        <a href="{{ route('admin' , 'log') }}">
          <i class='bx bx-cog' ></i>
          <span class="links_name">Log List</span>
        </a>
        <span class="tooltip">Log</span>
      </li>
      @else
      <li>
        <a href="{{ route('doctor' , 'appointment_detail') }}">
          <i class='bx bx-cog'></i>
          <span class="links_name">Appointment Detail</span>
        </a>
        <span class="tooltip">Appointment Detail</span>
      </li>
      <li>
        <a href="{{ route('doctor' , 'appointment_list') }}">
          <i class='bx bx-cog'></i>
          <span class="links_name">Appointment List</span>
        </a>
        <span class="tooltip">Appointment List</span>
      </li>
      @endif
      <li>
        <a href="{{ Session::get('role') != 1 ? route('admin', 'reports') : route('doctor' , 'reports') }}">
            <i class='bx bxs-report' ></i>
            <span class="links_name">Report</span>
        </a>
        <span class="tooltip">Report</span>
      </li>
      {{-- <li>
        <a href="{{ route('auth.logout') }}">
            <i class='bx bx-log-out' ></i>
            <span class="links_name">Logout</span>
        </a>
        <span class="tooltip">Logout</span>
      </li> --}}
    </ul>
  </div>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");
  sidebar.classList.toggle("open");
  </script>
  <script>
    $(document).ready(function() {
      $("#searchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("tbody tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
@yield('sideBarNavigation')

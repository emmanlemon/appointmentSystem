{{-- @include('layout') --}}
<nav class="navbar navbar-expand-lg p-1 border-bottom border-info" style="background-color:#329dc7;">
    <a class="navbar-brand" href="#" style="color:white; text-shadow: 1px 1px 1px black; font-weight: bold;">
        <img src="{{ asset('images/logoMBP.png') }}" class="img-fluid" style="width: 100px; height: 100px;">
        MBP-Blessed Trinity General Hospital
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/guest') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('guest', 'medical_services') }}">Medical Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                    href="{{ !empty(Session::has('loginId')) ? route('client', 'doctor') : route('guest', 'doctor') }}">Book an Appoinment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('guest', 'activities') }}">Activities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('guest', 'aboutus') }}">About Us</a>
            </li>
            @if (!empty(Session::has('loginId')))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('client', 'appointment_list') }}">Appointment List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('auth.logout') }}">Logout</a>
                </li>
            @else
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('auth.login') }}">Login</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('auth.register') }}">Sign Up</a>
                </li>
            @endif
        </ul>
    </div>
</nav>

<script>
    $(document).ready(function() {
      $("#searchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#find_doctor ").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>

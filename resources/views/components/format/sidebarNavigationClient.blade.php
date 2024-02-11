<link rel="stylesheet" style="text/css" href="{{ url('css/sideBarNavigation.css') }}">
<div class="sidebar">
    <img src="{{ asset('images/logoMBP.png') }}"
        alt="" style="width:50px; height:50px;">
    <div class="logo-details">
        <div class="logo_name">MBP-Blessed Trinity General Hospital</div>
    </div>
    <ul class="nav-list" style="padding-left:0;">
      <li>
        <a href="{{  route('client', ['index', 'clientHeader' => null]) }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Home</span>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
        <a href="#" style="background-color:#329dc7;">
          <span class="links_name">Master List</span>
        </a>
        <span class="tooltip">Master List</span>
      </li>
      <li>
        <a href="{{ route('client', ['profile', 'clientHeader' => 1]) }}">
            <i class='bx bxs-report' ></i>
            <span class="links_name">Profile</span>
        </a>
        <span class="tooltip">Profile</span>
      </li>
      <li>
        <a href="{{ route('client', ['appointment_list', 'clientHeader' => 1]) }}">
            <i class='bx bxs-report' ></i>
            <span class="links_name">Appointment List</span>
        </a>
        <span class="tooltip">Appointment List</span>
      </li>
      <li>
        <a href="{{ route('client', ['report', 'clientHeader' => 1]) }}">
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
  // let sidebar = document.querySelector(".sidebar");
  // let closeBtn = document.querySelector("#btn");
  // let searchBtn = document.querySelector(".bx-search");

  // closeBtn.addEventListener("click", ()=>{
  //   sidebar.classList.toggle("open");
  //   menuBtnChange();//calling the function(optional)
  // });

  // searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  //   sidebar.classList.toggle("open");
  //   menuBtnChange(); //calling the function(optional)
  // });

  // // following are the code to change sidebar button(optional)
  // function menuBtnChange() {
  //  if(sidebar.classList.contains("open")){
  //    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
  //  }else {
  //    closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
  //  }
  // }
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
@yield('sideBarNavigationClient')

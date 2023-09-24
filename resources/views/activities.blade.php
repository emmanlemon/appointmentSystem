@include('components.format.header')
<title>Activities Dashboard</title>
<div class="container min-vh-150 mt-2 mb-4">
    <div class="h-25 w-100 p-4" style="background-image:url({{ asset('images/volunteer.jpeg') }}); background-size: 100% 250px; background-repeat: no-repeat;">
        <p class="p-0 m-0" style="font-size: 40px; text-shadow:2px 2px 2px white;">VOLUNTEER & </p>
        <p class="p-0 m-0" style="font-size: 40px; text-shadow:2px 2px 2px white;">ACTIVITIES</p>
    </div>
    <div class="title">Activities</div>
    <div class="mt-2">
        <span class="">World Surgical Foundation PH @ Mbp HospitalOctober 9, 2018</span>
        <div class="row">
            <div class="col-4">
              <img src="{{ asset("images/activities/act.jpg") }}" alt="" height="300px" width="100%">
            </div>
            <div class="col-4">
              <img src="{{ asset("images/activities/act1.jpg") }}" alt="" height="300px" width="100%">
            </div>
            <div class="col-4">
              <img src="{{ asset("images/activities/act2.jpg") }}" alt="" height="300px" width="100%">
            </div>
          </div>
    </div>

        <div>
            <span class="">MBP Medical Mission July 12, 2018</span>
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset("images/activities/act4.jpg") }}" alt="" height="300px" width="100%">
                  </div>
                  <div class="col-4">
                    <img src="{{ asset("images/activities/act5.jpg") }}" alt="" height="300px" width="100%">
                  </div>
                  <div class="col-4">
                    <img src="{{ asset("images/activities/act6.jpg") }}" alt="" height="300px" width="100%">
                  </div>
            </div>
        </div>
</div>
@include('components.format.footer')

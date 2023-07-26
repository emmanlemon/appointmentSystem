@include('components.format.header')
<title>Activities Dashboard</title>
<div class="container min-vh-100 mt-2">
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

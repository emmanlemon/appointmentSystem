@include('components.format.header')
<title>Client Dashboard</title>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
    <ol class="carousel-indicators">
      {{-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset("images/MBP-Background.jpg") }}" width="100%" height="600vh" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1>Your Reliable Healthcare Partner</h1>
        </div>
      </div>
      @foreach ($carousels as $carousel)
      <div class="carousel-item">
        <img src="{{ asset("/images/carousel/$carousel->image") }}" width="100%" height="600vh" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>...</h5>
          <p>...</p>
        </div>
      </div>
     @endforeach
      </div>
    </div>
    {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> --}}
  </div>
  <div class="h-50">
      <div class="container_choose">
          <!-- Why us top titile -->
              <div class="title_area">
                <p>Choose MBP!</p>
                <span></span>
              </div>
          <!-- End Why us top titile -->
          <!-- Start Why us top content  -->
          <div class="choose_sepnas">

                    <div class="col-lg-3 col-md-3 col-sm-3" style="width: 100%;">
              <div class="container_icon">
                <div class="whyus_icon">
                  <span class="icon fa fa-group"></span>
                </div>
                <h3>Qualified Educators</h3>
                <p>Education comes at an equally good cost for our stakeholders with qualified educators giving the best knowledge to students.</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3"style="width: 100%;">
              <div class="container_icon">
                <div class="whyus_icon">
                  <span class="icon fa fa-desktop">
                </span></div>
                <h3>Technology and Innovation</h3>
                <p>Provides advanced tools and equipment which allow students to learn at their own pace.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3" style="width: 100%;">
              <div class="container_icon">
                <div class="whyus_icon">
                  <span class="icon fa fa-plane">
                </span></div>
                <h3>A World of Opportunity</h3>
                <p>Broaden your horizons by joining diverse organizations and competitions inside and outside the university.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3" style="width: 100%;">
              <div class="container_icon">
                <div class="whyus_icon">
                  <span class="icon fa fa-book">
                </span></div>
                <h3>Knowledge for Life</h3>
                <p>More than education, SEPNAS gives you the skills, confidence and a culture of Lifelong Learning experience to help you make your world better.</p>
              </div>
            </div>

          </div>
          <!-- End Why us top content  -->
        </div>
  </div>
  <div class="location">
    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=Blessed Trinity General Hospital&t=k&z=18&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
  </div>
  @include('components.format.footer')

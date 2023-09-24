@include('layout')
@include('components.format.header')
<title>MBP Dashboard</title>
{{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    @foreach ($carousels as $carousel)
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset("images/announcement/$carousel->image") }}" alt="First slide">
      </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> --}}

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
    <ol class="carousel-indicators">
        {{-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('images/MBP-Background.jpg') }}" width="100%" height="600vh"
                alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1>Your Reliable Healthcare Partner</h1>
            </div>
        </div>
        @foreach ($carousels as $carousel)
            <div class="carousel-item">
                <img src="{{ asset("/images/carousel/$carousel->image") }}" width="100%" height="600vh"
                    alt="...">
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

<div class="container py-4">
    @if ($announcements !== null)
        <div style="display: flex; align-items:center; justify-content:center;">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">Latest Announcement!</strong>
                        <h3 class="mb-0">
                            <a class="text-dark text-uppercase" href="#">{{ $announcements->title }}</a>
                        </h3>
                        {{-- <div class="mb-1 text-muted">Nov 11</div> --}}
                        <div class="p-0 m-0">
                            <p class="card-text m-0 p-0">Description: {{ $announcements->description }}</p>
                            <p class="card-text m-0 p-0">Link: <a href="{{ $announcements->link }}" target="blank"
                                    class="card-text mb-auto">{{ $announcements->link }}</a></p>
                            <p class="card-text m-0 p-0">Created at:
                                {{ date('F j, Y, g:i a', strtotime($announcements->created_at)) }}</p>
                        </div>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]"
                        src="{{ asset("images/announcement/$announcements->image") }}" data-holder-rendered="true"
                        style="width: 200px; height: 250px;">
                </div>
            </div>
        </div>
    @endif
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Why Blessed Trinity General Hospital?</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">MBP Number One!</a>
                    </h3>
                    {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
                    <p class="card-text mb-auto">Blessed Trinity General Hospital is a prominent medical institution
                        known for its dedication to providing top-notch healthcare services to the community. With a
                        team of highly skilled doctors, nurses, and staff, the hospital offers a wide range of medical
                        specialties and cutting-edge technology for diagnosis and treatment."</p>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                    alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                    src="{{ asset('images/hospital.jpeg') }}" data-holder-rendered="true">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Will Blessed Trinity General Hospital look after
                        you?</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">MBP Sigurado Alaga Ka</a>
                    </h3>
                    {{-- <div class="mb-1 text-muted">Nov 11</div> --}}
                    <p class="card-text mb-auto">Blessed Trinity General Hospital takes immense pride in its unwavering
                        commitment to providing exceptional care to every patient admitted to its Medical-Bed Pavilion
                        (MBP). With a relentless focus on patient well-being, the hospital's dedicated medical
                        professionals ensure that each individual receives the highest standard of care and attention.
                    </p>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]"
                    src="{{ asset('images/healthcare.jpeg') }}" data-holder-rendered="true"
                    style="width: 200px; height: 250px;">
            </div>
        </div>
    </div>
</div>
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
                <h3>Reputation</h3>
                <p>
                    Blessed Trinity General Hospital enjoys a stellar reputation, known for its exceptional medical
                    care, compassionate staff, and commitment to improving the health and well-being of the community it
                    serves.</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3"style="width: 100%;">
            <div class="container_icon">
                <div class="whyus_icon">
                    <span class="icon fa fa-desktop">
                    </span>
                </div>
                <h3>Technology and Innovation</h3>
                <p>Blessed Trinity General Hospital is a beacon of healthcare excellence. With compassionate staff and
                    modern facilities, it offers high-quality care, promoting health and well-being in our community.
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3" style="width: 100%;">
            <div class="container_icon">
                <div class="whyus_icon">
                    <span class="icon fa fa-cogs">
                    </span>
                </div>
                <h3>Expertise</h3>
                <p>Blessed Trinity General Hospital with specialized medical expertise and renowned healthcare
                    professionals may be chosen for specific medical conditions or treatments.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3" style="width: 100%;">
            <div class="container_icon">
                <div class="whyus_icon">
                    <span class="icon fa fa-book">
                    </span>
                </div>
                <h3>Knowledge for Life</h3>
                <p>"Knowledge for Life" at Blessed Trinity General Hospital signifies a perpetual dedication to learning
                    and growth in healthcare, ensuring the best possible care for our community's well-being.</p>
            </div>
        </div>

    </div>
    <!-- End Why us top content  -->
</div>
</div>

<div class="container">
    <div class="row">
        <div class="title_area">
            <p>MBP Medical Services!</p>
            <span></span>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                    src="{{ asset('images/services/cholec.jpeg') }}" data-holder-rendered="true">
                <div class="card-body">
                    <h4>CHOLECYSTECTOMY</h4>
                    <p class="card-text">The hospital specializes in performing cholecystectomies, a surgical procedure
                        for gallbladder removal. Our skilled medical team ensures safe and effective surgeries,
                        prioritizing patient well-being and recovery.</p>
                    {{-- <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div> --}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" alt="Thumbnail [100%x225]"
                    style="height: 225px; width: 100%; display: block;"
                    src="{{ asset('images/services/xray.jpeg') }}" data-holder-rendered="true">
                <div class="card-body">
                    <h4>X-RAY</h4>
                    <p class="card-text">At this hospital, cutting-edge X-ray facilities are readily available,
                        delivering accurate and swift diagnostic imaging crucial for comprehensive patient care and
                        efficient medical treatment.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" alt="Thumbnail [100%x225]"
                    style="height: 225px; width: 100%; display: block;"
                    src="{{ asset('images/services/ultra.jpeg') }}" data-holder-rendered="true">
                <div class="card-body">
                    <h4>ULTRASOUND</h4>
                    <p class="card-text">This hospital is equipped with advanced ultrasound technology, enabling
                        detailed and non-invasive imaging for precise diagnosis and effective medical care, ensuring
                        patients receive the highest quality healthcare.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" alt="Thumbnail [100%x225]"
                    style="height: 225px; width: 100%; display: block;"
                    src="{{ asset('images/services/laboratory.jpeg') }}" data-holder-rendered="true">
                <div class="card-body">
                    <h4>LABORATORY TEST</h4>
                    <p class="card-text">This hospital boasts a comprehensive laboratory, offering a wide range of
                        diagnostic tests. Our skilled technicians provide accurate results, aiding in prompt and
                        effective medical treatment for patients.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" alt="Thumbnail [100%x225]"
                    style="height: 225px; width: 100%; display: block;"
                    src="{{ asset('images/services/ortho.jpeg') }}" data-holder-rendered="true">
                <div class="card-body">
                    <h4>ORTHOPEDIC SURGERY</h4>
                    <p class="card-text">This hospital specializes in orthopedic surgery, offering cutting-edge
                        procedures and expert care for musculoskeletal conditions. Our dedicated team ensures patients
                        regain mobility and optimal health.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" alt="Thumbnail [100%x225]"
                    style="height: 225px; width: 100%; display: block;"
                    src="{{ asset('images/services/family-planning.jpeg') }}" data-holder-rendered="true">
                <div class="card-body">
                    <h4>FAMILY PLANNING</h4>
                    <p class="card-text">
                        Our hospital offers comprehensive family planning services, including counseling, contraception
                        options, and reproductive health education. We prioritize empowering individuals to make
                        informed choices about their family's .</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="location">
    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas"
                src="https://maps.google.com/maps?q=Blessed Trinity General Hospital&t=k&z=18&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                href="https://2yu.co">2yu</a><br>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 500px;
                    width: 100%;
                }
            </style><a href="https://embedgooglemap.2yu.co/">html embed google map</a>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 500px;
                    width: 100%;
                }
            </style>
        </div>
    </div>
</div>
@include('components.format.footer')

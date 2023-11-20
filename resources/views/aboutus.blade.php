@include('components.format.header')
<title>About Us Dashboard</title>
<div class="container min-vh-100 mt-2 mb-2">
    <div class="h-25 w-100 p-4" style="background-image:url({{ asset('images/history.png') }}); background-size: 100% 210px; background-repeat: no-repeat;">
    </div>
    <div class="row my-4">
        <div class="col-md-6">
        <img src="{{ asset("images/logoMBP.png") }}" class="img-fluid" alt="Hospital Image" width="900" height="100">

        </div>
        <div class="col-md-6">
            <h3 class="font-weight-bold text-uppercase">MPB-Blessed Trinity General Hospital, Inc. Profile</h3>
            <p>The MBP-Blessed Trinity General Hospital Inc. started as a Punzal-Maron Lying-in Clinic and Polyclinic in its preceding location in Pogonlomboy, Mangatarem, due to an increasing number of patients. The clinic was later transformed into a general hospital named MBP-Blessed Trinity General Hospital. The MBP-Blessed Trinity General Hospital was a dream conceived and materialized by its founder, Don Marcial B. Punzal, who served as the President of the corporation. The hospital is now located in Barangay Umangan, Mangatarem, Pangasinan, with a total land area of 4,800 sq.m. It caters to the health needs of West-Central Pangasinan.</p>
            <p>It started its operation on December 18, 2012, spearheaded by Dr. Jaime Ramos Maron and Dr. Rhodora Punzal Maron as Hospital Director and Hospital Administrator, respectively. Dr. Jaime R. Maron is a board-certified specialist in the field of General Surgery, while Dr. Rhodora P. Maron is also a board-certified specialist in the field of Obstetrics-Gynecology. The hospital was classified as a Level I, Secondary Hospital with a 30-bed capacity and is a PhilHealth Accredited facility. The hospital offers high-quality healthcare on commercial terms and works towards a preventive approach, pinpointing all possible risk areas and offering solutions with a team of skilled medical professionals and state-of-the-art equipment.</p>
        </div>
    </div>
    <img src="{{ asset("images/vm.png") }}" class="img-fluid" alt="Vision and Mission Image">
    <div class="location mt-4">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=Blessed Trinity General Hospital&t=k&z=18&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
    </div>
</div>
@include('components.format.footer')

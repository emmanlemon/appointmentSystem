@include('components.format.header')
<title>About Us Dashboard</title>
<div class="container min-vh-100 mt-2 mb-2">
    <div class="title">About Us</div>
    <div class="d-flex col my-2">
        <div class="img">
            <img src="{{ asset("images/MBP-Background.jpg") }}" width="500px">
        </div>
        <div class="p-2">
            <h3 class="font-weight-bold text-uppercase">MPB-Blessed Trinity General Hospital, Inc. Profile</h3>
            <p>The MBP-Blessed Trinity General Hospital Inc. started as a Punzal-Maron Lying-in Clinic and Polyclinic in its preceding location in Pogonlomboy, Mangatarem, due to increasing number of patient the clinic had been induced to be a general hospital named MBP-Blessed Trinity General Hospital. The MBP-Blessed Trinity General Hospital was a dream conceived and materialized by its founder Don Marcial B. Punzal, as the forerunner of the business he served as the President of the corporation. The MBP-Blessed Trinity General Hospital Inc., is now in its new location in Barangay Umangan, Mangatarem, Pangasinan which has a total land area of 4,800sq.m. It caters to the health needs of West-Central Pangasinan. It started its operation last December 18, 2012, spearheaded by Dr. Jaime Ramos Maron and Dr. Rhodora Punzal Maron as Hospital Director and Hospital Administrator respectively. Dr. Jaime R. Maron is a board certified specialist in the field of General Surgery while Dr. Rhodora P. Maron is also a board certified specialist in the field of Obstetrics-Gynecologist. The hospital was classified as a Level I, Secondary Hospital having the minimum services stipulated and facilities enumerated and have a 30 bed capacity and a PhilHealth Accredited facility. The hospital offers its medical services on a break-even financial basis, thus bringing high quality healthcare on commercial terms. They work towards a preventive approach, pinpointing all possible risk areas and offering solutions to each and every problem areas with the cream of medical fraternity and equipment.</p>
        </div>
    </div>
    <img src="{{ asset("images/vission-mission.jpg") }}" width="100%" height="500px">
    <div class="location mt-2">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=Blessed Trinity General Hospital&t=k&z=18&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
    </div>
</div>
@include('components.format.footer')
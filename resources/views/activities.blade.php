@include('components.format.header')
<title>Activities Dashboard</title>
<div class="container min-vh-100 mt-2">
    <div class="h-25 w-100 p-4" style="background-image:url({{ asset('images/events.png') }}); background-size: 100% 220px; background-repeat: no-repeat;">
    </div>

    <div class="mt-4 text-center">
        <span class="text-center font-weight-bold" style="font-size: 20px; font-family: Arial, sans-serif;">MEDICAL MISSION at MPB Blessed Trinity General Hospital, Mangatarem, Pangasinan, July 12, 2018</span>
        <div class="row justify-content-center"> <!-- Add justify-content-center to center the images -->
            <div class="col-4 mx-auto"> <!-- Add mx-auto class to center the image -->
                <img src="{{ asset("images/activities/act4.jpg") }}" alt="" height="300px" width="100%">
            </div>
            <div class="col-4 mx-auto"> <!-- Add mx-auto class to center the image -->
                <img src="{{ asset("images/activities/act5.jpg") }}" alt="" height="300px" width="100%">
            </div>
            <div class="col-4 mx-auto"> <!-- Add mx-auto class to center the image -->
                <img src="{{ asset("images/activities/act6.jpg") }}" alt="" height="300px" width="100%">
            </div>
        </div>
    </div>
    
    <div class="mt-4 text-center">
        <span class="text-center font-weight-bold" style="font-size: 20px; font-family: Arial, sans-serif;">WORLD SURGICAL FOUNDATION PHILIPPINES  at MPB Blessed Trinity General Hospital, Mangatarem, Pangasinan, October 9, 2018</span>
        <div class="row justify-content-center"> <!-- Add justify-content-center to center the images -->
            <div class="col-4 mx-auto"> <!-- Add mx-auto class to center the image -->
                <img src="{{ asset("images/activities/act.jpg") }}" alt="" height="300px" width="100%">
            </div>
            <div class="col-4 mx-auto"> <!-- Add mx-auto class to center the image -->
                <img src="{{ asset("images/activities/act1.jpg") }}" alt="" height="300px" width="100%">
            </div>
            <div class="col-4 mx-auto"> <!-- Add mx-auto class to center the image -->
                <img src="{{ asset("images/activities/act2.jpg") }}" alt="" height="300px" width="100%">
            </div>
        </div>
    </div>

    <div class="mt-4 text-center">
        <span class="text-center font-weight-bold" style="font-size: 20px; font-family: Arial, sans-serif;">LECTURE AND PANEL DISCUSSION ON PRIMARY CARE SURGERY at MPB Blessed Trinity General Hospital, Mangatarem, Pangasinan, December 31, 2021</span>
        <div class="row justify-content-center"> <!-- Add justify-content-center to center the images -->
            <div class="col-4 mx-auto"> <!-- Add mx-auto class to center the image -->
                <img src="{{ asset("images/activities/act10.jpg") }}" alt="" height="300px" width="100%">
            </div>
            <div class="col-4 mx-auto"> <!-- Add mx-auto class to center the image -->
                <img src="{{ asset("images/activities/act11.jpg") }}" alt="" height="300px" width="100%">
            </div>
            <div class="col-4 mx-auto"> <!-- Add mx-auto class to center the image -->
                <img src="{{ asset("images/activities/act12.jpg") }}" alt="" height="300px" width="100%">
            </div>
        </div>
    </div>

    <div class="mt-4 text-center">
        <span class="text-center font-weight-bold" style="font-size: 20px; font-family: Arial, sans-serif;">MANGATAREM SURGICAL OUTREACH 2022 at MPB Blessed Trinity General Hospital, Mangatarem, Pangasinan, November 26-30, 2022</span>
        <div class="row justify-content-center"> <!-- Add justify-content-center to center the images -->
            <div class="col-4 mx-auto"> <!-- Add mx-auto class to center the image -->
                <img src="{{ asset("images/activities/act7.jpg") }}" alt="" height="300px" width="100%">
            </div>
            <div class="col-4 mx-auto"> <!-- Add mx-auto class to center the image -->
                <img src="{{ asset("images/activities/act8.jpg") }}" alt="" height="300px" width="100%">
            </div>
            <div class="col-4 mx-auto"> <!-- Add mx-auto class to center the image -->
                <img src="{{ asset("images/activities/act9.jpg") }}" alt="" height="300px" width="100%">
            </div>
        </div>
    </div>
</div>

@include('components.format.footer')

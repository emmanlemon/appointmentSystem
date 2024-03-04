<title>Print Appointment</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins:wght@400&display=swap');

    * {
        color: black;
        font-family: 'Poppins', sans-serif;
        letter-spacing: -1px;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .content {
        display: grid;
        place-items: center;
        margin: 6em;
    }
</style>
<body>
<div style="background-color:#ffffff; padding:0; margin:0 auto; font-family: 'Your-Font-Family', sans-serif; font-weight:200; width:100% !important">
    <div align="center" style="margin:0 auto; max-width:768px;">
            <img src="https://raw.githubusercontent.com/emmanlemon/appointmentSystem/f2c69f87b26b582d37dfe874297842fea68ea329/public/images/logoMBP.png" style="width:17rem;">
            <p style="letter-spacing: 2px; font-weight:bold; font-size: 25px; padding-bottom: 5px;">MBP BLESSED TRINITY GENERAL HOSPITAL</p>
            <hr>
            <div class="content">
                <span>Transaction Number: {{ $appointment->transaction_number }}</span>
                <span>Patient ID: {{ $appointment->id }}</span>
                <span>Doctor: {{ $appointment->doctor_first_name }} {{ $appointment->doctor_middle_name }} {{ $appointment->doctor_last_name }}</span>
                <span>Name: {{ $appointment->full_name }}</span>
                <span>Email: {{ $appointment->email }}</span>
                <span>Time Slot: {{ $appointment->time }}</span>
                <span>Date Appointment: {{ $appointment->date }}</span>
            </div>
            <hr>
            <div class="footer" class="font-weight:bold; margin-top:10px;">
                <p>55 Umangan, Mangatarem, Pangasinan</p>
                <p>MBP_BTGH_INC@yahoo.com.ph</p>
                <p>(075)632-1288</p>
            </div>
        </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    jQuery(document).ready(function($) {
               window.print();
    });
</script>
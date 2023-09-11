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

    .content>* {
        margin-bottom: 1rem;
    }

    hr {
        margin: 1em 0 2em 0;
        background-color: green;
        border: 0;
        height: 2px;
    }
</style>

<body>
    <div style="background-color:#ffffff;padding:0;margin:0 auto;font-weight:200;width:100%!important">
        <div align="center" style="margin:0 auto;max-width:768px;">
            <img src="https://raw.githubusercontent.com/emmanlemon/appointmentSystem/f2c69f87b26b582d37dfe874297842fea68ea329/public/images/logoMBP.png" style="width:17rem;">
            <hr>
            <div class="content">
                <p>Dear Patient,</p>
                <p>
                    <br>
                    I am writing to confirm your upcoming appointment at our esteemed medical practice. Your well-being
                    is our top priority, and we are committed to providing you with the best care possible.
                    <br>

                    Your appointment details are as follows:
                    <br>

                    Name : {{ $appointment->full_name }}<br>
                    Age : {{ $appointment->age }}<br>
                    Address : {{ $appointment->address }}<br>
                    Appointment Date / Time: {{ date('F j, Y, g:i a', strtotime($appointment->date)) }}<br>
                    Additional Information/Concern: {{ $appointment->concern }}<br>
                </p>
                <p>
                    We understand that medical appointments can be a source of anxiety, but please rest assured that our
                dedicated team, led by Dr. {{ $appointment->first_name }} {{ $appointment->middle_name }}
                {{ $appointment->last_name }}, is here to support you every step of the way. Your health and comfort
                are paramount to us.
                <br>
                </p>
<p>
    If you need to reschedule this appointment or if there are any changes, please do not hesitate to
    reach out to us at [Medical Practice Phone Number] or [Medical Practice Email Address].
    <br>
</p>
<p>
    Thank you for entrusting us with your healthcare needs. We are looking forward to meeting you on
    {{ date('F j, Y', strtotime($appointment->date)) }} and working together to address your medical
    concerns.
    <br>
    <br>
    Sincerely,
    <br>
    MBP_BTGH_INC@gmail.com <br>
    MBP-BLESSED TRINITY GENERAL HOSPITAL<br>
    (076) 632-1288<br>
    UMANGAN, MANGATAREM PANGASINAN<br>
</p>


            </div>
        </div>
    </div>
</body>

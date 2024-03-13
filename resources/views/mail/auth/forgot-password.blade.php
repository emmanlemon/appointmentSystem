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
<div style="background-color:#ffffff; padding:0; margin:0 auto; font-family: 'Your-Font-Family', sans-serif; font-weight:200; width:100% !important">
    <div align="center" style="margin:0 auto; max-width:768px;">
            <img src="https://raw.githubusercontent.com/emmanlemon/appointmentSystem/f2c69f87b26b582d37dfe874297842fea68ea329/public/images/logoMBP.png" style="width:17rem;">
            <hr>
            <div class="content">
                MBP: Use the OTP code {{ $data }}, TO RESET YOUR PASSWORD ACCOUNT. NEVER share this code with others.
            </div>
        </div>
    </div>
</body> 


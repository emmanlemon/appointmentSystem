@include('components.format.header')
<title>Medical Services</title>
<div class="container min-vh-100 mt-2">
    <div class="h-25 w-100 p-4" style="background-image:url({{ asset('images/medical.png') }}); background-size: 100% 200px; background-repeat: no-repeat;">
    </div>
   

        <table class="table table-striped text-uppercase">
            <div class="title-header-services">
<p>Minor / Major SURGERY</p>
 </div>
            <tbody>
              <tr>
                <th scope="row">Excision of Cyst</th>
                <td>Orthopedic Surgery</td>
                <td>Cholecystectomy</td>
              </tr>
              <tr>
                <th scope="row">Saturing of wounds</th>
                <td>Surgery Normal</td>
                <td>Circumcision</td>
              </tr>
              <tr>
                <th scope="row">Caesarean Delivery</th>
                <td>Mass Completion Curettage</td>
                <td>Appendectomy Thyroid</td>
              </tr>
            </tbody>
          </table>


        <table class="table table-striped">
            <div class="title-header-services">
                <p>laboratory test</p>
                 </div>
            <tbody>
              <tr>
                <th scope="row">CBC</th>
                <td>CT/BT</td>
                <td>BUA</td>
                <td>PSA</td>
                <td>FBS/RBS</td>
                <td>SGBT</td>
                <td>H.PYLORI</td>
              </tr>
              <tr>
                <th scope="row">BUN</th>
                <td>HDL</td>
                <td>HBA1C</td>
                <td>LDL</td>
               <td>OGCT</td>
               <td>SGOT</td>
               <td>HBSAG</td>
              </tr>
              <tr>
                <th scope="row">CREATININE</th>
                <td>SYPHILIS/RPR</td>
                <td>TROPONIN 1</td>
                <td>TRIGLYCERIDE</td>
               <td>FECALYSIS</td>
               <td>CHLAMYDIA TEST</td>
               <td>DENGUE DUO/NS 1 ANTIGEN</td>
              </tr>
              <tr>
                <th scope="row">LIPID PROFILE</th>
                <td>OGTT</td>
                <td>PREGNANCY TEST</td>
                <td>SERUM ELECTROLYTE</td>
               <td>SALMONELLA TYPHI</td>
               <td></td>
               <td></td>
              </tr>
            </tbody>
          </table>

          <table class="table table-striped">
            <div class="title-header-services">
                <p>x-ray</p>
                 </div>
            <tbody>
              <tr>
                <th scope="row">CHEST PA T-CAGE</th>
                <td>CHEST AP/L(CHILD)</td>
                <td>CHEST AP/L(ADULT)</td>
                <td>FOOT AP/O</td>
              </tr>
              <tr>
                <th scope="row">CERVICAL AP/L/O</th>
                <td>ADBOMEN SUPINE/UPRIGHT</td>
                <td>SHOULDER AP/L</td>
                <td>SKULL AP/L </td>
              </tr>
              <tr>
                <th scope="row">ARM AP/L</th>
                <td>LWRIST AP/L</td>
                <td>HUMEROUS AP/L</td>
                <td>HAND AP/L</td>
              </tr>
              <tr>
                <th scope="row">PELVIC AP/L</th>
                <td>ANKLE JOINT AP/L</td>
                <td>THIGH BONE AP/L</td>
                <td>LEG AP/L</td>
              </tr>
              <tr>
                <th scope="row">KNEE AP/L</th>
                <td>THORASIC CAGE AP/L</td>
                <td>ELBOW AP/L</td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>

          <table class="table table-striped">
            <div class="title-header-services">
                <p>ultrasound</p>
                 </div>
            <tbody>
              <tr>
                <th scope="row">CRANIAL ULTRASOUND</th>
                <td>PROSTATE </td>
                <td>WHOLE ABDOMEN</td>
              </tr>
              <tr>
                <th scope="row">UPPER ABDOMEN</th>
                <td>KIDNEY</td>
                <td>URETER</td>
              </tr>
            </tbody>
          </table>

          <table class="table table-striped">
            <div class="title-header-services">
                <p>other service offered</p>
                 </div>
            <tbody>
              <tr>
                <th scope="row">TRAUMA CLINIC</th>
                <td>PAP SMEAR</td>
                <td>FAMILY PLANNING</td>
              </tr>
              <tr>
                <th scope="row">STROKE CLINIC</th>
                <td>INFERTILITY CHECKUP</td>
                <td>DIABETES/HYPERTENSION CLINIC</td>
              </tr>
              <tr>
                <td>TREATMENT OF ADULT</td>
                <td>NEW BORN SCREENING</td>
                <td>ADULT PEDIA</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
@include('components.format.footer')

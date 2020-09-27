<div class=" posAb isDown">
  <div class=" sideForm">

    
    <h3 onClick="sidebanner()">
      <span class="WidthClass">
       

        <span class="tclass">


          <span class="tclass"><span class="SignupColor"> Sign Up   </span> To Get<span class="SignupColor"> 30%</span> Discount <br>   <span class="SignupColor">   </span>   </span></span>
        </h3>
        <div class="sideFormInner ">
          <div id="popup-result-header"></div>
          <div id="popup-form-hide-header">
            <h1></h1>
            <form method="post" id="popupForm" novalidate>
              <input type="hidden" name="form_type" value="Popup Form">
              <div class="row">
                <div class="form-group clearfix">
                  <div class="col-md-12">
                    <input type="text" class="InputTxt form-control" name="name" placeholder="Name">
                  </div> 
                </div>
                <div class="form-group clearfix">
                  <div class="col-md-12">
                    <input type="text" class="InputTxt form-control" name="email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group clearfix">
                  <div class="col-md-12">
                    <input type="text" class="InputTxt form-control" name="phone" placeholder="Phone">
                  </div>
                </div>            
               <!-- <div class="form-group">
                  <div class="col-md-12">
                    <input type="text" class="InputTxt form-control" name="eduLevel" placeholder="Education Level (Optional)">
                  </div>
                </div>  -->
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Apply Now" class="btn  btn-warning btn-lg btn-block" id="thankyou" style="margin-top:8px; ">
                </div>  

              </div>

              <p class="text-center" style="font-size: 12px; color: red; padding-top: 5px;margin:0; text-transform: capitalize;">
               Terms & Conditions are applied.

             </p>
                           <!--    <p class="text-center" style="font-size: 12px; color: red; padding-top: 5px;margin:0; text-transform: capitalize;">
                   We will call immediately ...!                   
                 </p> -->
               </form>
             </div>
           </div>
         </div>
       </div>
       <div class="bgoverlay"></div>
       <style>
       .sideForm .SignupColor {
        color: #2c2b5e;
      }

      .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 0px;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        border: none;
        border: 1px solid #EC1C23;
        margin: 11px 0;

      }
      .posAb{position: relative; }
      .sideForm {min-height: 311px;padding-bottom: 10px;margin: 14px 0 0 0;  background: rgb(255, 255, 255) ;}
      .sideForm .sideFormInner { padding: 10px; }

      
      .posAb h3 {
        padding: 13px 5px;
        background: #ec1c23;
        margin: 0 0 0px 0;
        text-align: center;
        color: #fff;
        font-weight: 700;
        font-size: 22px;
        height: 89px;
        cursor: pointer;
        line-height: 33px;


      }
      #popup-form-hide-header .btn-warning {
        background: #ec1c23;
      }


      .posAb h3 .WidthClass {width:300px; display:block; margin:0 auto;}
      .posAb h3 .WidthClass .tclass {
        display: block;
        width: 100%;
        float: left;
        font-size: 25px;
        text-align: center; 
        color: #fff;
      }
      .posAb {
        position: relative;
        margin-top: 0;
      }
      .posAb h3 .WidthClass .TxtClass {    color: #fff;   font-weight: 300; float: left;  text-align: center;}
      .posAb h3 .WidthClass .TxtClass .big {display: block; font-size: 30px; color: #fff;}
      .posAb h4 {width: 100%;margin: 0 auto;text-align: center; text-transform:uppercase;font-size: 16px;font-weight: 600; background: #fff;    padding: 10px 0;}
      .posAb h4  img {width: auto; float: right; display: block; margin: -10px 18px 0 0px;}
      .posAb  .form-group { position: relative; }
      .posAb label { font-size: 17px; }
      .posAb label.error {
        font-size: 12px;
        color: red;
        line-height: 1;
        margin-bottom: 0;
        position: absolute;
        bottom: -3px;
      }

      .posAb label.valid {display:none!important;}
      .posAb .btn {
        background: rgb(250, 165, 52);
        
        color: #fff;
        border-radius: 0;
        text-transform: uppercase;
        letter-spacing: 2px;
      }
      .bgoverlay {position:fixed; top:0; left:0; bottom:0; right:0; z-index:99999999; display:none;
        background: #45484d; /* Old browsers */
        background: -moz-radial-gradient(center, ellipse cover,  #45484d 0%, #000000 100%); /* FF3.6-15 */
        background: -webkit-radial-gradient(center, ellipse cover,  #45484d 0%,#000000 100%); /* Chrome10-25,Safari5.1-6 */
        background: radial-gradient(ellipse at center,  #45484d 0%,#000000 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        opacity:0.8;
      }
      .posAb .closeBtn {
        display: none;
        position: absolute;
        top: 0px;
        right: 0px;
        background: #ef4137;
        cursor: pointer;
        padding: 2px 5px;
        color: #fff;
        font-size: 14px;
      }
      .closeBtn.fa.fa-angle-up {display:block;}
      @media(max-width: 1280px) {}
      @media(max-width: 1200px) {
      }
      @media(max-width: 500px) {
        .posAb h3 .WidthClass .tclass {
          font-size: 18px;
          margin: 0px 0 0 0;
        }
        } /* End */
        @media(min-width: 769px) {
          #header-form { display: table-cell; width: 280px; height: 279px; vertical-align: middle;}
        }
        @media(max-width: 767px) {
         .posAb {position: inherit; z-index: 999; top: 0;right: 0; width: 90%; margin: 20px auto 40px auto;}
         .sideForm .form-group {padding-bottom: 10px;margin-bottom: 0;}
         .sideForm  .closeBtn {display:none!important}
         .posAb h3 { position: static; transform: rotate(0deg);display: block;}
         .posAb label.error {
          font-size: 11px; 
          bottom: -15px;
        }
      }
    </style>
    <script>
     
    </script>
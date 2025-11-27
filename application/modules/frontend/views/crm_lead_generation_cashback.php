<?php 
include('header.php');
?>
<style type="text/css">
   header,.mobile-header,.footer__top {
      display: none;
   }
   
   .coupon_code_div,.business_interest_div,.cashback_rewards_div {
       border: 2px solid #007360;
       padding: 15px;
   }
   .validation_error,.employment_error,.username_error,.email_error,.phone_error,.validation_error_BI,.validation_error_CB,.validation_error_SO{
      color: red;
      font-weight: 600;
   }
   p.employment_error {
      margin-top: -23px;
   }
   .instant_off_per,.business_interest_default,h5.cashback_rewards,h5.coupon_code_num {
       padding-left: 15px;
   }
   .cashback_label{
      font-size: 18px;
      font-weight: 600;
   }
   h5.coupon_code, h5.business_interest_default, .instant_off_per, h5.cashback_rewards {
    padding-left: 80px;
}
   .first_step_com {
       background-color: #007360;
       color: #fff;
   }
   .first_step_com h4 {
       color: #fff;
   }
   .first_step_com h5 {
       color: #ffd25a;
   }
   form#business_opportunities_form label {
       font-size: 18px;
       color: #fff;
   }
   .tp-section-subtitle.special_offer_selected ol li,.tp-section-subtitle.special_offer_lead_partner ol li,.special_offer_selected ol {
       color: #1c1c1c;
       text-transform: none;
       font-size: 20px;
       font-family: sans-serif;
   }
   h2.tp-section-title.special_offer {
         font-size: 29px;
         font-family: 'DM Sans', sans-serif!important;
         font-weight: 600;
         color: #007563!important;
   }
   .left_div_form {
      border: 1px solid #000;
      background-color: #1e413dfc;
      padding: 40px 0px;
      height: max-content;
   }
   #profile_div .tp-section-subtitle,#business_opportunities_form .tp-section-subtitle,#cashback_rewards_div .tp-section-subtitle {
    color: #ffd259;
 }
 div#profile_div h5, div#business_opportunities_div h5 {
    font-family: 'DM Sans', sans-serif;
    padding-bottom: 10px;
    font-size: 16px;
    line-height: 22px;
}
.breadcrumb__list span {
   letter-spacing: 3px;
}
.default_div1 h5,.default_div2 h5,.default_div3 h5,.coupon_code_div h5 ,.business_interest_div h5,.cashback_rewards_div h5 {
    font-family: 'DM Sans', sans-serif!important;
    font-weight: 800;
    line-height: 30px;
}
.default_div1, .default_div2, .default_div3,.coupon_code_div, .business_interest_div, .cashback_rewards_div {
    border: 3px solid #0a4440;
    padding: 25px 10px 10px;
}
h5.coupon_code_num span {
   background-color: #0a4440;
    padding: 10px;
    border-radius: 40px;
    color: #fff;
    width: 45px;
    height: 45px;
    display: inline-block;
    position: relative;
    font-size: 17px;
    margin-right: 10px;
}
h5.coupon_code_num {
    font-size: 25px!important;
    margin-bottom: 0px;
}
#profile_div,#business_opportunities_div,#cashback_rewards_div,#special_offer_div {
    display: flex;
    justify-content: center;
}
span.def_coup {
    border: 1px;
    border-style: dashed;
    padding: 0px 15px;
    background-color: gold;
    color: #000000;
    width: 120px!important;
    display: block;
    text-align: center;
}
span.bottom_line {
    color: #ffd259;
}
@-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.blink{
   text-decoration: blink;
   -webkit-animation-name: blinker;
   -webkit-animation-duration: 0.7s;
   -webkit-animation-iteration-count:infinite;
   -webkit-animation-timing-function:ease-in-out;
   -webkit-animation-direction: alternate;
}
@media (max-width: 767px){
   .breadcrumb__bg.breadcrumb__bg__overlay {
       padding-top: 40px;
       padding-bottom: 40px;
   }
   .breadcrumb__title {
      font-size: 40px;
   }
   .breadcrumb__list span, .breadcrumb__list span a {
       letter-spacing: 2px;
       font-size: 14px;
       line-height: 21px;
   }
   .tp-section-title {
       font-size: 30px;
   }
   #profile_div .tp-section-subtitle, #business_opportunities_form .tp-section-subtitle, #cashback_rewards_div .tp-section-subtitle {
       font-size: 13px;
       line-height: 20px;
   }
   form#business_opportunities_form label {
       font-size: 13px;
   }
   div#profile_div h5, div#business_opportunities_div h5 {
       font-size: 13px;
       line-height: 20px;
   }
   .cashback_label{
      font-size: 13px;
      font-weight: 600;
   }
   .left_div_form {
       --bs-gutter-x: 0rem;
       padding: 23px;
       margin-bottom: 40px;
   }
   .default_div1, .default_div2, .default_div3, .coupon_code_div, .business_interest_div, .cashback_rewards_div {
       padding: 12px 10px 10px;
   }
   .instant_off_per, .business_interest_default, h5.cashback_rewards, h5.coupon_code_num {
       padding-left: 10px;
   }
   h5.coupon_code_num {
       font-size: 18px!important;
   }
   h5.coupon_code_num span {
      padding: 9px;
      width: 35px;
      height: 35px;
      margin-right: 10px;
      font-size: 13px;
   }
   h5.coupon_code, h5.business_interest_default, .instant_off_per, h5.cashback_rewards {
       padding-left: 60px;
   }
   h5.coupon_code, h5.business_interest_default, .instant_off_per, h5.cashback_rewards {
       font-size: 16px!important;
       line-height: 25px;
   }
   .tp-btn {
       padding: 7px 25px;
   }
   h2.tp-section-title.special_offer {
      font-size: 20px;
   }
   .tp-section-subtitle.special_offer_selected ol li, .tp-section-subtitle.special_offer_lead_partner ol li, .special_offer_selected ol {
      font-size: 15px;
   }
   .tp-section-subtitle {
      padding-bottom: 0px;
   }
}
.form-row {
   background: #ffffff;
   border-radius: 50px;
   height: 40px;
   margin: 10px;
   overflow: hidden;
   position: relative;
   width: 165px;
   text-align: center;
}

.form-input {
   -webkit-appearance: none;
   appearance: none;
}

.form-input::before {
   content: '';
   cursor: pointer;
   height: 100%;
   left: 0;
   position: absolute;
   top: 0;
   width: 100%;
}

.form-input:checked::before {
   background: #ffd259;
}

.form-input::after {
   content: '';
   cursor: pointer;
   height: 15px;
   border-radius: 50px;
   border: 4px solid #0a4440;
   left: 10%;
   position: absolute;
   top: 50%;
   transform: translate(0, -50%);
   width: 15px;
}

.form-input:checked::after {
   border: 4px solid #ffffff;
}

.form-label {
   color: #000;
    font-size: 1.1rem;
    line-height: 40px;

   z-index: 1;
   position: inherit;
   padding-left: 17px;
}

.form-input:checked ~ .form-label {
   color: #ffffff;
}
.comment-form__input-box.emp_radio {
    display: inline-flex;
}
</style>
<div class="wrapper-box p-relative ">
      <div class="breadcrumb__bg breadcrumb__bg__overlay pt-130 pb-130 " data-background="<?php echo base_url('assets/frontend/');?>/img/breadcrumb/breadcrumb-bg-1.jpg" style="background-image: url(<?php echo base_url('assets/frontend/');?>/img/breadcrumb/breadcrumb-bg-1.jpg&quot;);">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1 ">
                     <h3 class="breadcrumb__title mb-20">Get The Favourable loan</h3>
                     <div class="breadcrumb__list mb-10">
                        <!-- <span class="sub-page-black">Get the loan offers from over</span> -->
                        <span><a href="index.html">Loan with Perks:</a></span>
                        <span class="sub-page-black">Special Discount Offer on Digital Products for Loan Applicants!</span>
                        <!-- <span class="dvdr"> / </span> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- get quote  area start -->
   <div class="tp-insurance-area pt-120 p-relative overflow-hidden pb-120 grey-bg-1">
      <div class="tp-insurance-innar">
         <div class="tpquote-3__quote-bg">
            <img src="<?php echo base_url('assets/frontend/');?>/img/quote/quote-animation.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-12 z-index-1" id="">
                  <div class="row left_div_form" id="profile_div" style="">
                     <div class="col-xl-10 ">
                        <div class="tp-section-box mb-30">
                           <h2 class="tp-section-title text-white pb-0">Basic Details to avail Loan</h2>
                        </div>
                     </div>
                     <div class="col-xl-10 ">
                        <div class="message-one__form">
                           <form id="profile_details" class="comment-one__form contact-form-validated" method="post">
                              <div class="tp-section-subtitle pb-5 ">Fill out the form now.</div>
                              <p class="validation_error pb-10"></p>
                              <div class="row">
                                    <div class="comment-form__input-box">
                                       <input type="text" placeholder="Your name" class="usernamevalidate" id="user_name"  name="user_name" onkeypress="return isAlfa(event)">
                                       <p class="username_error"></p>
                                    </div>
                                    <div class="comment-form__input-box">
                                       <input type="text" placeholder="Email address" class="emailvalidate" id="user_email"  name="user_email">
                                       <p class="email_error"></p>
                                    </div>
                                    <div class="comment-form__input-box">
                                       <input type="text" placeholder="Phone number" maxlength="10" minlength="10" class="mobilevalidate" id="user_phone"  name="user_phone">
                                       <p class="phone_error"></p>
                                    </div>
                                    <div class="comment-form__input-box emp_radio">
                                       <div class="form-row flex-center">
                                          <input type="radio" name="employment" id="Salaried" value="Salaried" class="form-input">
                                          <label for="Salaried" class="form-label">Salaried </label>
                                       </div>
                                       <div class="form-row flex-center">
                                          <input type="radio" name="employment" id="Non_Salaried" value="Non_Salaried" class="form-input">
                                          <label for="Non_Salaried" class="form-label">Non-Salaried</label>
                                       </div>
                                    </div>
                                    <p class="employment_error"></p>
                              </div>
                              <div class="row">
                                 <div class="col-xl-12">
                                    <div class="comment-form__btn-box">
                                       <h5 class="text-white">Get the Best Deals on <span class="bottom_line">Digital Products!</span> <br>One Simple Click Away.</h5>
                                       <button class="tp-btn" id="profile_details_submit" type="submit">Next</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>

                  <div class="row left_div_form" id="business_opportunities_div" style="display:none;">
                     <div class="col-xl-10">
                        <div class="tp-section-box mb-30">
                           <!-- <h2 class="tp-section-title pb-0">Expressing Interest in<br> Business Opportunities</h2> -->
                           <h2 class="tp-section-title text-white pb-0">Business Interest & Rewards</h2>
                        </div>
                     </div>
                     <div class="col-xl-10">
                        <div class="message-one__form">
                           <form id="business_opportunities_form" class="comment-one__form contact-form-validated" method="post">
                              <div class="tp-section-subtitle ">DO YOU HAVE AN INTEREST IN EXPLORING OUR DIGITAL PRODUCTS?</div>
                              <p class="validation_error_BI"></p>
                              <!-- <h6 class="tite">Are you interested in exploring any of the following business opportunities?</h6> -->
                              <div class="row">
                                <div class="form-check">
                                    <input type="checkbox" class="business_interest" id="loan_agent" data-id="loan_agent_off" name="loan_agent" value="Loan Agent / Insurance POS Agent" >
                                    <label class="form-check-label" id="loan_agent" for="loan_agent">Loan Agent / Insurance POS Agent</label>
                                 </div>
                                 <div class="form-check">
                                    <input type="checkbox" class="business_interest" id="Franchise_Business" data-id="Franchise_Business_off" name="Franchise_Business" value="Franchise Business (Recommended)" >
                                    <label class="form-check-label" id="Franchise_Business" for="Franchise_Business">Franchise Business (Recommended)</label>
                                 </div>
                                 <div class="form-check">
                                    <input type="checkbox" class="business_interest" id="Utility_BDP" data-id="Utility_BDP_off" name="Utility_BDP" value="Utility Business Distributorship Program" >
                                    <label class="form-check-label" id="Utility_BDP" for="Utility_BDP">Utility Business Distributorship Program</label>
                                 </div>
                                 <div class="form-check">
                                    <input type="checkbox" class="business_interest" id="PAN_Distributorship" data-id="PAN_Distributorship_off" name="PAN_Distributorship" value="PAN Distributorship" >
                                    <label class="form-check-label" id="PAN_Distributorship" for="PAN_Distributorship">PAN Distributorship</label>
                                 </div>
                                 <div class="form-check">
                                    <input type="checkbox" class="business_interest" id="business_interest_none" data-id="business_interest_none" name="business_interest_none" value="No Interest In Business" >
                                    <label class="form-check-label" for="business_interest_none">None of the above</label>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xl-12 mt-10">
                                    <div class="comment-form__btn-box">
                                       <h5 class="text-white">Discover Instant <span class="bottom_line">Cashback!</span> <br>You're Just 1 Step Away from the Offer.</h5>
                                       <input type="hidden" class="last_insert_id" name="last_insert_id" >
                                       <button class="tp-btn" id="business_opportunities_submit" type="submit">Next</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>

                  <div class="row left_div_form" id="cashback_rewards_div" style="display: none;">
                     <div class="col-xl-10">
                        <div class="tp-section-box mb-30">
                           <h2 class="tp-section-title text-white pb-0">Cashback Rewards</h2>
                        </div>
                     </div>
                     <div class="col-xl-10">
                        <div class="message-one__form">
                           <form id="cashback_rewards_form" class="comment-one__form contact-form-validated" method="post">
                              <div class="tp-section-subtitle">Cashback</div>
                              <p class="validation_error_CB pb-10"></p>
                              <div class="row">
                                 <label class="form-check-label text-white cashback_label" for="none" >To Know how much cashback you may avail</label>
                                 <!-- <div class="comment-form__input-box">
                                    <input type="text" placeholder="Fill your Loan amount" id="loan_amount" name="loan_amount">
                                 </div> -->
                                 <div class="contactform__select">
                                    <div class="tp-sp-icon">
                                       <select id="loan_amount" name="loan_amount" style="display: none;" >
                                          <option>25000</option>
                                          <option>50000</option>
                                          <option>100000</option>
                                          <!-- <option>200000</option> -->
                                          <!-- <option>300000</option> -->
                                          <option>400000</option>
                                       </select>
                                       <div class="nice-select" tabindex="0">
                                          <span class="current">Select Loan Amount</span>
                                          <ul class="list">
                                             <li data-value="25000" class="option selected">25000</li>
                                             <li data-value="50000" class="option">50000</li>
                                             <li data-value="100000" class="option">100000</li>
                                             <!-- <li data-value="200000" class="option">200000</li> -->
                                             <!-- <li data-value="300000" class="option">300000</li> -->
                                             <li data-value="400000" class="option">400000</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xl-12">
                                    <div class="comment-form__btn-box">
                                       <input type="hidden" class="last_insert_id" name="last_insert_id" >
                                       <button class="tp-btn" id="cashback_submit"  type="submit">Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>

                  <div class="row left_div_form" id="special_offer_div" style="display: none;">
                     <div class="col-xl-10">
                        <div class="tp-section-box mb-10">
                           <h2 class="tp-section-title text-white special_offer pb-0">Special Offer from Prologic</h2>
                           <div class="tp-section-subtitle special_offer_selected pb-20 "><ol></ol></div>
                        </div>
                        <div class="tp-section-box mb-10">
                           <h2 class="tp-section-title text-white special_offer pb-0">Special Offer from Lending Partner</h2>
                           <div class="tp-section-subtitle special_offer_lead_partner pb-20 ">
                              <ol>
                                 <li>A gift voucher worth of Rs.3000/-  which can  be exclusively used in Myntra, Uber, Arrow, Flying machine, Jockey, Kalyan Jeweller Cultfit, Four fountains spa. </li>
                                 <li>Coupon Code</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="col-xl-10">
                        <div class="message-one__form">
                           <form id="special_offer_form" class="comment-one__form contact-form-validated" method="post">
                              <p class="validation_error_SO pb-10"></p>
                              <div class="row">
                                 <div class="col-xl-12">
                                    <div class="comment-form__btn-box">
                                       <input type="hidden" class="last_insert_id" name="last_insert_id" >
                                       <button class="tp-btn" id="special_offer_submit"  type="submit">Try Your Luck Again</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div> -->
                  </div>

               </div>
               <div class="col-md-6 col-lg-6 col-md-6 col-12">
                  <div class="tp-testimonial-3__item p-relative">
                     <div class="tp-testimonial-3__icon">
                        <i class="flaticon-double-quotes"></i>
                     </div>
                     <div class="tp-testimonial-3__content mt-30">
                        <div class="coupon_code_div mb-20" style="">
                           <h5 class="coupon_code_num"><span class="bullet_point1 blink">#1</span> First Benefit</h5>
                           <h5 class="coupon_code">Discount coupon Code on Processing Fees</h5>
                        </div>
                        <div class="business_interest_div mb-20" style="">
                           <h5 class="coupon_code_num"><span class="bullet_point2 ">#2</span> Second Benefit</h5>
                           <h5 class="business_interest_default">Explore New Business Offer on Digital Products</h5>
                           <h5 class="instant_off_per" id="loan_agent_off" style="display:none;"><i class="fa-solid fa-tags"></i> Special Offer Coupon <span class="def_coup">POS999</span></h5>
                           <h5 class="instant_off_per" id="Franchise_Business_off" style="display:none;"><i class="fa-solid fa-tags"></i> Special Offer Coupon <span class="def_coup">GSK15</span></h5>
                           <h5 class="instant_off_per" id="Utility_BDP_off" style="display:none;"><i class="fa-solid fa-tags"></i> Special Offer Coupon <span class="def_coup">UTIL10</span></h5>
                           <h5 class="instant_off_per" id="PAN_Distributorship_off" style="display:none;"><i class="fa-solid fa-tags"></i> Special Offer Coupon <span class="def_coup">PAN10</span></h5>
                        </div>
                        <div class="cashback_rewards_div mb-20" style="">
                           <h5 class="coupon_code_num"><span class="bullet_point3 ">#3</span> Third Benefit</h5>
                           <h5 class="cashback_rewards">Explore Your Cashback</h5>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
   <!-- get quote  area end -->
<script type="text/javascript">
   $(document).ready(function(){
      $('#profile_details').submit(function(e){  
         e.preventDefault();
         $('.username_error,.email_error').empty();
         var username = $("#user_name").val();
         var useremail = $("#user_email").val();
         var userphone = $("#user_phone").val();
         var useremployment = $("input[name=employment]:checked").val();

         if (username == '') {
            $('.username_error').text('Please enter fullname.');
            $("#profile_details_submit").attr("disabled", false);
            return false;
         }
         if (useremail == '') {
            $('.email_error').text('Please enter Email ID.');
            $("#profile_details_submit").attr("disabled", false);
            return false;
         }

         if (IsEmail(useremail) == false) {
            $('.email_error').text('Please enter valid Email ID.');
            $("#profile_details_submit").attr("disabled", false);
            return false;
         }
         if (userphone == '') {
            $('.phone_error').text('Please enter Phone Number.');
            $("#profile_details_submit").attr("disabled", false);
            return false;
         }
         if(userphone != ''){
            var regex = /^[6789]\d{9}$/; 
            if(!$.isNumeric(userphone) || !regex.test(userphone)){
               $('.phone_error').text('Please Enter Valid Mobile Number');
               return false;
            }else if(userphone.length!=10){
               $('.phone_error').text('Please Enter 10 Digits Mobile Number');
               return false;
            }
         }
         if (typeof useremployment === "undefined") {
            $('.employment_error').text('Please select Salaried or Non-Salaried.');
            $("#profile_details_submit").attr("disabled", false);
            return false;
         }


         $("#profile_details_submit").attr("disabled", true);
         $.ajax({
            url: '<?php echo base_url("frontend/profileDetails");?>',
            type: 'POST',
            dataType:'JSON',
            data: {username: username, useremail: useremail, userphone: userphone, useremployment: useremployment},
            error: function() {
               $('.validation_error').text('Something is wrong');
            },
            success: function(data) {
               if(data.status == 0){
                  $("#profile_div").hide();
                  $(".coupon_code_div").addClass('first_step_com');
                  $(".bullet_point1").removeClass('blink');
                  $(".bullet_point2").addClass('blink');
                  $(".last_insert_id").val(data.insertid);
                  $('.coupon_code').html('<i class="fa-solid fa-tags"></i> Discount Coupon code to avail Loan - <span class="def_coup">'+data.coupon_code+'</span> (up to 100% OFF)');
                  $("#business_opportunities_div,.business_interest_div").show();
               }else{
                  $("#profile_details_submit").attr("disabled", false);
                  $('.validation_error').text(data.message);
               }
            }
         });
      });
      $(".business_interest").change(function() {
         var targetId = $(this).data("id");
         $('.validation_error_BI').empty();
         if(targetId != 'business_interest_none'){
            $("#business_interest_none").prop("checked", false);
            if($(this).is(":checked")){
               $(".business_interest_default").hide();
               $(".business_interest_div").addClass('first_step_com');
               $("#" + targetId).show();
            }else{
               $(".business_interest_div").removeClass('first_step_com');
               $("#" + targetId).hide();
            }
         }else{
            $(".business_interest_default").show();
            $(".business_interest_div").removeClass('first_step_com');
            $("#Franchise_Business,#Utility_BDP,#PAN_Distributorship,#loan_agent").prop("checked", false);
            $(".instant_off_per").hide();
         }
         if($(".business_interest:checked").length==0){
            $(".business_interest_default").show();
            $(".business_interest_div").removeClass('first_step_com');
         }
      });

      $('#business_opportunities_form').submit(function(e){  
         e.preventDefault();
         
         var last_insert_id = $(".last_insert_id").val();
         var loan_agent = $("#loan_agent:checked").val();
         var Franchise_Business = $("#Franchise_Business:checked").val();
         var Utility_BDP = $("#Utility_BDP:checked").val();
         var PAN_Distributorship = $("#PAN_Distributorship:checked").val();
         var BusinessInterestNone = $("#business_interest_none:checked").val();
            
         if(typeof loan_agent === "undefined" && typeof Franchise_Business === "undefined" && typeof Utility_BDP === "undefined" && typeof PAN_Distributorship === "undefined" && typeof BusinessInterestNone === "undefined"){
            $('.validation_error_BI').text('Please select atleast one option.');
            return false;
         }
         
         if (typeof loan_agent === "undefined") {
            loan_agent = 'No';
         }else{
            loan_agent = 'Yes';
         }

         if (typeof Franchise_Business === "undefined") {
            Franchise_Business = 'No';
         }else{
            Franchise_Business = 'Yes';
         }

         if (typeof Utility_BDP === "undefined") {
            Utility_BDP = 'No';
         }else{
            Utility_BDP = 'Yes';
         }

         if (typeof PAN_Distributorship === "undefined") {
            PAN_Distributorship = 'No';
         }else{
            PAN_Distributorship = 'Yes';
         }

         if (typeof BusinessInterestNone === "undefined") {
            BusinessInterestNone = 'No';
         }else{
            BusinessInterestNone = 'Yes';
            loan_agent = Franchise_Business = Utility_BDP = PAN_Distributorship = 'No';
         }
         $("#business_opportunities_submit").attr("disabled", true);
         $.ajax({
            url: '<?php echo base_url("frontend/businessOpportunityInterest");?>',
            type: 'POST',
            dataType:'JSON',
            data: {last_insert_id: last_insert_id, loan_agent: loan_agent, Franchise_Business: Franchise_Business, Utility_BDP: Utility_BDP, PAN_Distributorship: PAN_Distributorship, BusinessInterestNone: BusinessInterestNone},

            error: function() {
               $('.validation_error_BI').text('Something is wrong');
            },
            success: function(data) {
               if(data.status == 0){
                  $("#profile_div").hide();
                  $("#business_opportunities_div").hide();
                  $(".business_interest_div").addClass('first_step_com');
                  $(".bullet_point2").removeClass('blink');
                  $(".bullet_point3").addClass('blink');
                  $("#cashback_rewards_div,.business_interest_div,.cashback_rewards_div").show();
               }else{
                  $("#business_opportunities_submit").attr("disabled", false);
                  $('.validation_error_BI').text(data.message);
               }
            }
         });
      });
      $('#loan_amount').change(function () {
         var loan_amount = jQuery('#loan_amount').val();
         // alert(loan_amount);
         if (loan_amount != '') {
            $.ajax({
               url: '<?php echo base_url("frontend/calculateLoanCashbackReward");?>',
               type: 'POST',
               dataType:'JSON',
               data: {loan_amount: loan_amount},
               error: function() {
                  $('.validation_error_CB').text('Something is wrong');
               },
               success: function(data) {
                  if(data.status == 0){
                     $(".cashback_rewards_div").addClass('first_step_com');
                    
                     $('.cashback_rewards').html('<i class="fa-regular fa-money-bill-1"></i> '+data.message);
                  }else{
                     $('.validation_error_CB').text(data.message);
                  }
               }
            });

         }else{
            $('.validation_error_CB').text('Please enter loan amount.');
         }
      });
      $('#cashback_rewards_form').submit(function(e){  
         e.preventDefault();
         $("#cashback_submit").attr("disabled", true);
         var last_insert_id = $(".last_insert_id").val();
         var loanAmount = $("#loan_amount").val();
         $.ajax({
            url: '<?php echo base_url("frontend/cashBackRewards");?>',
            type: 'POST',
            dataType:'JSON',
            data: {last_insert_id: last_insert_id, loanAmount: loanAmount},
            error: function() {
               $('.validation_error_CB').text('Something is wrong');
            },
            success: function(data) {
               if(data.status == 0){
                  $(".bullet_point3").removeClass('blink');
                  $("#profile_div,#business_opportunities_div,#cashback_rewards_div").hide();
                  $("#special_offer_div").show();
                  $(".left_div_form").css({"border": "3px solid #076", "background-color": "#ffffff", "background-color": "#ffffff"});

                  if(data.BI_Data.BusinessInterestNone == 'No'){
                     if(data.BI_Data.loan_agent == 'Yes'){
                        $('.special_offer_selected ol').append('<li><i class="fa-solid fa-tags"></i> Special Offer Coupon <span class="def_coup">POS999</span></li>');
                     }
                     if(data.BI_Data.Utility_BDP == 'Yes'){
                        $('.special_offer_selected ol').append('<li><i class="fa-solid fa-tags"></i> Special Offer Coupon <span class="def_coup">UTIL10</span></li>');
                     }
                     if(data.BI_Data.PAN_Distributorship == 'Yes'){
                        $('.special_offer_selected ol').append('<li><i class="fa-solid fa-tags"></i> Special Offer Coupon <span class="def_coup">PAN10</span></li>');
                     }
                     if(data.BI_Data.Franchise_Business == 'Yes'){
                        $('.special_offer_selected ol').append('<li><i class="fa-solid fa-tags"></i> Special Offer Coupon <span class="def_coup">GSK15</span></li>');
                     }
                     if(data.BI_Data.BusinessInterestNone == 'No' && data.BI_Data.Utility_BDP == 'No' && data.BI_Data.PAN_Distributorship == 'No' && data.BI_Data.Franchise_Business == 'No' && data.BI_Data.loan_agent == 'No'){
                        $('.special_offer_selected ol').append('No Offer Selected for Business Interest!');
                     }
                  }else{
                     $('.special_offer_selected ol').append('No Offer Selected for Business Interest!');
                  }
               }else{
                  $("#profile_details_submit").attr("disabled", false);
                  $('.validation_error_CB').text(data.message);
               }
            }
         });
      });
      $('#special_offer_form').submit(function(e){  
         e.preventDefault();
         $("#special_offer_submit").attr("disabled", true);
         var last_insert_id = $(".last_insert_id").val();
         window.location.href = "<?php echo base_url('frontend/leads_scratch_card/'); ?>" + last_insert_id;
      });
   });


   $('.mobilevalidate').focusout(function(){
      $('.phone_error').empty();
      var thismobile = $(this);
      var regex = /^[6789]\d{9}$/; 
      if(thismobile.val()!=''){
         if(!$.isNumeric(thismobile.val()) || !regex.test(thismobile.val())){
            $('.phone_error').text('Please Enter Valid Mobile Number');
         }else if(thismobile.val().length!=10){
            $('.phone_error').text('Please Enter 10 Digits Mobile Number');
         }
      }
   });

   $('.mobilevalidate').keypress(function(e){
      $('.phone_error').empty();
      var keyCode = e.keyCode || e.which;
      var regex = /^[0-9]+$/;
      var isValid = regex.test(String.fromCharCode(keyCode));
      $(this).val($(this).val().substring(0, 10));
      if ($(this).val()!='' && !isValid) {
         $('.phone_error').text("Only Numbers allowed");
      }
      return isValid;
   });
   $('.emailvalidate').focusout(function(){
      $('.email_error').empty();
      var thisemail = $(this);
      thisemail.val(thisemail.val().toLowerCase());
      var pattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;   
      if(thisemail.val()!='' && !pattern.test(thisemail.val())){
         $('.email_error').text('Please Enter Valid Email ID');
      }
   });
   $('.usernamevalidate').focusout(function(){
      var thisusername = $(this).val();
      if(thisusername!='' ){
         $('.username_error').empty();
      }
      if(thisusername!='' && thisusername.length<=3){
         $('.username_error').text('Please enter a valid name.');
      }
   });
   $(".usernamevalidate").keypress(function () {
    var thisval = event.key;
    if (thisval.replace(/[^a-z ]/gi, "") == "") {
      event.preventDefault();
    }
   });

   $('input[name=employment]').change(function () {
      $(".employment_error").empty();
   });

   // restrict multiple space at once starts
   function isWhiteSpace(char) {
     return (/\s/).test(char);
   }
   function willCreateWhitespaceSequence(evt) {
     var willCreateWSS = false;
     if (isWhiteSpace(evt.key)) {
     
       var elmInput = evt.currentTarget;
       var content = elmInput.value;

       var posStart = elmInput.selectionStart;
       var posEnd = elmInput.selectionEnd;

       willCreateWSS = (
            isWhiteSpace(content[posStart - 1] || '')
         || isWhiteSpace(content[posEnd] || '')
       );
     }
     return willCreateWSS;
   }

   function isAlfa(evt) {

     evt = (evt || window.event);
     var charCode = (evt.which || evt.keyCode);

     return ((
          (charCode > 32)
       && (charCode < 65 || charCode > 90)
       && (charCode < 97 || charCode > 122)

     ) || willCreateWhitespaceSequence(evt)) ? false : true;
   }
   // restrict multiple space at once ends

   
   function IsEmail(email) {
      var regex =/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if (!regex.test(email)) {
          return false;
      }
      else {
          return true;
      }
   }

</script>
<?php 
  include('footer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
{!! meta_init() !!}
<meta name="keywords" content="@get('keywords')">
<meta name="description" content="@get('description')">
<meta name="author" content="@get('author')">
<meta name="geo.region" content="IN-DL" />
<meta name="geo.placename" content="Delhi" />
<meta name="geo.position" content="28.699267;77.161062" />
<meta name="ICBM" content="28.699267, 77.161062" />


<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="csrf-base" content="{{ URL::to('/') }}">
<!-- css files -->
<link rel="stylesheet" type="text/css" href="{{ asset('local/public/themes/default/assets/core/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('local/public/themes/default/assets/core/css/font-awesome.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('local/public/themes/default/assets/core/css/owl.carousel.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('local/public/themes/default/assets/core/css/owl.theme.default.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('local/public/themes/default/assets/core/css/animate.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('local/public/themes/default/assets/core/css/swiper.css') }}" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />


<link id="pagestyle" rel="stylesheet" type="text/css" href="{{ asset('local/public/themes/default/assets/core/css/default.css') }}" />

<link id="pagestyle" rel="stylesheet" type="text/css" href="{{ asset('local/public/themes/default/assets/core/css/custom.css') }}" />

<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />


<!--Favicon-->
<link rel="shortcut icon" href="{{ asset('local/public/themes/default/assets/core/img/favicon.ico') }}" type="image/x-icon" />
<link rel="icon" href="{{ asset('local/public/themes/default/assets/core/img/favicon.ico') }}" type="image/x-icon" />
<!--Favicon-->
    <title>@get('title')</title>
    <!-- @styles() -->



    <!--Start of Tawk.to Script-->
       <script type="text/javascript">
       var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
       (function(){
       var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
       s1.async=true;
       s1.src='https://embed.tawk.to/59577e2450fd5105d0c8371b/default';
       s1.charset='UTF-8';
       s1.setAttribute('crossorigin','*');
       s0.parentNode.insertBefore(s1,s0);
       })();
       </script>


    </head>
    <body>
        @partial('header')
        @content()
        @partial('footer_layer')
        @partial('footer')
        <!-- @scripts() -->
        <!-- JavaScript Files -->
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/jquery-3.1.1.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/bootstrap.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/owl.carousel.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/jquery.downCount.js') }}"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/nouislider.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/jquery.sticky.js') }}"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/pace.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/star-rating.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/wow.min.js') }}"></script>

                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/main.js') }}"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/jquery.easy-ticker.js') }}"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/swiper.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/script.js') }}"></script>



<div class="modal fade in" id="loginModel" tabindex="-1" role="dialog" style="display: none;">
                <div class="modal-dialog" role="document">
                    <div style="margin-top: 18%;">
                        <div class="login-container">
                            <div class="modal-content">
                                <div class="row">
                                    <div class="logform-l">
                                        <div class="top-spc">
                                            <span class="fa fa-bar-chart fa-2x"></span>
                                            <div class="menuhead3">DAILY MARKET PRICES</div>
                                            <p>Get daily market prices and trends so you are always connected</p>
                                        </div>
                                        <div class="top-spc4">
                                            <span class="fa fa-shield fa-2x"></span>
                                            <div class="menuhead3">FIND VERIFIED SUPPLIERS</div>
                                            <p>1000s of Verified Suppliers, products and their prices available right at your fingertip!</p>
                                        </div>
                                        <div class="top-spc4">
                                            <span class="fa fa-comments-o fa-2x"></span>
                                            <div class="menuhead3">COMMUNICATE DIRECTLY</div>
                                            <p>Talk directly to your buyers and sellers through our in-app messaging system</p>
                                        </div>
                                    </div>
                                    <div class="logform-r" style="top: -56px;">
                                        <div class="loghad" id="login-heading">SIGNUP</div>
                                        <div class="popclose">
                                            <a data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <p id="login-title">Please provide your details to register on metalbaba!</p>
                                          <span id="login-username">
                                            <div class="form-group">
                                              <label for="email">Enter Mobile Or Email</label>
                                              <input id="login-username-input" type="text" class="form-control">
                                            </div>
                                          </span>



                                        <span id="login-name">
                                          <div class="form-group">
                                            <label for="email">Enter Your Name</label>
                                            <input id="login-name-input" type="text" class="form-control">
                                          </div>
                                        </span>



                                        <span id="login-company">
                                          <div class="form-group">
                                            <label for="email">Enter Your Company Name</label>
                                            <input id="login-company-input" type="text" class="form-control">
                                          </div>
                                        </span>




                                        <span id="login-mobile">
                                          <div class="form-group">
                                            <label for="email">Enter Mobile</label>
                                            <input id="login-mobile-input" type="text"  class="form-control">
                                          </div>
                                        </span>



                                        <span id="login-email">
                                          <div class="form-group">
                                            <label for="email">Enter Email</label>
                                            <input id="login-email-input" type="text" class="form-control">
                                          </div>
                                        </span>



                                        <span id="login-password">
                                          <div class="form-group">
                                            <label for="email">Enter Password</label>
                                            <input id="login-password-input" type="password" class="form-control">
                                          </div>
                                        </span>



                                        <div class="otpboxin" id="login-otp" style="display: none;">
                                            <span class="lock2 sprite"></span>
                                            <p>Please enter the verification code sent to</p>
                                            <div class="otphad ng-binding">
                                                <button class="otpboxinbtn" onclick="editUsername();">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <input data-ng-model="login_otp" id="login_otp" type="text" placeholder="OTP" class="otpfield top-spc2 ng-pristine ng-untouched ng-valid ng-empty">
                                            <div class="otphad2">Not received your code? <a href="#" onclick="resendOtp();">Resend</a></div>
                                        </div>

                                        <button onclick="login();" id="login-signin-btn" class="login-btn top-spc3">Signin</button>
                                        <button onclick="showLoginPassword();" id="login-password-btn" class="login-btn1 top-spc3" style="display: inline-block;">Login Without Password</button>
                                        <button onclick="signup();" id="login-signup-btn" class="login-btn top-spc3">Continue</button>
                                        <button onclick="resetPassword();" id="login-reset-btn" class="login-btn top-spc3">Reset Password</button>
                                        <div class="clr"></div>
                                        <div id="login-signup-link" class="login-cont-n forget-pass">
                                            New User?
                                            <a href="#" onclick="showSignup();">SIGN UP</a>
                                        </div>
                                        <div id="login-login-link" class="login-cont-n forget-pass">
                                            Already a member?
                                            <a href="#" onclick="showLogin();">LOGIN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- new login register -->

<!-- for submit request form -->
<div class="modal fade ng-scope in" id="buyleadModal" tabindex="-1" role="dialog" style="z-index: 999; display: none;background:#7f7f7f;
  background:rgba(0,0,0,0.5);">
    <div class="modal-dialog byen-o" role="document">
        <div style="margin-top: 12%;">
            <div class="byen-cont">
                <!--<a data-dismiss="modal">Close</a>-->
                <div class="row">
                    <div class="col-lg-6 r-padd">
                        <div class="byen-box">
                            <label>Product</label>
                            <input id="buylead_product" type="text" placeholder="Product" class="fcfield ng-pristine ng-valid ng-empty ng-touched">
                            <label class="top-spc2">Quantity</label>
                            <div class="rupeelf-field2 rupeelf-field2-left">
                                <span class="faicon">kg</span>
                                <input id="buylead_quantity" type="text" placeholder="Quantity" class="rupeelf-custom ng-pristine ng-valid ng-empty ng-touched">
                            </div>
                            <div class="clr"></div>
                            <!--<input data-ng-model="buylead_quantity" type="text" placeholder="Quantity" class="fcfield" />-->
                            <label class="top-spc2">Bid Price</label>
                            <div class="rupeelf-field1 rupeelf-field1-left">
                                <span class="fa faicon1 fa-inr"></span>
                                <span class="faicon">/kg</span>
                                <input id="buylead_price" type="text" placeholder="Bid Price" class="rupeelf-custom ng-pristine ng-valid ng-empty ng-touched">

                            </div>
                            <div class="clr"></div>
                            <input type="file" id="file" ng-model="file" onchange="angular.element(this).scope().fileChanged(this)" class="top-spc2 ng-pristine ng-valid ng-empty ng-touched">
                            <div class="clr"></div>
                            <label class="top-spc2">Description</label>
                            <textarea id="buylead_description" class="top-spc-min fctextarea ng-pristine ng-untouched ng-valid ng-empty" placeholder="Write here product description"></textarea>
                            <div class="top-spc l-padd1">
                                <input type="checkbox" id="buylead_is_buy_from_metalbaba" class="css-checkbox ng-pristine ng-untouched ng-valid ng-empty" data-ng-model="buylead_is_buy_from_metalbaba" data-ng-checked="buylead_is_buy_from_metalbaba == 1" checked="checked">
                                <label for="buylead_is_buy_from_metalbaba" class="css-label">Buy through Metalbaba Tradesafe.</label>
                            </div>
                            <button class="login-btn top-spc2" onclick="submitBuylead()">Submit  Enquiry</button>
                        </div>
                    </div>
                    <div class="col-lg-6 byen-boxr">
                        <div class="uniqcen"><img src="http://metalbaba.com/images/time-cost.png" alt="Time Cost" title="Time Cost"></div>
                        <div class="postmsg top-spc6">
                            <p>
                                After you submit your requirement, <span>Metalbaba Procurement Team </span> will call you and get you the best deal from the market
                            </p>

                        </div>
                        <div class="clr"></div>
                        <div class="postmsg1 top-spc"><i class="fa fa-phone" aria-hidden="true"></i> 9555-066-066</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- for submit request form -->

<!-- for enquiry for  -->
<div class="modal fade ng-scope in" id="placeEnquiryModal" tabindex="-1" role="dialog" style="display:none;">
    <div class="modal-dialog placeenquiry" role="document">
        <div style="margin-top: 18%;">
            <div class="byen-cont">
                <!--<a data-dismiss="modal">Close</a>-->
                <div class="row">
                    <div class="col-lg-6 r-padd">
                        <div class="byen-box">
                            <label>Quantity</label>
                            <input data-ng-model="enquiry_quantity" type="text" placeholder="Quantity" class="fcfield ng-pristine ng-untouched ng-valid ng-not-empty">

                            <label class="top-spc2">Bid Price</label>
                            <div class="rupeelf-field rupeelf-field-left">
                                <span data-ng-show="enquiryProduct.is_international == 1" class="fa faicon fa-dollar ng-hide"></span>
                                <span data-ng-show="enquiryProduct.is_international == 0" class="fa faicon fa-inr"></span>
                                <input data-ng-model="enquiry_price" type="text" placeholder="Bid Price" class="rupeelf-custom ng-pristine ng-untouched ng-valid ng-not-empty">
                            </div>

                            <div class="clr"></div>
                            <!-- ngRepeat: payment_term in enquiryProduct.payment_terms --><button data-ng-repeat="payment_term in enquiryProduct.payment_terms" data-ng-click="paymentTerm(this);" data-ng-class="{'btn btn-checked': payment_term.is_checked == true , 'btn btn-unchecked': payment_term.is_checked == false }" class="ng-binding ng-scope btn btn-checked">
                                Cash
                            </button><!-- end ngRepeat: payment_term in enquiryProduct.payment_terms --><button data-ng-repeat="payment_term in enquiryProduct.payment_terms" data-ng-click="paymentTerm(this);" data-ng-class="{'btn btn-checked': payment_term.is_checked == true , 'btn btn-unchecked': payment_term.is_checked == false }" class="ng-binding ng-scope btn btn-unchecked">
                                RTGS
                            </button><!-- end ngRepeat: payment_term in enquiryProduct.payment_terms --><button data-ng-repeat="payment_term in enquiryProduct.payment_terms" data-ng-click="paymentTerm(this);" data-ng-class="{'btn btn-checked': payment_term.is_checked == true , 'btn btn-unchecked': payment_term.is_checked == false }" class="ng-binding ng-scope btn btn-unchecked">
                                Cheque
                            </button><!-- end ngRepeat: payment_term in enquiryProduct.payment_terms -->
                            <div class="clr"></div>
                            <label class="top-spc2">Description</label>
                            <textarea data-ng-model="enquiry_description" class="top-spc-min fctextarea ng-pristine ng-untouched ng-valid ng-empty" placeholder="Write here product description"></textarea>
                            <div class="top-spc l-padd">
                                <input type="checkbox" id="enquiry_is_buy_from_metalbaba" class="css-checkbox ng-pristine ng-untouched ng-valid ng-empty" data-ng-model="enquiry_is_buy_from_metalbaba" data-ng-checked="enquiry_is_buy_from_metalbaba == 1" checked="checked">
                                <label for="enquiry_is_buy_from_metalbaba" class="css-label">Buy through Metalbaba Tradesafe.</label>
                            </div>
                            <button class="login-btn top-spc2" data-ng-click="submitEnquiry(this);">Submit  Enquiry</button>
                        </div>
                    </div>
                    <div class="col-lg-6 place-boxr">
                        <img src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-2012B-AOD-027mm76204" title="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-2012B-AOD-027mm76204" alt="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-2012B-AOD-027mm76204" class="place-boxrimg" data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-2012B-AOD-027mm76204">
                        <h3 class="ng-binding">Stainless Steel Circle 201/2B AOD 0.27mm</h3>
                        <h3>
                            <!-- ngRepeat: attribute in enquiryProduct.attribute_list --><span data-ng-repeat="attribute in enquiryProduct.attribute_list" class="ng-binding ng-scope">
                                Grade: 201
                            </span><!-- end ngRepeat: attribute in enquiryProduct.attribute_list --><span data-ng-repeat="attribute in enquiryProduct.attribute_list" class="ng-binding ng-scope">
                                Thickness: 0.27 mm
                            </span><!-- end ngRepeat: attribute in enquiryProduct.attribute_list --><span data-ng-repeat="attribute in enquiryProduct.attribute_list" class="ng-binding ng-scope">
                                Surface: 2B
                            </span><!-- end ngRepeat: attribute in enquiryProduct.attribute_list --><span data-ng-repeat="attribute in enquiryProduct.attribute_list" class="ng-binding ng-scope">
                                Brand:
                            </span><!-- end ngRepeat: attribute in enquiryProduct.attribute_list --><span data-ng-repeat="attribute in enquiryProduct.attribute_list" class="ng-binding ng-scope">
                                Sizes: 6 - 17 Inch
                            </span><!-- end ngRepeat: attribute in enquiryProduct.attribute_list -->
                        </h3>
                        <div class="byen-boxrin5 ng-binding">
                            <i data-ng-show="enquiryProduct.is_international == 1" class="fa faicon fa-dollar ng-hide" aria-hidden="true"></i>
                            <i data-ng-show="enquiryProduct.is_international == 0" class="fa faicon fa-inr" aria-hidden="true"></i>
                            126.00/Kilogram
                        </div>
                        <div class="byen-boxrin4 ng-binding">Vanish Ind.</div>
                        <div class="byen-boxrin6 ng-binding">
                            New Delhi, India
                        </div>
                        <div class="top-spc5 bqtext">
                            <i class="quotes"></i>
                            <p>Best Quotes</p>
                        </div>
                        <div class="clr"></div>
                        <div class="top-spc bqtext">
                            <i class="buying"></i>
                            <p>Convenience of Buying</p>
                        </div>
                        <div class="clr"></div>
                        <div class="top-spc bqtext">
                            <i class="quick"></i>
                            <p>Quick Access to Suppliers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- for enquiry for  -->




                <script type="text/javascript">
                $('#buyleadModal').hide();
                $('#placeEnquiryModal').hide();
                $('#login-signup-btn').hide();
                $('#login-reset-btn').hide();
                $('#login-signin-btn').show();
                $('#login-password-btn').show();
                $('#login-signup-link').show();
                $('#login-login-link').hide();
                $('#login-username').show();

                function mb_enq(){
                  $('#placeEnquiryModal').modal('show');
                }

                //submit ENQUIRY
                function submitBuylead(){
                  var bl_product=$('#buylead_product').val();
                  var bl_quantity=$('#buylead_quantity').val();
                  var bl_price=$('#buylead_price').val();
                  var bl_description=$('#buylead_description').val();

                  if(buylead_product==""){
                    toastr.error('Please provide Product name', 'Alert!');
                    return false;
                  }
                  if(buylead_quantity==""){
                    toastr.error('Please enter quantity', 'Alert!');
                    return false;
                  }
                  if(buylead_price==""){
                    toastr.error('Please enter bid price', 'Alert!');
                    return false;
                  }
                  if(buylead_description==""){
                    toastr.error('Please enter discription', 'Alert!');
                    return false;
                  }

                  var datastring = "_token=" + CSRF_TOKEN+"&bl_product="+bl_product+'&bl_quantity='+bl_quantity+'&bl_price='+bl_price+'&bl_description='+bl_description;
                  //ajax class
                  $.ajax({
                    type: 'POST',
                    url: BASE_URL + "/buylead_action", //this should be url to your PHP file
                    data:datastring,
                    beforeSend: function(){
                    },
                    success: function(data) {
                      console.log(data);
                      if(data.status==0){
                        location.reload();
                      }
                    },
                    dataType: "json",
                  });
                  //ajax class






                }
                //submit ENQUIRY


                function placeBuylead(){
                    $('#buyleadModal').show();
                }
                function showLogin() {
                  $('#login-otp').hide();
                  $('#loginModel').modal('show');
                  $('#login-heading').html('LOGIN');
                  $('#login-title').html('Please provide your mobile number or email to login on metalbaba!');

                  $('#login-name').hide();
                  $('#login-company').hide();
                  $('#login-mobile').hide();
                  $('#login-email').hide();
                  $('#login-username').show();

                  $('#login-signup-btn').hide();
                  $('#login-reset-btn').hide();
                  $('#login-signin-btn').show();
                  $('#login-password-btn').show();

                  $('#login-signup-link').show();
                  $('#login-login-link').hide();
                }
                function showSignup() {
                  $('#loginModel').modal('show');
                  $('#login-heading').html('SIGNUP');
                  $('#login-title').html('Please provide your details to register on metalbaba!');

                  $('#login-name').show();
                  $('#login-company').show();
                  $('#login-mobile').show();
                  $('#login-email').show();
                  $('#login-username').hide();

                  $('#login-signup-btn').show();
                  $('#login-reset-btn').hide();
                  $('#login-signin-btn').hide();
                  $('#login-password-btn').hide();

                  $('#login-signup-link').hide();
                  $('#login-login-link').show();
                }
                //logout
                function logout(){
                  var datastring = "_token=" + CSRF_TOKEN+"&user_logout=1"
                  //ajax class
                  $.ajax({
                    type: 'POST',
                    url: BASE_URL + "/user_logout", //this should be url to your PHP file
                    data:datastring,
                    beforeSend: function(){

                    },
                    success: function(data) {
                      console.log(data);
                      if(data.status==0){
                        location.reload();
                      }
                    },
                    dataType: "json",


                  });
                  //ajax class
                } //end of logout
                function login(){
                    var username=$('#login-username-input').val();
                    var password=$('#login-password-input').val();
                    if(username==""){
                      toastr.error('Email or Username Invalid', 'Alert!');
                      return false;
                    }
                    if(password==""){
                      toastr.error('Invalid password', 'Alert!');
                      return false;
                    }

                  var datastring = "_token=" + CSRF_TOKEN + "&username=" + username + '&password=' + password + '&type=' + '2';
                  $.ajax({
                    type: 'POST',
                    url: BASE_URL + "/user_login", //this should be url to your PHP file
                    data:datastring,
                    beforeSend: function(){

                      $('.login-container').css('pointer-event','none');
                    },
                    success: function(data) {
                      console.log(data);
                      if(data.status==1){
                          location.reload();
                      }else{
                        toastr.error(data.message, 'Alert!');
                        return false;
                      }
                    },
                    dataType: "json",
                  });

                }
                function signup(){

                  var login_otp=$('#login-signup-btn').html();
                  var name=$('#login-name-input').val();
                  var company=$('#login-company-input').val();
                  var mobile=$('#login-mobile-input').val();
                  var email=$('#login-email-input').val();
                  var password=$('#login-password-input').val();

                  if(login_otp=='Continue'){                   //step 1


                    if(name==""){
                      toastr.error('Please enter valid name', 'Alert!');
                      return false;
                    }
                    if(mobile==""){
                      toastr.error('Please enter valid Mobile no.', 'Alert!');
                      return false;
                    }
                    phone = mobile.replace(/[^0-9]/g,'');
                    if (phone.length != 10)
                    {
                        toastr.error('Please enter valid Mobile no.', 'Alert!');
                        $('#login-mobile-input').val(" ");
                        $('#login-mobile-input').focus();
                          return false;
                    }

                    if(email==""){
                      toastr.error('Please enter valid email', 'Alert!');
                      return false;
                    }
                    if(IsEmail(email)==false){
                    toastr.error('Please enter valid email', 'Alert!');
                      return false;
                    }

                    if(password==""){
                      toastr.error('Please enter password', 'Alert!');
                      return false;
                    }
                    var datastring = "_token=" + CSRF_TOKEN + "&name=" + name + '&company=' + company + '&mobile=' + mobile+'&email='+email+'&password='+password+'&step=1';
                    //ajax class
                    $.ajax({
                      type: 'POST',
                      url: BASE_URL + "/user_register", //this should be url to your PHP file
                      data:datastring,
                      beforeSend: function(){
                      $('.login-container').css('pointer-event','none');
                      },
                      success: function(data) {

                        if(data.status==1){
                            $('#login-name').hide();
                            $('#login-company').hide();
                            $('#login-mobile').hide();
                            $('#login-email').hide();
                            $('#login-password').hide();
                            $('#login-signup-btn').html('Verify');
                            $('#login-otp').show();


                        }
                      },
                      dataType: "json",

                    });
                    //ajax class


                    function IsEmail(email) {
                      var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                      if(!regex.test(email)) {
                        return false;
                      }else{
                        return true;
                      }
                    }


                  }else{
                    //step 2
                      var login_otp=$('#login_otp').val();
                      if(login_otp==""){
                        toastr.error('Invalid OTP', 'Alert!');
                        return false;
                      }

                      var datastring = "_token=" + CSRF_TOKEN + "&name=" + name + '&company=' + company + '&mobile=' + mobile+'&email='+email+'&password='+password+'&login_otp='+login_otp+'&step=2';;

                      //ajax class
                      $.ajax({
                        type: 'POST',
                        url: BASE_URL + "/user_register", //this should be url to your PHP file
                        data:datastring,
                        beforeSend: function(){
                        $('.login-container').css('pointer-event','none');
                        },
                        success: function(data) {
                          console.log(data);
                        },
                        dataType: "json",

                      });
                      //ajax class




                  }







                }//end of signup

                BASE_URL=$('meta[name="csrf-base"]').attr('content');
                CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                </script>






    </body>

</html>

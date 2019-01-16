<!DOCTYPE html>
<html lang="en">
<head>
{!! meta_init() !!}
<meta name="keywords" content="@get('keywords')">
<meta name="description" content="@get('description')">
<meta name="author" content="@get('author')">
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


<!-- this is default skin you can replace that with: dark.css, yellow.css, red.css ect -->
<link id="pagestyle" rel="stylesheet" type="text/css" href="{{ asset('local/public/themes/default/assets/core/css/default.css') }}" />
<link id="pagestyle" rel="stylesheet" type="text/css" href="{{ asset('local/public/themes/default/assets/core/css/custom.css') }}" />
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet" />
<link href="https://codeseven.github.io/toastr/build/toastr.min.css" rel="stylesheet" />

<!--Favicon-->
<link rel="shortcut icon" href="{{ asset('local/public/themes/default/assets/core/img/favicon.ico') }}" type="image/x-icon" />
<link rel="icon" href="{{ asset('local/public/themes/default/assets/core/img/favicon.ico') }}" type="image/x-icon" />
<!--Favicon-->
    <title>@get('title')</title>
    <!-- @styles() -->
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
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/swiper.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/main.js') }}"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/jquery.easy-ticker.js') }}"></script>
                <script type="text/javascript" src="https://codeseven.github.io/toastr/build/toastr.min.js"></script>
                <!-- http://api.metalbaba.local/customer_web_api/category_home_list -->


                <script>
                $(function(){
                	$('.demo1').easyTicker({
                		direction: 'up',
                		easing: 'swing'
                	});

                  //product filter
                //  console.log($('input[name="aj_itemdata"]:checked').serialize());
                    $('input[type="checkbox"]').click(function(){
                        var favorite_filter_val = [];

                        $.each($("input[name='aj_itemdata']:checked"), function(){
                          favorite_filter_val.push($(this).val());
                        });
                        var favorite_filter=favorite_filter_val.join("i_A");
                        console.log(favorite_filter);

                       //ajax
                        var datastring = "_token=" + CSRF_TOKEN + "&filer_items=" + favorite_filter;
                        $.ajax({
                        type: 'POST',
                                url: BASE_URL + "/product_filer_ajax", //this should be url to your PHP file
                                data:datastring,
                                beforeSend: function(){
                                //alert("wait");
                                },
                                success: function(data) {
                                console.log(data.data);

                              },
                              dataType: "json"
                        });
                        //ajax



                  });

                  //ajitemdata


                  //product filter


                    $.getJSON('http://api.metalbaba.local/customer_web/token', function(data) {
                      document.cookie = "X-CSRF-TOKEN="+data.data.token+"";

                    });
                    var getXsrfToken = function() {
                    var cookies_a = document.cookie.split(';');

                        var cookies_ab = cookies_a[4].split('=');

                        var token = '';



                      var str1='X-CSRF-TOKEN';
                        var n = str1.localeCompare(cookies_ab[0]);
                          if(n){
                          token = decodeURIComponent(cookies_ab[1]);
                          }
                          console.log(token);
                      return token;
                  }
                  //login start
                  $('#btnLogin').click(function(){
                   var txtEmailPhone=$('#txtEmailPhone').val();
                   var txtPassword=$('#txtPassword').val();
                   if(txtEmailPhone==""){
                     toastr.error('Invalid Credential.', 'Alert!')
                     return false;
                   }
                   if(txtPassword==""){
                     toastr.error('Invalid Credential.', 'Alert!')
                     return false;
                   }
                   CSRF_TOKEN_A=getXsrfToken();
                   //ajax call
                    var arr = { _token: CSRF_TOKEN_A, username: txtEmailPhone,password:txtPassword,type:"2" };
                    $.ajax({
                        url: 'http://api.metalbaba.local/customer_web/login',
                        headers: {
                            'X-CSRF-TOKEN': CSRF_TOKEN_A
                        },
                        type: 'POST',
                        data: JSON.stringify(arr),
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        async: false,
                        success: function(msg) {
                              document.cookie = "API_TOKEN="+msg.api_token+"";
                              var cookies_ab = document.cookie.split('API_TOKEN=');
                              var API_TOKEN=cookies_ab[1];
                              console.log(API_TOKEN);
                              //ajax call to get profile data
                              var arr = { _token: CSRF_TOKEN_A, API_TOKEN:API_TOKEN,type:"2" };
                              $.ajax({
                                  url: 'http://api.metalbaba.local/customer_web/profile_detail',
                                  headers: {
                                      'X-CSRF-TOKEN': CSRF_TOKEN_A
                                  },
                                  type: 'POST',
                                  data: JSON.stringify(arr),
                                  contentType: 'application/json; charset=utf-8',
                                  dataType: 'json',
                                  async: false,
                                  success: function(msg) {
                                    console.log(msg);
                                  }
                                });
                              //ajax call to get profile data
                        }
                    });




                   //  jQuery.ajax({
                   //  type: "POST",
                   //  url: 'http://api.metalbaba.local/customer_web/login',
                   //  data: JSON.stringify(person),
                   //  dataType: 'json',
                   //  beforeSend: function(xhr) {
                   //    xhr.setRequestHeader( "Content-type", "application/json" );
                   //  },
                   //  success: function (data) {
                   //  if (data.error == 'false') {
                   //    //$('#massage').html(data.msg);
                   //  }
                   //  if (data.error == 'true') {
                   //    //$('#massage').html(data.msg);
                   //  }
                   //  },
                   //  error: function (data) {
                   //  //var errors = data.responseJSON;
                   //  //console.log(errors.message);
                   //    // $('#massage').html(errors.message);
                   //  },
                   //  complete: function () {
                   //
                   //  }
                   //  });
                   // //ajax call


                  });
                  //login end



                  $('#btnLoginA').click(function(){
                   var txtEmailPhone=$('#txtEmailPhone').val();
                   var txtPassword=$('#txtPassword').val();
                   if(txtEmailPhone==""){
                     toastr.error('Invalid Credential.', 'Alert!')
                     return false;
                   }
                   if(txtPassword==""){
                     toastr.error('Invalid Credential.', 'Alert!')
                     return false;
                   }
                   //ajax call
                    jQuery.ajax({
                    type: "POST",
                    url: BASE_URL + "/api/login",
                    data: {
                    _token: CSRF_TOKEN,
                      username: txtEmailPhone,
                      password: txtPassword,
                    },
                    dataType: 'json',
                    beforeSend: function () {

                    },
                    success: function (data) {
                    if (data.error == 'false') {
                      //$('#massage').html(data.msg);
                    }
                    if (data.error == 'true') {
                      //$('#massage').html(data.msg);
                    }
                    },
                    error: function (data) {
                    //var errors = data.responseJSON;
                    //console.log(errors.message);
                      // $('#massage').html(errors.message);
                    },
                    complete: function () {

                    }
                    });
                   //ajax call


                  });
                  //login end





        	// $('.demo3').easyTicker({
        	// 	visible: 1,
        	// 	interval: 4000
        	// });


        	// $('.demo5').easyTicker({
        	// 	direction: 'up',
        	// 	visible: 3,
        	// 	interval: 2500,
        	// 	controls: {
        	// 		up: '.btnUp',
        	// 		down: '.btnDown',
        	// 		toggle: '.btnToggle'
        	// 	}
        	// });

        });



  $('ul.term-list').each(function(){

    var LiN = $(this).find('li').length;

    if( LiN > 3){
      $('li', this).eq(2).nextAll().hide().addClass('toggleable');
      $(this).append('<li class="more">+see more</li>');
    }

  });


  $('ul.term-list').on('click','.more', function(){

    if( $(this).hasClass('less') ){
      $(this).text('+ see more').removeClass('less');
    }else{
      $(this).text('-less').addClass('less');
    }

    $(this).siblings('li.toggleable').slideToggle();

  });

  $(document).ready(function() {
  $("#target-content").load("pagination.php?page=1");
      $("#pagination li").on('click',function(e){
  	e.preventDefault();
  		$("#target-content").html('loading...');
  		$("#pagination li").removeClass('active');
  		$(this).addClass('active');
          var pageNum = this.id;
          $("#target-content").load("pagination.php?page=" + pageNum);
      });

      var owl = $('.owl-carousel');
     owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});

      });



        </script>

        <!-- login and register modal -->
        <div class="modal fade" id="loginModel" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div style="margin-top: 18%;">
                                <div class="login-container">
                                    <div class="modal-content">
                                        <div class="row">
                                            <div class="logform-l">
                                                <div class="top-spc">
                                                    <span class="fa fa-bar-chart fa-2x" ></span>
                                                    <div class="menuhead3">DAILY MARKET PRICES</div>
                                                    <p>Get daily market prices and trends so you are always connected</p>
                                                </div>
                                                <div class="top-spc4">
                                                    <span class="fa fa-shield fa-2x" ></span>
                                                    <div class="menuhead3">FIND VERIFIED SUPPLIERS</div>
                                                    <p>1000s of Verified Suppliers, products and their prices available right at your fingertip!</p>
                                                </div>
                                                <div class="top-spc4">
                                                    <span class="fa fa-comments-o fa-2x" ></span>
                                                    <div class="menuhead3">COMMUNICATE DIRECTLY</div>
                                                    <p>Talk directly to your buyers and sellers through our in-app messaging system</p>
                                                </div>
                                            </div>
                                            <div class="logform-r">
                                                <div class="loghad" id="login-heading">LOGIN</div>
                                                <div class="popclose">
                                                   <button  style="background-color: #FFF" type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
                                                </div>
                                                <p id="login-title">Please provide your mobile number or email to login on metalbaba!</p>

                                                <div class="form-group">
                                                 <label for="email">Enter Mobile Or Email</label>
                                                 <input type="email" class="form-control" id="txtEmailPhone">
                                               </div>
                                               <div class="form-group">
                                                <label for="email">Password</label>
                                                <input type="password" class="form-control" id="txtPassword">
                                              </div>


                                                <div class="otpboxin" id="login-otp" style="display: none;">
                                                    <span class="lock2 sprite"></span>
                                                    <p>Please enter the verification code sent to</p>
                                                    <div class="otphad">
                                                        <button class="otpboxinbtn" data-ng-click="editUsername();">
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <input data-ng-model="login_otp" type="text" placeholder="OTP" class="otpfield top-spc2" />
                                                    <div class="otphad2">Not received your code? <a href="#" data-ng-click="resendOtp();">Resend</a></div>
                                                </div>

                                                <button  id="btnLogin" class="login-btn top-spc3">Sign In</button>
                                                <button data-ng-click="showLoginPassword();" id="login-password-btn" class="login-btn1 top-spc3" style="display: none;">Login With Password</button>
                                                <button data-ng-click="signup();" id="login-signup-btn" class="login-btn top-spc3" style="display: none;">Signup</button>
                                                <button data-ng-click="resetPassword();" id="login-reset-btn" class="login-btn top-spc3" style="display: none;">Reset Password</button>
                                                <div class="clr"></div>
                                                <div id="login-signup-link" class="login-cont-n forget-pass">
                                                    New User?
                                                    <a href="#" data-ng-click="showSignup();">SIGN UP</a>
                                                </div>
                                                <div id="login-login-link" class="login-cont-n forget-pass" style="display: none;">
                                                    Already a member?
                                                    <a href="#" data-ng-click="showLogin();">LOGIN</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        <!-- login and register modal -->

                <script type="text/javascript">
                BASE_URL=$('meta[name="csrf-base"]').attr('content');
                CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                </script>




    </body>

</html>

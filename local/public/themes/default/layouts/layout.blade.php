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
<link href="https://codeseven.github.io/toastr/build/toastr.min.css" rel="stylesheet" />

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
                <script type="text/javascript" src="https://codeseven.github.io/toastr/build/toastr.min.js"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/swiper.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('local/public/themes/default/assets/core/js/script.js') }}"></script>







                <script>
                $(function(){



                  //ajax for sellers

                //ajax pagination

                  //ajax for sellers

                  //ajax pagination
                    var txtpidID=$('#txtpidID').val();
                    if(txtpidID>0){
                      tpid=txtpidID;
                    }else{
                      tpid="";
                    }

                     $("#results" ).load(BASE_URL+'/api/getProductList?pid='+tpid);
                     $("#results").on( "click", ".pagination a", function (e){
                  		e.preventDefault();
                      var favorite_filter_val = [];
                      $.each($("input[name='aj_itemdata']:checked"), function(){
                        favorite_filter_val.push($(this).val());
                      });
                      var favorite_filter=favorite_filter_val.join("i_A");
                    //  console.log(favorite_filter);

                      if(favorite_filter==""){
                        filer_items=[];
                      }

                  		$(".loading-div").show(); //show loading element
                  		var page = $(this).attr("data-page"); //get page number from link
                  		$("#results").load(BASE_URL+'/api/getProductList',{"page":page,"pid":tpid,"filer_items":favorite_filter}, function(){ //get content from PHP page
                  			$(".loading-div").hide(); //once done, hide loading element
                  		});

                  	});
                  //ajax pagination

                  //product filter
                //  console.log($('input[name="aj_itemdata"]:checked').serialize());
                    $('input[type="checkbox"]').click(function(){
                        var checkboxType=$(this).attr('id');
                        switch(checkboxType) {
                          case 'sellerFilter':
                            //code seller filter
                            var favorite_filter_val = [];
                            $.each($("input[name='seller_itemdata']:checked"), function(){
                              favorite_filter_val.push($(this).val());
                            });
                            var favorite_filter=favorite_filter_val.join("i_A");
                            var pcatID=$('#txtpidID').val();
                            var page = $(this).attr("data-page"); //get page number from link
                            if (typeof(page) == "undefined"){
                              page =1;
                            }
                            var datastring = "_token=" + CSRF_TOKEN + "&filer_items=" + favorite_filter+"&pcatID="+pcatID+"&page="+page;
                            $.ajax({
                            type: 'POST',
                                    url: BASE_URL + "/seller_filter_ajax", //this should be url to your PHP file
                                    data:datastring,
                                    beforeSend: function(){
                                    //alert("wait");
                                    },
                                    success: function(data) {
                                      console.log(data);
                                    // $("#results" ).html('');
                                    // $("#results" ).html(data);
                                  }

                            });




                            alert(favorite_filter);

                            break;
                          case 'y':
                            // code block
                            break;
                          default:
                            // code block
                            var favorite_filter_val = [];
                            $.each($("input[name='aj_itemdata']:checked"), function(){
                              favorite_filter_val.push($(this).val());
                            });
                            var favorite_filter=favorite_filter_val.join("i_A");
                          //  console.log(favorite_filter);
                            var pcatID=$('#txtpidID').val();
                            var page = $(this).attr("data-page"); //get page number from link
                            if (typeof(page) == "undefined"){
                              page =1;
                            }
                           //ajax
                            var datastring = "_token=" + CSRF_TOKEN + "&filer_items=" + favorite_filter+"&pcatID="+pcatID+"&page="+page;
                            $.ajax({
                            type: 'POST',
                                    url: BASE_URL + "/product_filer_ajax", //this should be url to your PHP file
                                    data:datastring,
                                    beforeSend: function(){
                                    //alert("wait");
                                    },
                                    success: function(data) {
                                  //  console.log(data);
                                    $("#results" ).html('');
                                    $("#results" ).html(data);
                                  }

                            });
                            //ajax
                              //default

                        }

                        //default

                  });
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

                  });
                  //login end

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

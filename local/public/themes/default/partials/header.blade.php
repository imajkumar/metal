<!-- start topBar -->
       <div class="topBar inverse">
           <div class="container">
               <ul class="list-inline pull-left hidden-sm hidden-xs">
                   <li><span class="text-white">24x7 Customer Support ?</span> Call +91-9555-066-066</li>
               </ul>

               <ul class="topBarNav pull-right">


                   <li class="linkdown">
                       <a href="javascript:void(0);">
                           <i class="fa fa-user mr-5"></i>
                           <span class="hidden-xs">
                               My Account
                               <i class="fa fa-angle-down ml-5"></i>
                           </span>
                       </a>
                       <ul class="w-150">
                           <li><a href="javascript:void(0)" data-toggle="modal" data-target="#loginModel" >Login</a></li>
                           <li><a href="javascript:void(0)" data-toggle="modal" data-target="#loginModel" >Create Account</a></li>

                       </ul>
                   </li>
                   <li class="linkdown">
                       <a href="javascript:void(0);">
                         <i class="fa fa-bell" aria-hidden="true"></i>
                           <span class="hidden-xs">
                               Notifications<sup class="text-primary">(3)</sup>
                               <i class="fa fa-angle-down ml-5"></i>
                           </span>
                       </a>
                       <ul class="cart w-250">

                           <li>
                               <div class="cart-items">
                                   <ol class="items">
                                     <?php
                                     //show notification
                                     use GuzzleHttp\Client;

                                              $client = new Client();

                                              $response = $client->post(Config::get('ayra.apiList.NOTIFICATION_LIST'));
                                              $login_data=json_decode($response->getBody()->getContents());
                                              $notification_arr=$login_data->data->data;
                                              foreach ($notification_arr as $key => $value) {
                                              $created_at = date("d f,Y H:i A", strtotime($value->created_at));
                                              $message = $value->message;
                                              $img_url=URL::to('/local/public/themes/default/assets/core/img/logo-icon.png');
                                              ?>
                                              <li>
                                                  <a href="shop-single-product-v1.html" class="product-image">
                                                     <img src="{{$img_url}}" alt="{{$message}}">
                                                  </a>
                                                  <div class="product-details">

                                                      <p class="product-name">
                                                          <a href="shop-single-product-v1.html">{{$message}}</a>
                                                      </p>

                                                  </div><!-- end product-details -->
                                              </li><!-- end item -->
                                              <?php
                                              }
                                     //show notification
                                      ?>
                                   </ol>
                                   <!-- <a href="#">view more</a> -->
                               </div>
                           </li>
                          </ul>
                   </li>
                   <li class="linkdown">
                       <a href="javascript:void(0);">
                             <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                           <span class="hidden-xs">
                              Buy Leads
                              <!-- http://api.metalbaba.local/customer_web_api/home -->

                           </span>
                       </a>

                   </li>

               </ul>
           </div><!-- end container -->
       </div>
       <!-- end topBar -->

       <div class="middleBar">
           <div class="container">
               <div class="row display-table">
                   <div class="col-sm-3 vertical-align text-left hidden-xs">
                       <a href="{{ URL::to('/')}}">
                           <h1 style="color:#2F57AF">Metalbaba</h1>
                       </a>
                   </div><!-- end col -->
                   <div class="col-sm-9 vertical-align text-center">

                       <form>
                           <div class="row grid-space-1">



                               <div class="col-sm-3">
                                 <div class="btn-group">
                                  <button type="button" class="form-control btn btn-default  dropdown-toggle ajitems" data-toggle="dropdown">
                                    <i class="fa fa-th-large ng-scope" aria-hidden="true" ></i>SELECT PRODUCTS <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu ajmenu" role="menu">
                                      <li><a href="{{ URL::to('/product-list')}}">PRODUCTS</a></li>
                                      <li><a href="{{ URL::to('/seller-list')}}">SUPPLIERS</a></li>
                                      <li><a href="#">BUY LEADS</a></li>
                                  </ul>
                                  </div>
                               </div><!-- end col -->
                               <div class="col-sm-6">
                                   <input type="text" name="keyword" class="form-control input-lg" placeholder="Search">
                               </div><!-- end col -->
                               <div class="col-sm-3">
                                   <input type="submit"  class="btn btn-default btn-block btn-lg" value="Search">
                               </div><!-- end col -->
                           </div><!-- end row -->
                       </form>
                   </div><!-- end col -->
                   <!-- <div class="col-sm-2 vertical-align header-items hidden-xs">
                       <div class="header-item mr-5">
                           <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Buy Leads">
                             <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                               <sub>32</sub>
                           </a>
                       </div>
                       <div class="header-item">
                           <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Notifications">
                             <i class="fa fa-bell" aria-hidden="true"></i>
                               <sub>10</sub>
                           </a>
                       </div>
                   </div> -->
                   <!-- end col -->
               </div><!-- end  row -->
           </div><!-- end container -->
       </div><!-- end middleBar -->

       <!-- start navbar -->
       <div class="navbar yamm navbar-default">
           <div class="container">
               <div class="navbar-header">
                   <button type="button" data-toggle="collapse" data-target="#navbar-collapse-3" class="navbar-toggle">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
                   <a href="javascript:void(0);" class="navbar-brand visible-xs">
                         <h1 style="color:#2F57AF">Metalbaba</h1>
                   </a>
               </div>
               <div id="navbar-collapse-3" class="navbar-collapse collapse">
                   <ul class="nav navbar-nav">
                       <!-- Home -->
                       <li class="dropdown active"><a href="#" data-toggle="dropdown" class="dropdown-toggle">HOME</a>

                       </li><!-- end li dropdown -->
                       <!-- Features -->
                       <li class="dropdown left"><a href="#" data-toggle="dropdown" class="dropdown-toggle">SCRAP METAL PRICES<i class="fa fa-angle-down ml-5"></i></a>
                           <ul class="dropdown-menu">
                               <li><a href="headers.html">INDIA</a></li>
                               <li><a href="footers.html">CHINA</a></li>
                               <li><a href="sliders.html">EUROPE</a></li>
                           </ul><!-- end ul dropdown-menu -->
                       </li><!-- end li dropdown -->
                       <!-- Pages -->
                       <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">NEWS</a>

                       </li><!-- end li dropdown -->
                       <!-- elements -->
                       <li><a href="elements.html">Elements</a></li>
                       <!-- Collections -->
                       <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">COMPANIES</a>

                       </li><!-- end dropdown -->
                   </ul><!-- end navbar-nav -->

               </div><!-- end navbar collapse -->
           </div><!-- end container -->
       </div><!-- end navbar -->

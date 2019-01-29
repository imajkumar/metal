<!-- start topBar -->
<?php
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
$client = new Client();
$data_session = Session::get('MYTOKEN');

 if(!empty($data_session)){
   $clientHandler = $client->getConfig('handler');
   $tapMiddleware = Middleware::tap(function ($request) {
        $request->getHeaderLine('Content-Type');
        $request->getBody();
   });
   $response = $client->request('POST', Config::get('ayra.apiList.USER_PROFILE'), [
             'json'    => [
               'API_TOKEN' => $data_session
               ],
         'handler' => $tapMiddleware($clientHandler)
     ]);
   $user_profile=json_decode($response->getBody()->getContents());
   $usr_data=$user_profile->data;

 }





?>
       <div class="middleBar" >
           <div class="container">
               <div class="row display-table">
                   <div class="col-sm-3 vertical-align text-left hidden-xs">
                   <div class="logo">
                                <a href="/">Metalbaba</a>
                    </div>
                   </div><!-- end col -->
                   <!-- code for option selected -->
                   <?php

                    switch (Request::segment(1)) {
                      case 'product-list':
                      $selected_option="PRODUCT";
                        break;
                      case 'seller-list':
                      $selected_option="SUPPLIERS";
                        break;
                      case 'enquiry-buylead-list':
                      $selected_option="BUY LEADS";
                      break;
                      default:
                        $selected_option="SELECT";
                        break;
                    }

                   ?>
                   <!-- code for option selected -->

                   <div class="col-sm-9 vertical-align text-center">

                           <div class="row grid-space-1">
                               <div class="col-sm-3">
                                 <div class="btn-group dropdown dropdown-select" style="width: 218px">
                                  <button class="form-control btn btn-default dropdown-toggle ajitems" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-th-large ng-scope" aria-hidden="true" ></i>{{$selected_option}} <span class="caret"></span>

                                   </button>


                                   <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ URL::to('/product-list')}}">PRODUCT</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ URL::to('/seller-list')}}">SUPPLIERS</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ URL::to('/enquiry-buylead-list')}}">BUY LEADS</a></li>

                                  </ul>


                                  </div>
                               </div><!-- end col -->
                               <div class="col-sm-4">
                                   <input type="text" name="keyword" class="form-control input-lg" id="btnLookUp" placeholder="Search">
                               </div><!-- end col -->
                               <div class="col-sm-5">
                                  <!-- notify-lead-login  -->
                                  <div class="topBar inverse">
                                    <ul class="topBarNav pull-right">
                                      <li class="linkdown">
                                          <a href="{{ URL::to('/enquiry-buylead-list')}}">
                                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                              <span class="hidden-xs">
                                                Buy Leads
                                              </span>
                                          </a>

                                      </li>

                                        <li class="linkdown">
                                            <a href="javascript:void(0);">
                                              <i class="fa fa-bell" aria-hidden="true"></i>
                                                <span class="hidden-xs">
                                                    Notifications<sup class="text-primary">(3)</sup>
                                                    <i class="fa fa-angle-down ml-5"></i>
                                                </span>
                                            </a>
                                            <ul class="cart w-250" style="background:#EDEDED;">
                                                <li>
                                                    <div class="cart-items">
                                                        <ol class="items">

                                                        <?php
                                                          //show notification
                                                              // use GuzzleHttp\Client;
                                                              //  $client = new Client();

                                                               $response = $client->post(Config::get('ayra.apiList.NOTIFICATION_LIST'));
                                                               $login_data=json_decode($response->getBody()->getContents());
                                                               $notification_arr=$login_data->data->data;
                                                               foreach ($notification_arr as $key => $value) {
                                                               $created_at = date("d F,y H:iA", strtotime($value->created_at));

                                                               $message = $value->message;
                                                               $img_url=URL::to('/local/public/themes/default/assets/core/img/logo-icon.png');
                                                               ?>
                                                               <li>
                                                                 <div class="product-details_notify">
                                                                   <a href="shop-single-product-v1.html" class="product-image">
                                                                      <img src="{{$img_url}}" alt="{{$message}}">
                                                                   </a>
                                                                 </div>
                                                                   <div class="product-details_notify">
                                                                    <div class="product-date_notify">
                                                                      {{$created_at}}
                                                                    </div>
                                                                    <div class="product-item_notify">
                                                                    {{$message}}
                                                                    </div>

                                                                   </div><!-- end product-details -->
                                                               </li><!-- end item -->
                                                               <?php
                                                               }
                                                               //show notification
                                                               ?>
                                                            </ol>
                                                          </div>
                                                        </li>
                                                       </ul>
                                                      </li>

                                                      <li class="linkdown">
                                                          <a href="javascript:void(0);">
                                                              <i class="fa fa-user mr-5"></i>
                                                              <span class="hidden-xs">
                                                                Account
                                                                  <i class="fa fa-angle-down ml-5"></i>
                                                              </span>
                                                          </a>
                                                          <ul class="w-150" style="background:#008FF9">
                                                            <?php
                                                            if(!empty($data_session)){

                                                              ?>

                                                  <div class="inmenu">
                                                  <li>
                                                      <div class="inuer">
                                                        <i class="fa fa-user icsize1" aria-hidden="true"></i>
                                                      </div>
                                                  </li>
                                                    <li class="prfnme ng-binding" data-ng-show="is_user_login == true">

                                                    </li>
                                                    <li class="prfnme prfnme1" data-ng-show="is_user_login == true">
                                                        <span data-ng-if="getProfile().company != ''" class="ng-binding ng-scope">

                                                        </span>
                                                    </li>
                                                </div>
                                                <div class="profile_panel" style="background:#FFF">
                                                  <li data-ng-show="is_user_login == true" class="">
                                                      <a href="#" onclick="viewCart();">My Truck</a>
                                                  </li>
                                                  <li data-ng-show="is_user_login == true" class="">
                                                      <a href="/order-list">My Order</a>
                                                  </li>
                                                  <li data-ng-show="is_user_login == true" class="">
                                                      <a href="#" onclick="showDashboard('manage_products');">My Products</a>
                                                  </li>
                                                  <li data-ng-show="is_user_login == true" class="">
                                                      <a href="#" onclick="showDashboard('company_profile');">Company Profile</a>
                                                  </li>
                                                  <li data-ng-show="is_user_login == true" class="">
                                                      <a href="#" onclick="logout();">Logout</a>
                                                  </li>
                                                </div>




                                                              <?php
                                                            }else{
                                                              ?>
                                                              <div class="inmenu">
                                                                <li>
                                                                    <div class="inuer">
                                                                      <i class="fa fa-user icsize1" aria-hidden="true"></i>
                                                                    </div>
                                                                </li>
                                                                <li class="prfnme ng-binding ng-hide" data-ng-show="is_user_login == true">

                                                                </li>
                                                                <li class="prfnme prfnme1 ng-hide" data-ng-show="is_user_login == true">
                                                                  <span data-ng-if="getProfile().company != ''" class="ng-binding ng-scope">
                                                                  </span>

                                                                </li>
                                                                <li data-ng-show="is_user_login == false">
                                                                    <button class="inbtn" href="#" onclick="showLogin();">Login</button>
                                                                </li>
                                                                <li data-ng-show="is_user_login == false">
                                                                    New User? <a href="#" onclick="showSignup();">Register</a>
                                                                </li>
                                                                </div>

                                                              <?php
                                                            }
                                                            ?>

                                                            </ul>
                                                      </li>

                                                      </ul>

                                                    </div>

                                  <!-- notify-lead-login  -->
                               </div><!-- end col -->
                           </div><!-- end row -->

                   </div><!-- end col -->

                   <!-- end col -->
               </div><!-- end  row -->
           </div><!-- end container -->
       </div><!-- end middleBar -->

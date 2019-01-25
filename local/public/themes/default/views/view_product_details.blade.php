<?php
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
$client = new Client();
$clientHandler = $client->getConfig('handler');
$tapMiddleware = Middleware::tap(function ($request) {
     $request->getHeaderLine('Content-Type');
     $request->getBody();
});

if(Request::segment(1)=='product-detail'){
    $pid=Request::segment(2);
  }

$response = $client->request('POST', 'http://api.metalbaba.local/customer_web/product_info', [
         'json'    => [
           'API_TOKEN' => '',
           'id' =>$pid
     ],
     'handler' => $tapMiddleware($clientHandler)
 ]);
// echo $response->getBody()->getContents();
$data_arr=json_decode($response->getBody()->getContents());
//echo "<pre>";
//print_r($data_arr->data);
//print_r();


?>
<section class="section light-backgorund">
    <div class="container">
      <div class="row">

        <div class="sitebread">
            <ul itemscope="" itemtype="http://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                  <a href="/" itemprop="item">
                      <span itemprop="name">Home</span>
                  </a>
                  <meta itemprop="position" content="1">
              </li>
              <?php
              //echo "<pre>";
                $p_name=str_replace('/', '-',  $data_arr->data->general->name);
              foreach ($data_arr->data->general->category->breadcrum as $key => $value) {
                $pname=str_replace(' ', '-',  $value->name);

                ?>

                <li data-ng-repeat="breadcrum in general.category.breadcrum" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="ng-scope">
                    <a itemprop="item" data-ng-href="/product-list/{{$value->id}}/{{$pname}}" target="_blank" href="/product-list/{{$value->id}}/{{$pname}}">
                        <span itemprop="name" class="ng-binding">{{$value->name}}</span>
                    </a>
                    <meta itemprop="position" content="2">
                </li>
                <?php
              }
              ?>
              <li data-ng-repeat="breadcrum in general.category.breadcrum" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="ng-scope">
                  <a itemprop="item"  target="_blank" href="#">
                      <span itemprop="name" class="ng-binding">{{$p_name}}</span>
                  </a>

              </li>
            </ul>
        </div>

         <div class="col-md-9">

           <div class="row">
              <div class="col-md-4">
                <div class="pg_card">
                  <div class="product_gallery_details">
                    <img src="{{$data_arr->data->general->image}}" width="240px;">

                  </div>
                  <div class="pg_thumbnail">
                    <img src="{{$data_arr->data->general->image_thumbnail}}" width="75px;">

                  </div>
                </div>

              </div>
              <div class="col-md-8">
               <div class="product_details_card_panel">
                 <div class="rlshimar">
                        <div class="pro-detail">
                            <h1 itemprop="name" class="ng-binding">{{$data_arr->data->general->name}}</h1>
                            <div class="pro-like">


                                <button type="button" class="unlike-btn sprite ng-scope" data-ng-if="general.is_follow == 0" data-ng-click="followProduct();" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow"></button><!-- end ngIf: general.is_follow == 0 -->
                            </div>
                            <div class="clr"></div>
                            <!-- ngIf: attributes.length -->
                            <div class="pd-element ng-scope" data-ng-if="attributes.length" itemprop="description">
                                <?php

                                foreach ($data_arr->data->attributes as $key => $value) {

                                  ?>
                                  <div class="pd-element-in ng-binding ng-scope" data-ng-repeat="attribute in attributes" data-ng-if="attribute.value != ''">
                                      {{$value->name}}: <span class="ng-binding">{{$value->value}}</span>
                                  </div>
                                  <?php
                                }
                                ?>
                              </div>
                            <div class="clr"></div>
                            <div class="pd-price1 uniqbdrbt">
                                <!-- ngIf: skus.length == 0 --><div class="pd-price1l ng-binding ng-scope" data-ng-if="skus.length == 0">
                                    <!-- ngIf: general.is_international == 1 -->
                                    <!-- ngIf: general.is_international == 0 --><i class="fa fa-inr ng-scope" aria-hidden="true" data-ng-if="general.is_international == 0"></i><!-- end ngIf: general.is_international == 0 -->
                                    {{$data_arr->data->general->price}}/   {{$data_arr->data->general->unit->code}}
                                    <span>
                                        <a href="#" data-ng-click="getLatestPrice(this);">Get Latest Price</a>
                                    </span>
                                </div><!-- end ngIf: skus.length == 0 -->
                                <!-- ngIf: skus.length > 0 -->
                                <div class="pd-price1r">
                                    <div fb-like="shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/product-detail/66/Stainless-Steel-Circle-201-2B-Induction-0-21mm" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=0&amp;href=http%3A%2F%2Fmetalbaba.local%2Fproduct-detail%2F66%2FStainless-Steel-Circle-201-2B-Induction-0-21mm&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f29ae3e4736e84" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fj-GHT1gpo6-.js%3Fversion%3D43%23cb%3Dfe47f2ffec2c3c%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff2dc705596c06d8%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fmetalbaba.local%2Fproduct-detail%2F66%2FStainless-Steel-Circle-201-2B-Induction-0-21mm&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                                </div>
                            </div>
                            <div class="clr"></div>
                            <div class="uniq-pad6">
                                <!-- ngIf: skus.length == 0 --><div class="pd-or ng-scope" data-ng-if="skus.length == 0">
                                    <label>Last Update</label>
                                    <span class="ng-binding">{{ date("d F,y H:iA", strtotime($data_arr->data->general->updated_at))}}</span>
                                    <!-- ngIf: general.moq > 0 --><label data-ng-if="general.moq > 0" class="ng-scope">Minimum Order</label><!-- end ngIf: general.moq > 0 -->
                                    <!-- ngIf: general.moq > 0 --><span data-ng-if="general.moq > 0" class="ng-binding ng-scope">{{$data_arr->data->general->moq}} {{$data_arr->data->general->unit->code}}</span><!-- end ngIf: general.moq > 0 -->
                                    <!-- ngIf: general.saq > 0 --><label data-ng-if="general.saq > 0" class="ng-scope">Supply capacity</label><!-- end ngIf: general.saq > 0 -->
                                    <!-- ngIf: general.saq > 0 --><span data-ng-if="general.saq > 0" class="ng-binding ng-scope">{{$data_arr->data->general->saq}} {{$data_arr->data->general->unit->code}} per Month</span><!-- end ngIf: general.saq > 0 -->
                                    <label>Payment Option</label>
                                    <span>
                                      <?php
                                        foreach ($data_arr->data->general->payment_terms as $key => $value) {
                                           ?>
                                           <button class="crc ng-binding ng-scope" data-ng-repeat="payment_term in general.payment_terms">
                                              {{$value->name}}
                                           </button>
                                           <?php
                                        }
                                       ?>
                                    </span>
                                </div><!-- end ngIf: skus.length == 0 -->

                                <!-- ngIf: skus.length > 0 -->
                                <div class="clr"></div>
                                <div class="pd-btn top-spc4">
                                    <div class="pd-btn-r2">
                                        <button class="pd-btn-sup2 bttn-material-flat bttn-md bttn-primary" data-ng-click="placeEnquiry(this);">CONTACT SUPPLIER</button>
                                    </div>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>
                    </div>


               </div>
              </div>

           </div>

           <!-- //get contact -->
           <div class="rlshimar">
                <!-- ngIf: show_detail --><div class="pd-common ng-scope" data-ng-if="show_detail">
                    <div class="pd-common2">Product Details</div>
                    <div class="uniq-pad3 pd-table">
                        <div class="pddbx">


                            <!-- ngIf: attributes.length --><div class="pddbxin1 ng-scope" data-ng-if="attributes.length">
                                <strong>Specifications</strong>
                            </div><!-- end ngIf: attributes.length -->
                            <!-- ngIf: attributes.length -->
                            <div class="pddbxin2 ng-scope" data-ng-if="attributes.length">
                              <?php

                              foreach ($data_arr->data->attributes as $key => $value) {

                                ?>
                                <div data-ng-repeat="attribute in attributes" data-ng-if="attribute.value != ''" class="ng-scope">
                                    <label class="ng-binding">• &nbsp;   {{$value->name}} :</label>
                                    <span class="ng-binding">{{$value->value}}</span>
                                </div>


                                <?php
                              }
                              ?>


                            </div>
                            <div class="pddbxhr"><hr></div>

                            <div class="pddbxin1 ng-scope" data-ng-if="descriptions.description != ''">
                                <strong>Detailed Description</strong>
                            </div>
                          <div class="pddbxin2 ng-scope" data-ng-if="descriptions.description != ''">
                                <p data-ng-bind-html="descriptions.description" class="ng-binding"><p>{{$data_arr->data->general->name}}<br></p></p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <?php
            $client = new Client();
            $clientHandler = $client->getConfig('handler');
            $tapMiddleware = Middleware::tap(function ($request) {
                 $request->getHeaderLine('Content-Type');
                 $request->getBody();
            });
            if(Request::segment(1)=='product-detail'){
                $pid=Request::segment(2);
            }
            $response = $client->request('POST', 'http://api.metalbaba.local/customer_web/product_buyer_view', [
                     'json'    => [
                       'API_TOKEN' => '',
                       'id' =>$pid
                 ],
                 'handler' => $tapMiddleware($clientHandler)
             ]);
            // echo $response->getBody()->getContents();
            $home_data=json_decode($response->getBody()->getContents());
            // echo "<pre>";
            // print_r($home_data->data);
            // die;

            ?>

            <!-- Buyer Who Viewed This Also Viewed -->
            <div class="row">
            <div class="col-md-12">
            	<div class="rlshimar">
            	            <!-- ngIf: card.card_type == 7 --><div data-ng-if="card.card_type == 7" data-ng-show="card.card_data.length" class="ng-scope">
            	                <div class="pd-common hslidru">
            	                    <h2 class="ng-binding">Buyer Who Viewed This Also Viewed</h2>
            											<!-- swipper container -->
            			                <div class="swiper-container swiper-container-horizontal">
            			                    <div class="swiper-wrapper">

            															<?php
            															 foreach ($home_data->data->data as $key => $value) {
            														    $str_slash = str_replace('/', '-', $value->product_name);
            																 $str_comma = str_replace(',', '-', $value->product_name);
            																 $pr_URL = str_replace(' ', '-', $str_comma);
            																 $pr_URL = str_replace('/', '-', $pr_URL);
            																 ?>
            																 <div class="swiper-slide col-item ng-scope swiper-slide" data-ng-repeat="product in trending_products" style="width: 229.111px;">
            																 		<a  title="{{$value->product_name}}" target="_blank" href="/product-detail/{{$value->id}}/{{$pr_URL}}">
            																 				<div class="photo">
            																 						<img data-ng-src="{{$value->image}}" alt="{{$value->product_name}}" title="{{$value->product_name}}"
            																						src="{{$value->image}}">
            																 				</div>
            																 				<div class="info">
            																 						<div class="price">
            																 								<div class="prh4 ng-binding">{{$value->product_name}}</div>
            																 								<div class="prh5 ng-binding">{{$value->product_detail}}</div>
            																 								<div class="prh3 price-text-color ng-binding">
            																										<i class="fa fa-inr ng-scope" ng-if="product.is_international == 0"></i>
            																										{{$value->price}}
            																 								</div>
            																 						</div>
            																 				</div>
            																 		</a>
            																 </div>

            																 <?php
            															 }
            															?>
            			                    </div>
            			                    <div class="swiperl">
            			                        <div class="swiper-button-next">

            			                        </div>
            			                    </div>
            			                    <div class="swiperr">
            			                        <div class="swiper-button-prev swiper-button-active">

            			                        </div>
            			                    </div>
            			                </div>
            												<!-- swipper container -->

            	                </div>
            	            </div><!-- end ngIf: card.card_type == 7 -->
            	        </div>

            </div>
            </div>
            <!-- Buyer Who Viewed This Also Viewed -->
            <!-- product_similar -->
            <?php
            $client = new Client();
            $clientHandler = $client->getConfig('handler');
            $tapMiddleware = Middleware::tap(function ($request) {
                 $request->getHeaderLine('Content-Type');
                 $request->getBody();
            });
            if(Request::segment(1)=='product-detail'){
                $pid=Request::segment(2);
            }
            $response = $client->request('POST', 'http://api.metalbaba.local/customer_web/product_similar', [
                     'json'    => [
                       'API_TOKEN' => '',
                       'id' =>$pid
                 ],
                 'handler' => $tapMiddleware($clientHandler)
             ]);
            // echo $response->getBody()->getContents();
            $home_data=json_decode($response->getBody()->getContents());
            // echo "<pre>";
            // print_r($home_data->data);
            // die;

            ?>

            <div class="row">
            <div class="col-md-12">
              <div class="rlshimar">
                          <!-- ngIf: card.card_type == 7 --><div data-ng-if="card.card_type == 7" data-ng-show="card.card_data.length" class="ng-scope">
                              <div class="pd-common hslidru">
                                  <h2 class="ng-binding">Explore More Products</h2>
                                  <!-- swipper container -->
                                  <div class="swiper-container swiper-container-horizontal">
                                      <div class="swiper-wrapper">

                                          <?php
                                           foreach ($home_data->data->data as $key => $value) {
                                            $str_slash = str_replace('/', '-', $value->product_name);
                                             $str_comma = str_replace(',', '-', $value->product_name);
                                             $pr_URL = str_replace(' ', '-', $str_comma);
                                             $pr_URL = str_replace('/', '-', $pr_URL);
                                             ?>
                                             <div class="swiper-slide col-item ng-scope swiper-slide" data-ng-repeat="product in trending_products" style="width: 229.111px;">
                                                <a  title="{{$value->product_name}}" target="_blank" href="/product-detail/{{$value->id}}/{{$pr_URL}}">
                                                    <div class="photo">
                                                        <img data-ng-src="{{$value->image}}" alt="{{$value->product_name}}" title="{{$value->product_name}}"
                                                        src="{{$value->image}}">
                                                    </div>
                                                    <div class="info">
                                                        <div class="price">
                                                            <div class="prh4 ng-binding">{{$value->product_name}}</div>
                                                            <div class="prh5 ng-binding">{{$value->product_detail}}</div>
                                                            <div class="prh3 price-text-color ng-binding">
                                                                <i class="fa fa-inr ng-scope" ng-if="product.is_international == 0"></i>
                                                                {{$value->price}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                             </div>

                                             <?php
                                           }
                                          ?>
                                      </div>
                                      <div class="swiperl">
                                          <div class="swiper-button-next">

                                          </div>
                                      </div>
                                      <div class="swiperr">
                                          <div class="swiper-button-prev swiper-button-active">

                                          </div>
                                      </div>
                                  </div>
                                    <!-- swipper container -->

                              </div>
                          </div><!-- end ngIf: card.card_type == 7 -->
                      </div>

            </div>
            </div>
            <!-- product_similar -->







           <div class="rlshimar">
                    <div class="pd-common send" data-ng-show="show_detail">
                        <div class="send1">Send Your Message To This Supplier</div>
                        <div class="uniq-pad3 send-msg">
                            <div class="send-msg-l">
                                <table width="100%" cellspacing="20px" cellpadding="20px">
                                    <tbody><tr>
                                        <td valign="top" width="20%"><span>To:</span></td>
                                        <td colspan="2">
                                            <p class="ng-binding">Vanish Ind.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top"><span>Message:</span></td>
                                        <td colspan="2">
                                            <textarea class="formtext-custom ng-pristine ng-untouched ng-valid ng-empty" data-ng-model="supplier_message_description"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top"><span>Quantity:</span></td>
                                        <td>
                                            <div class="kg-field kg-field-left">
                                                <span class="kg ng-binding">Kg</span>
                                                <input type="text" class="kg-custom ng-pristine ng-untouched ng-valid ng-empty" data-ng-model="supplier_message_quantity">
                                            </div>
                                        </td>
                                        <td>
                                            <!--<button class="smsg-l-btn" data-ng-click="submitSupplierMessage(this);">Send</button>-->
                                            <button class="smsg-l-btn bttn-material-flat bttn-md bttn-primary" data-toggle="modal" data-target="#confirmEnquiryModal">Send</button>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </div>
                            <div class="send-msg-r">
                                <div class="smsg-r-box">
                                    <div class="smsg-r-box2"><p>Did not find what you were looking for?</p></div>
                                    <div class="smsg-r-box1"><p><a href="#" data-ng-click="placeBuylead();">Post Buy Requirement</a></p></div>
                                </div>
                                <div class="smsg-line"></div>
                                <div class="smsg-r-box">
                                    <div class="smsg-r-box2"><p>Expand your business to millions of customers</p></div>
                                    <div class="smsg-r-box1">
                                        <p>
                                            <a href="#" data-ng-click="showDashboard('product_form');">
                                                Sell This Item On Metalbaba
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

           <!-- //get contact -->

         </div>
         <div class="col-md-3">
           <div class="product_details_sidebar">

           <div class="rlshimar">
                <div class="soldby1">
                    <div class="sold-sup">
                        Sold By:
                        <!-- ngIf: general.seller.group_image != '' --><div class="gsbadge top-spc ng-scope" ng-if="general.seller.group_image != ''">
                            <img src="http://res.cloudinary.com/metb/image/upload/ABGLIM472338483" data-ng-src="http://res.cloudinary.com/metb/image/upload/ABGLIM472338483" alt="{{$data_arr->data->general->seller->company}}" title="{{$data_arr->data->general->seller->company}}">
                        </div><!-- end ngIf: general.seller.group_image != '' -->
                        <div class="clr"></div>
                        <div class="ss-sname">
                            <strong>
                                <a data-ng-href="/seller-detail/379/Vanish-Ind-" target="_blank" class="ng-binding" href="/seller-detail/379/Vanish-Ind-">{{$data_arr->data->general->seller->company}}</a>
                            </strong>
                        </div>
                        <div class="ss-sname">
                            <span class="ng-binding">{{$data_arr->data->general->seller->location}}</span>
                        </div>
                        <div class="clr"></div>

                        <div class="clr"></div>
                        <div class="ss-sdl-btn">
                            <a data-ng-href="/seller-catalogue/379/Vanish-Ind-" target="_blank" href="/seller-catalogue/379/Vanish-Ind-">View Catalogue</a>
                        </div>
                    </div>
                    <div class="clr"></div>
                    <div class="soldby-in">
                        <div class="uniq-pad2">
                            <h5>Business on your phone!</h5>
                            <p>View sellers &amp; Products right on our latest app</p>
                            <div class="clr"></div>
                            <div class="ss-sdl-btn1">
                                <a href="http://goo.gl/jPtNWy" target="_blank">VIEW IN APP</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <!-- aaa -->
            <div class="rlshimar">
                <div class="side-panel top-spc4 post" data-ng-click="placeBuylead(this);">
                    <div class="uniq-pad">
                        <h3>POST YOUR BUYING REQUIREMENT</h3>
                        <div class="ripplelink hvr-float-shadow-t sidepimg">
                            <img src="http://metalbaba.local/images/post-requirerment.png" alt="Post Requirment" title="Post Requirment">
                        </div>
                        <p>Over <span>2043</span> Types of Stainless Steel Coils, Circles, Pipes, &amp; <span><a href="#">More</a></span></p>
                    </div>
                    <button type="button" class="post-btn">Get Quotations Now</button>
                </div>
            </div>

            <!-- aaa -->
            <!-- kk -->
            <div class="rlshimar">
                <div class="side-panel top-spc4 post">
                    <a href="/gold-membership" target="_blank">
                        <div class="uniq-pad">
                            <h3>SELL ON METALBABA</h3>
                            <div class="ripplelink hvr-float-shadow top-spc4 sidepimg">
                                <img src="http://metalbaba.local/images/truck.png" alt="Truck" title="Truck">
                            </div>
                            <p>Over <span>2043</span> Types of Stainless Steel Coils, Circles, Pipes, &amp; <span>More</span></p>
                        </div>
                    </a>
                    <div class="sposta"><a href="/gold-membership" target="_blank">SELL</a></div>
                </div>
            </div>
            <!-- kk -->
            <!-- l -->
            <div class="rlshimar">
                <div class="side-panel top-spc4 post">
                    <a href="/enquiry-buylead-list" target="_blank">
                        <div class="uniq-pad">
                            <h3>Get More Business</h3>
                            <div class="ripplelink sidepimg">
                                <img src="http://metalbaba.local/images/briefcase.png" alt="briefcase" title="briefcase" class="hvr-buzz-out">
                            </div>
                            <p>View Requirement &amp; Contacts of Genuine Buyers</p>
                        </div>
                    </a>
                    <div class="sposta"><a href="/enquiry-buylead-list" target="_blank">View Buy Leads</a></div>
                </div>
            </div>
            <!-- l -->

          </div>


         </div>

      </div>

    </div>
</section>

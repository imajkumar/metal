<?php
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use YoHang88\LetterAvatar\LetterAvatar;

$client = new Client();
$clientHandler = $client->getConfig('handler');
$tapMiddleware = Middleware::tap(function ($request) {
     $request->getHeaderLine('Content-Type');
     $request->getBody();
});

if(Request::segment(1)=='seller-catalogue'){
    $pid=Request::segment(2);
  }

$response = $client->request('POST', 'http://api.metalbaba.local/customer_web/seller_detail', [
         'json'    => [
           'API_TOKEN' => '',
           'id' =>$pid
     ],
     'handler' => $tapMiddleware($clientHandler)
 ]);
// echo $response->getBody()->getContents();
$data_arr=json_decode($response->getBody()->getContents());
// echo "<pre>";
// print_r($data_arr->data);
$avatar = new LetterAvatar($data_arr->data->company);



?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="content" class="ng-view ng-scope" autoscroll="true"><div class="container-fluid top-spc ng-scope">
  <div class="row">
      <section class="pd-col1">
          <div class="rlshimar">
              <div class="pd-common selrheadbx">
                  <div class="selrhead">

                      <div class="selrhead1 ng-binding ng-scope" data-ng-if="seller_profile.image == ''">
                          <img src="{{$avatar}}">
                      </div>
                      <div class="selrhead2">
                          <div class="selern ng-binding">{{$data_arr->data->company}}</div>
                      </div>

                  </div>
                  <div class="selrdetal">
                      <div class="pd-table">
                          <div class="selld1">
                              <div class="cddbx ng-hide" data-ng-show="seller_profile.gst != ''">
                                  <div class="selldin1">
                                      <p><strong>GST</strong></p>
                                  </div>
                                  <div class="selldin2">
                                      <p class="ng-binding"></p>
                                  </div>
                              </div>
                              <div class="cddbx">
                                  <div class="selldin1">
                                      <p><strong>Location</strong></p>
                                  </div>
                                  <div class="selldin2">
                                      <p class="ng-binding">{{$data_arr->data->location}}</p>
                                  </div>
                              </div>
                              <div class="cddbx ng-hide" data-ng-show="seller_profile.business_type != ''">
                                  <div class="selldin1">
                                      <p><strong>Business Type</strong></p>
                                  </div>
                                  <div class="selldin2">
                                      <p class="ng-binding"></p>
                                  </div>
                              </div>
                              <div class="cddbx ng-hide" data-ng-show="seller_profile.establish_year != '0000'">
                                  <div class="selldin1">
                                      <p><strong>Registered Since</strong></p>
                                  </div>
                                  <div class="selldin2">
                                      <p class="ng-binding">0</p>
                                  </div>
                              </div>
                          </div>

                          <div class="selld2">
                              <div class="sellelnk">
                                  <a data-ng-href="/seller-detail/5223/Ozair-Tradelink" target="_blank" href="/seller-detail/5223/Ozair-Tradelink">View Detail</a>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
          <div class="clr"></div>
          <div class="rlshimar">
              <div class="pd-common">
                  <div class="pd-common2 ng-binding">All Category</div>
                  <div class="sellerprobx" data-ng-show="products.length">
                      <div class="sellerprobxin">
                          <!-- ngRepeat: product in products --><div class="sellerpro ng-scope" data-ng-repeat="product in products">
                              <a data-ng-href="/product-detail/2521/Stainless-Steel-Sheet-304--0-5mm" target="_blank" title="Stainless Steel Sheet 304  0.5mm" href="/product-detail/2521/Stainless-Steel-Sheet-304--0-5mm">
                                  <div class="photo">
                                      <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Sheet-304--05mm27490" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.title}, {&quot;alt&quot;: product.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="undefined" alt="undefined" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Sheet-304--05mm27490"></div>
                                  </div>
                                  <div class="info">
                                      <div class="row">
                                          <div class="price col-md-12">
                                              <h4 class="ng-binding">Stainless Steel Sheet 304  0.5mm</h4>
                                              <!-- ngIf: product.attribute_list.length --><h5 data-ng-if="product.attribute_list.length" class="ng-scope">
                                                  <!-- ngRepeat: attribute in product.attribute_list --><!-- ngIf: attribute.value != '' --><span data-ng-repeat="attribute in product.attribute_list" data-ng-if="attribute.value != ''" class="ng-scope">
                                                      <span class="ng-binding">304  (Ni: 8.0% ,Cr: 18.0%)</span>
                                                  </span><!-- end ngIf: attribute.value != '' --><!-- end ngRepeat: attribute in product.attribute_list --><!-- ngIf: attribute.value != '' --><span data-ng-repeat="attribute in product.attribute_list" data-ng-if="attribute.value != ''" class="ng-scope">
                                                      <span class="ng-binding">0.5MM</span>
                                                  </span><!-- end ngIf: attribute.value != '' --><!-- end ngRepeat: attribute in product.attribute_list -->
                                              </h5><!-- end ngIf: product.attribute_list.length -->
                                              <div class="price-text-color price3 ng-binding">
                                                  <i class="fa fa-dollar ng-hide" aria-hidden="true" data-ng-show="product.is_international == 1"></i>
                                                  <i class="fa fa-inr" aria-hidden="true" data-ng-show="product.is_international == 0"></i>
                                                  210.00
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </a>
                          </div><!-- end ngRepeat: product in products --><div class="sellerpro ng-scope" data-ng-repeat="product in products">
                              <a data-ng-href="/product-detail/2523/Stainless-Steel-Coil-304-2-0mm" target="_blank" title="Stainless Steel Coil 304 2.0mm" href="/product-detail/2523/Stainless-Steel-Coil-304-2-0mm">
                                  <div class="photo">
                                      <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-304-20mm70345" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.title}, {&quot;alt&quot;: product.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="undefined" alt="undefined" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-304-20mm70345"></div>
                                  </div>
                                  <div class="info">
                                      <div class="row">
                                          <div class="price col-md-12">
                                              <h4 class="ng-binding">Stainless Steel Coil 304 2.0mm</h4>
                                              <!-- ngIf: product.attribute_list.length --><h5 data-ng-if="product.attribute_list.length" class="ng-scope">
                                                  <!-- ngRepeat: attribute in product.attribute_list --><!-- ngIf: attribute.value != '' --><span data-ng-repeat="attribute in product.attribute_list" data-ng-if="attribute.value != ''" class="ng-scope">
                                                      <span class="ng-binding">304  (Ni: 8.0% ,Cr: 18.0%)</span>
                                                  </span><!-- end ngIf: attribute.value != '' --><!-- end ngRepeat: attribute in product.attribute_list --><!-- ngIf: attribute.value != '' --><span data-ng-repeat="attribute in product.attribute_list" data-ng-if="attribute.value != ''" class="ng-scope">
                                                      <span class="ng-binding">2.0mm</span>
                                                  </span><!-- end ngIf: attribute.value != '' --><!-- end ngRepeat: attribute in product.attribute_list --><!-- ngIf: attribute.value != '' --><span data-ng-repeat="attribute in product.attribute_list" data-ng-if="attribute.value != ''" class="ng-scope">
                                                      <span class="ng-binding">All Size</span>
                                                  </span><!-- end ngIf: attribute.value != '' --><!-- end ngRepeat: attribute in product.attribute_list -->
                                              </h5><!-- end ngIf: product.attribute_list.length -->
                                              <div class="price-text-color price3 ng-binding">
                                                  <i class="fa fa-dollar ng-hide" aria-hidden="true" data-ng-show="product.is_international == 1"></i>
                                                  <i class="fa fa-inr" aria-hidden="true" data-ng-show="product.is_international == 0"></i>
                                                  200.00
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </a>
                          </div><!-- end ngRepeat: product in products --><div class="sellerpro ng-scope" data-ng-repeat="product in products">
                              <a data-ng-href="/product-detail/2524/Stainless-Steel-Coil-202-2-0mm" target="_blank" title="Stainless Steel Coil 202 2.0mm" href="/product-detail/2524/Stainless-Steel-Coil-202-2-0mm">
                                  <div class="photo">
                                      <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-202-20mm45483" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.title}, {&quot;alt&quot;: product.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="undefined" alt="undefined" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-202-20mm45483"></div>
                                  </div>
                                  <div class="info">
                                      <div class="row">
                                          <div class="price col-md-12">
                                              <h4 class="ng-binding">Stainless Steel Coil 202 2.0mm</h4>
                                              <!-- ngIf: product.attribute_list.length --><h5 data-ng-if="product.attribute_list.length" class="ng-scope">
                                                  <!-- ngRepeat: attribute in product.attribute_list --><!-- ngIf: attribute.value != '' --><span data-ng-repeat="attribute in product.attribute_list" data-ng-if="attribute.value != ''" class="ng-scope">
                                                      <span class="ng-binding">202</span>
                                                  </span><!-- end ngIf: attribute.value != '' --><!-- end ngRepeat: attribute in product.attribute_list --><!-- ngIf: attribute.value != '' --><span data-ng-repeat="attribute in product.attribute_list" data-ng-if="attribute.value != ''" class="ng-scope">
                                                      <span class="ng-binding">2.0mm</span>
                                                  </span><!-- end ngIf: attribute.value != '' --><!-- end ngRepeat: attribute in product.attribute_list --><!-- ngIf: attribute.value != '' --><span data-ng-repeat="attribute in product.attribute_list" data-ng-if="attribute.value != ''" class="ng-scope">
                                                      <span class="ng-binding">All Sizes</span>
                                                  </span><!-- end ngIf: attribute.value != '' --><!-- end ngRepeat: attribute in product.attribute_list -->
                                              </h5><!-- end ngIf: product.attribute_list.length -->
                                              <div class="price-text-color price3 ng-binding">
                                                  <i class="fa fa-dollar ng-hide" aria-hidden="true" data-ng-show="product.is_international == 1"></i>
                                                  <i class="fa fa-inr" aria-hidden="true" data-ng-show="product.is_international == 0"></i>
                                                  130.00
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </a>
                          </div><!-- end ngRepeat: product in products --><div class="sellerpro ng-scope" data-ng-repeat="product in products">
                              <a data-ng-href="/product-detail/2525/Stainless-Steel-Sheet-202-1-20mm" target="_blank" title="Stainless Steel Sheet 202 1.20mm" href="/product-detail/2525/Stainless-Steel-Sheet-202-1-20mm">
                                  <div class="photo">
                                      <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Sheet-202-120mm42437" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.title}, {&quot;alt&quot;: product.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="undefined" alt="undefined" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Sheet-202-120mm42437"></div>
                                  </div>
                                  <div class="info">
                                      <div class="row">
                                          <div class="price col-md-12">
                                              <h4 class="ng-binding">Stainless Steel Sheet 202 1.20mm</h4>
                                              <!-- ngIf: product.attribute_list.length --><h5 data-ng-if="product.attribute_list.length" class="ng-scope">
                                                  <!-- ngRepeat: attribute in product.attribute_list --><!-- ngIf: attribute.value != '' --><span data-ng-repeat="attribute in product.attribute_list" data-ng-if="attribute.value != ''" class="ng-scope">
                                                      <span class="ng-binding">202</span>
                                                  </span><!-- end ngIf: attribute.value != '' --><!-- end ngRepeat: attribute in product.attribute_list --><!-- ngIf: attribute.value != '' --><span data-ng-repeat="attribute in product.attribute_list" data-ng-if="attribute.value != ''" class="ng-scope">
                                                      <span class="ng-binding">1.20mm</span>
                                                  </span><!-- end ngIf: attribute.value != '' --><!-- end ngRepeat: attribute in product.attribute_list --><!-- ngIf: attribute.value != '' --><span data-ng-repeat="attribute in product.attribute_list" data-ng-if="attribute.value != ''" class="ng-scope">
                                                      <span class="ng-binding">All Sizes</span>
                                                  </span><!-- end ngIf: attribute.value != '' --><!-- end ngRepeat: attribute in product.attribute_list -->
                                              </h5><!-- end ngIf: product.attribute_list.length -->
                                              <div class="price-text-color price3 ng-binding">
                                                  <i class="fa fa-dollar ng-hide" aria-hidden="true" data-ng-show="product.is_international == 1"></i>
                                                  <i class="fa fa-inr" aria-hidden="true" data-ng-show="product.is_international == 0"></i>
                                                  150.00
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </a>
                          </div><!-- end ngRepeat: product in products -->
                      </div>

                      <div class="clr"></div>
                      <div class="col-sm-12 text-right">
                          <ul class="pagination" id="pagination-product">
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <div class="clr"></div>
          <div class="rlshimar">
              <div class="pd-common">
                  <div class="pd-common2">Contact Details</div>
                  <div class="uniq-pad3 pd-table">

                      <div>
                          <div class="cddbx">
                              <div class="selldin1">
                                  <p><strong>Contact Person</strong></p>
                              </div>
                              <div class="selldin2">
                                  <p class="ng-binding">{{$data_arr->data->firstname}} {{$data_arr->data->lastname}}</p>
                              </div>
                          </div>
                          <div class="cddbx" data-ng-show="seller_profile.email != ''">
                              <div class="selldin1">
                                  <p><strong>Email</strong></p>
                              </div>
                              <div class="selldin2">
                                  <p class="ng-binding">{{$data_arr->data->email}}</p>
                              </div>
                          </div>
                          <div class="cddbx" data-ng-show="seller_profile.mobile != ''">
                              <div class="selldin1">
                                  <p><strong>Mobile</strong></p>
                              </div>
                              <div class="selldin2">
                                  <p class="ng-binding">{{$data_arr->data->mobile}}</p>
                              </div>
                          </div>
                          <div class="cddbx ng-hide" data-ng-show="seller_profile.telephone != ''">
                              <div class="selldin1">
                                  <p><strong>Telephone</strong></p>
                              </div>
                              <div class="selldin2">
                                  <p class="ng-binding"></p>
                              </div>
                          </div>
                          <div class="cddbx ng-hide" data-ng-show="seller_profile.company_address != ''">
                              <div class="selldin1">
                                  <p><strong>Address</strong></p>
                              </div>
                              <div class="selldin2">
                                  <p class="ng-binding"></p>
                              </div>
                          </div>
                          <div class="cddbx" data-ng-show="seller_profile.description != ''">
                              <div class="selldin1">
                                  <p><strong>Description</strong></p>
                              </div>
                              <div class="selldin2">
                                  <p class="ng-binding">{{$data_arr->data->description}}</p>
                              </div>
                          </div>

                      </div>

                  </div>
              </div>
          </div>
          <div class="clr"></div>
          <span id="message"></span>
          <div class="rlshimar">
              <div class="pd-common send">
                  <div class="pd-common2">Send Your Message To This Supplier</div>
                  <div class="uniq-pad3 send-msg">
                      <div class="send-msg-l">
                          <table width="100%" cellspacing="20px" cellpadding="20px">
                              <tbody><tr>
                                  <td valign="top" width="20%">
                                      <span>To:</span>
                                  </td>
                                  <td colspan="2">
                                      <p class="ng-binding">{{$data_arr->data->company}}</p>
                                  </td>
                              </tr>

                              <tr>
                                  <td valign="top">
                                      <span>Message:</span>
                                  </td>
                                  <td colspan="2">
                                      <textarea class="formtext-custom ng-pristine ng-untouched ng-valid ng-empty" data-ng-model="supplier_message_description"></textarea>
                                  </td>
                              </tr>

                              <tr>
                                  <td valign="top">
                                      <span>Quantity:</span>
                                  </td>
                                  <td>
                                      <div class="kg-field kg-field-left">
                                          <span class="kg ng-binding">Kg</span>
                                          <input type="text" class="kg-custom ng-pristine ng-untouched ng-valid ng-empty" data-ng-model="supplier_message_quantity">
                                      </div>
                                  </td>
                                  <td>
                                      <button class="smsg-l-btn bttn-material-flat bttn-md bttn-primary" data-ng-click="submitSupplierMessage();">Send</button>
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
                              <div class="smsg-r-box2"><p>Call Metalbaba Procurement Team on</p></div>
                              <div class="smsg-r-box3"><p><i class="fa fa-phone pteamicon2" aria-hidden="true"></i> +91-9555-066-066</p></div>
                          </div>
                      </div>


                  </div>
              </div>
          </div>
          <div class="clr"></div>

          <!--All Category -->
          <?php
          $client = new Client();
          $clientHandler = $client->getConfig('handler');
          $tapMiddleware = Middleware::tap(function ($request) {
               $request->getHeaderLine('Content-Type');
               $request->getBody();
          });
          if(Request::segment(1)=='seller-catalogue'){
              $pid=Request::segment(2);
          }
          $response = $client->request('POST', 'http://api.metalbaba.local/customer_web/seller_catalogue', [
                   'json'    => [
                     'API_TOKEN' => '',
                     'seller_id' =>$pid,
                     'category_id' =>'0',
                     'limit' =>'40',
                     'status' =>'1',

               ],
               'handler' => $tapMiddleware($clientHandler)
           ]);
          // echo $response->getBody()->getContents();
          $home_data=json_decode($response->getBody()->getContents());
          // echo "<pre>";
          // print_r($home_data);
          // die;

          ?>
          <div class="row">
          <div class="col-md-12">
            <div class="rlshimar">
                        <!-- ngIf: card.card_type == 7 --><div data-ng-if="card.card_type == 7" data-ng-show="card.card_data.length" class="ng-scope">
                            <div class="pd-common hslidru">
                                <h2 class="ng-binding">All Category</h2>
                                <!-- swipper container -->
                                <div class="swiper-container swiper-container-horizontal">
                                    <div class="swiper-wrapper">

                                        <?php
                                         foreach ($home_data->data->data as $key => $value) {
                                          $str_slash = str_replace('/', '-', $value->name);
                                           $str_comma = str_replace(',', '-', $value->name);
                                           $pr_URL = str_replace(' ', '-', $str_comma);
                                           $pr_URL = str_replace('/', '-', $pr_URL);
                                           ?>
                                           <div class="swiper-slide col-item ng-scope swiper-slide" data-ng-repeat="product in trending_products" style="width: 229.111px;">
                                              <a  title="{{$value->name}}" target="_blank" href="/product-detail/{{$value->id}}/{{$pr_URL}}">
                                                  <div class="photo">
                                                      <img data-ng-src="{{$value->image}}" alt="{{$value->name}}" title="{{$value->name}}"
                                                      src="{{$value->image}}">
                                                  </div>
                                                  <div class="info">
                                                      <div class="price">
                                                          <div class="prh4 ng-binding">{{$value->name}}</div>
                                                          <!-- <div class="prh5 ng-binding">{{$value->name}}</div> -->
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

                            </div>
                        </div>
                    </div>

          </div>
          </div>
          <!-- All Category -->

      </section>

      <aside class="pd-col2">
          <div class="rlshimar">
              <div class="ssoldby">
                  <div class="ssoldby-in">
                      <div class="uniq-pad2">
                          <h5>Do business on your phone!</h5>
                          <p>View sellers &amp; Products right on our latest app</p>
                          <div class="clr"></div>
                          <div class="ss-sdl-btn1">
                              <a href="http://goo.gl/jPtNWy" target="_blank">VIEW IN APP</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="rlshimar">
              <div class="ssoldby top-spc4">
                  <div class="ssoldby-in">
                      <div class="ssoldby-in4">Product Categories</div>
                      <ul>
                          <!-- ngRepeat: category in categories --><li data-ng-repeat="category in categories" class="ng-scope">
                              <a href="#" data-ng-click="changeCategory(this);" class="ng-binding">All Category</a>
                          </li><!-- end ngRepeat: category in categories --><li data-ng-repeat="category in categories" class="ng-scope">
                              <a href="#" data-ng-click="changeCategory(this);" class="ng-binding">Stainless Steel Coil</a>
                          </li><!-- end ngRepeat: category in categories --><li data-ng-repeat="category in categories" class="ng-scope">
                              <a href="#" data-ng-click="changeCategory(this);" class="ng-binding">Stainless Steel Sheet</a>
                          </li><!-- end ngRepeat: category in categories -->
                      </ul>
                  </div>
              </div>
          </div>
          <div class="rlshimar">
              <div class="sside-panel top-spc4 spost" data-ng-click="placeBuylead();">
                  <div class="uniq-pad">
                      <h3>POST YOUR BUYING REQUIREMENT</h3>
                      <div class="ripplelink hvr-float-shadow-t sidepimg">
                          <img src="http://metalbaba.com/images/post-requirerment.png" alt="Post Requirment" title="Post Requirment">
                      </div>
                      <p class="ng-binding">Over <span class="ng-binding">4</span> Types of All Category, &amp;
                          <span>
                              <a href="#">More</a>
                          </span>
                      </p>
                  </div>
                  <button type="button" class="spost-btn">Get Quotations Now</button>
              </div>
          </div>
          <div class="rlshimar">
              <div class="sside-panel top-spc4 post">
                  <a href="/gold-membership" target="_blank">
                      <div class="uniq-pad">
                          <h3>SELL ON METALBABA</h3>
                          <div class="ripplelink hvr-float-shadow top-spc4 sidepimg">
                              <img src="http://metalbaba.com/images/truck.png" alt="Truck" title="Truck" width="90%">
                          </div>
                          <p>Over <span>2043</span> Types of Stainless Steel Coils, Circles, Pipes, &amp; <span>More</span></p>
                      </div>
                  </a>
                  <div class="sposta"><a href="/gold-membership" target="_blank">SELL</a></div>
              </div>
          </div>
          <div class="rlshimar">
              <div class="side-panel top-spc4 post">
                  <a href="/enquiry-buylead-list" target="_blank">
                      <div class="uniq-pad">
                          <h3>Get More Business</h3>
                          <div class="http://metalbaba.com/ripplelink sidepimg">
                              <img src="http://metalbaba.com/images/briefcase.png" alt="briefcase" title="briefcase" class="hvr-buzz-out">
                          </div>
                          <p>View Requirement &amp; Contacts of Genuine Buyers</p>
                      </div>
                  </a>
                  <div class="sposta"><a href="/enquiry-buylead-list" target="_blank">View Buy Leads</a></div>
              </div>
          </div>
      </aside>
  </div>
</div>

<div class="modal fade ng-scope" id="buyleadModal" tabindex="-1" role="dialog">
  <div class="modal-dialog byen-o" role="document">
      <div style="margin-top: 18%;">
          <div class="byen-cont">
              <!--<a data-dismiss="modal">Close</a>-->
              <div class="row">
                  <div class="col-lg-6 r-padd">
                      <div class="byen-box">
                          <label>Product</label>
                          <input data-ng-model="buylead_product" type="text" placeholder="Product" class="fcfield ng-pristine ng-untouched ng-valid ng-empty">
                          <label class="top-spc2">Quantity</label>
                          <div class="rupeelf-field2 rupeelf-field2-left">
                              <span class="faicon">kg</span>
                              <input data-ng-model="buylead_quantity" type="text" placeholder="Quantity" class="rupeelf-custom ng-pristine ng-untouched ng-valid ng-empty">
                          </div>
                          <div class="clr"></div>
                          <label class="top-spc2">Bid Price</label>
                          <div class="rupeelf-field1 rupeelf-field1-left">
                              <span class="fa faicon1 fa-inr"></span>
                              <span class="faicon">/kg</span>
                              <input data-ng-model="buylead_price" type="text" placeholder="Bid Price" class="rupeelf-custom ng-pristine ng-untouched ng-valid ng-empty">

                          </div>
                          <div class="clr"></div>
                          <input type="file" id="file" ng-model="file" onchange="angular.element(this).scope().fileChanged(this)" class="top-spc2 ng-pristine ng-untouched ng-valid ng-empty">
                          <div class="clr"></div>
                          <label class="top-spc2">Description</label>
                          <textarea data-ng-model="buylead_description" class="top-spc-min fctextarea ng-pristine ng-untouched ng-valid ng-empty" placeholder="Write here product description"></textarea>
                          <div class="top-spc l-padd">
                              <input type="checkbox" id="buylead_is_buy_from_metalbaba" class="css-checkbox ng-pristine ng-untouched ng-valid ng-empty" data-ng-model="buylead_is_buy_from_metalbaba" data-ng-checked="buylead_is_buy_from_metalbaba == 1">
                              <label for="buylead_is_buy_from_metalbaba" class="css-label">Buy through Metalbaba Tradesafe.</label>
                          </div>
                          <button class="login-btn top-spc2" data-ng-click="submitBuylead();">Submit  Enquiry</button>
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

<div class="modal fade ng-scope" id="confirmEnquiryModal" tabindex="-1" role="dialog">
  <div class="modal-dialog byen-o" role="document">
      <div style="margin-top: 18%;">
          <div class="byen-cont1 congo">
              <div>
                  <div class="done1">
                      <i class="material-icons checksign"></i>
                      <h2>Your Message Has Been Sent</h2>

                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

</div>
</div>
  </div>
  </div>

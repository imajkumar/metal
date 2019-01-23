<!-- start section -->
<?php
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
$client = new Client();
// Grab the client's handler instance.
$clientHandler = $client->getConfig('handler');
// Create a middleware that echoes parts of the request.
$tapMiddleware = Middleware::tap(function ($request) {
		$request->getHeaderLine('Content-Type');
	 // application/json
		$request->getBody();

});
//product list
$response = $client->request('POST', Config::get('ayra.apiList.CATEGORY_HOME_LIST'), [
 'json'    => [
	 'API_TOKEN' =>'',
	 'page' => '1'
],
'handler' => $tapMiddleware($clientHandler)
]);
$home_cat_data=json_decode($response->getBody()->getContents());
?>


			 <section class="section light-backgorund">
					 <div class="container">
							 <div class="row">
					<aside class="hsidepnl" style="width:266px;">
            <div class="rlshimar">
                <div class="dashmenu" id="dashmenu">
                    <ul>
                        <div class="menuhead1"> Top Categories</div>
                        <!-- ngRepeat: catagories in top_categories --><li class="hmcat ng-scope" data-ng-repeat="catagories in top_categories">
                            <a data-ng-href="/product-list/2/Stainless-Steel" href="/product-list/2/Stainless-Steel">
                                <span class="cir hidden-xs">
                                    <img src="http://res.cloudinary.com/metb/image/upload/c_fit,h_80,w_80/Stainless-Steel22142" data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_80,w_80/Stainless-Steel22142" alt="Stainless Steel" title="Stainless Steel">
                                </span>
                                <span class="dashtxt ng-binding">Stainless Steel</span>
                            </a>
                            <ul class="hchild">
                                <li>
                                    <div class="menuleft">
                                        <div class="menuhead1">Categories</div>
                                        <!-- ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/3/Stainless-Steel-Coil" class="ng-binding" href="/product-list/3/Stainless-Steel-Coil">
                                                Stainless Steel Coil
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/4/Stainless-Steel-Circle" class="ng-binding" href="/product-list/4/Stainless-Steel-Circle">
                                                Stainless Steel Circle
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/5/Stainless-Steel-Flat" class="ng-binding" href="/product-list/5/Stainless-Steel-Flat">
                                                Stainless Steel Flat
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/6/Stainless-Steel-Pipes" class="ng-binding" href="/product-list/6/Stainless-Steel-Pipes">
                                                Stainless Steel Pipes
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/7/Stainless-Steel-Round-Bars" class="ng-binding" href="/product-list/7/Stainless-Steel-Round-Bars">
                                                Stainless Steel Round Bars
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/8/Stainless-Steel-Square-Bar" class="ng-binding" href="/product-list/8/Stainless-Steel-Square-Bar">
                                                Stainless Steel Square Bar
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/9/Stainless-Steel-Hex-Bar" class="ng-binding" href="/product-list/9/Stainless-Steel-Hex-Bar">
                                                Stainless Steel Hex Bar
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/10/Stainless-Steel-Wire" class="ng-binding" href="/product-list/10/Stainless-Steel-Wire">
                                                Stainless Steel Wire
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/11/Stainless-Steel-Sheet" class="ng-binding" href="/product-list/11/Stainless-Steel-Sheet">
                                                Stainless Steel Sheet
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/15/Stainless-Steel-Bright-Bar" class="ng-binding" href="/product-list/15/Stainless-Steel-Bright-Bar">
                                                Stainless Steel Bright Bar
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/16/Stainless-Steel-Patta-Patti" class="ng-binding" href="/product-list/16/Stainless-Steel-Patta-Patti">
                                                Stainless Steel Patta-Patti
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/19/Stainless-Steel-Elbow" class="ng-binding" href="/product-list/19/Stainless-Steel-Elbow">
                                                Stainless Steel Elbow
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/49/Stainless-Steel-Strip-Coil" class="ng-binding" href="/product-list/49/Stainless-Steel-Strip-Coil">
                                                Stainless Steel Strip Coil
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/70/Stainless-Steel-Ring" class="ng-binding" href="/product-list/70/Stainless-Steel-Ring">
                                                Stainless Steel Ring
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/72/Stainless-Steel-Accessories" class="ng-binding" href="/product-list/72/Stainless-Steel-Accessories">
                                                Stainless Steel Accessories
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child -->
                                    </div>
                                </li>
                                <li>
                                    <div class="menuleft">
                                        <img src="images/menu-add.jpg" alt="Menu Add" title="Menu Add">
                                    </div>
                                </li>
                            </ul>
                            <div class="clr"></div>
                        </li><!-- end ngRepeat: catagories in top_categories --><li class="hmcat ng-scope" data-ng-repeat="catagories in top_categories">
                            <a data-ng-href="/product-list/12/Metal-Scrap" href="/product-list/12/Metal-Scrap">
                                <span class="cir hidden-xs">
                                    <img src="http://res.cloudinary.com/metb/image/upload/c_fit,h_80,w_80/Metal-Scrap37347" data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_80,w_80/Metal-Scrap37347" alt="Metal Scrap" title="Metal Scrap">
                                </span>
                                <span class="dashtxt ng-binding">Metal Scrap</span>
                            </a>
                            <ul class="hchild">
                                <li>
                                    <div class="menuleft">
                                        <div class="menuhead1">Categories</div>
                                        <!-- ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/13/Stainless-Steel-Scrap" class="ng-binding" href="/product-list/13/Stainless-Steel-Scrap">
                                                Stainless Steel Scrap
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/45/MS-Scrap" class="ng-binding" href="/product-list/45/MS-Scrap">
                                                MS Scrap
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/73/Aluminium-Scrap" class="ng-binding" href="/product-list/73/Aluminium-Scrap">
                                                Aluminium Scrap
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/74/Copper-Scrap" class="ng-binding" href="/product-list/74/Copper-Scrap">
                                                Copper Scrap
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child -->
                                    </div>
                                </li>
                                <li>
                                    <div class="menuleft">
                                        <img src="images/menu-add.jpg" alt="Menu Add" title="Menu Add">
                                    </div>
                                </li>
                            </ul>
                            <div class="clr"></div>
                        </li><!-- end ngRepeat: catagories in top_categories --><li class="hmcat ng-scope" data-ng-repeat="catagories in top_categories">
                            <a data-ng-href="/product-list/23/Metal-Finished-Goods" href="/product-list/23/Metal-Finished-Goods">
                                <span class="cir hidden-xs">
                                    <img src="http://res.cloudinary.com/metb/image/upload/c_fit,h_80,w_80/Metal-Finished-Goods52930" data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_80,w_80/Metal-Finished-Goods52930" alt="Metal Finished Goods" title="Metal Finished Goods">
                                </span>
                                <span class="dashtxt ng-binding">Metal Finished Goods</span>
                            </a>
                            <ul class="hchild">
                                <li>
                                    <div class="menuleft">
                                        <div class="menuhead1">Categories</div>
                                        <!-- ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/22/Stainless-Steel-Design-Sheets" class="ng-binding" href="/product-list/22/Stainless-Steel-Design-Sheets">
                                                Stainless Steel Design Sheets
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/24/Utensils" class="ng-binding" href="/product-list/24/Utensils">
                                                Utensils
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child --><p data-ng-repeat="catagory in catagories.child" class="ng-scope">
                                            <a data-ng-href="/product-list/47/Stainless-Steel-Colour-Sheet" class="ng-binding" href="/product-list/47/Stainless-Steel-Colour-Sheet">
                                                Stainless Steel Colour Sheet
                                            </a>
                                        </p><!-- end ngRepeat: catagory in catagories.child -->
                                    </div>
                                </li>
                                <li>
                                    <div class="menuleft">
                                        <img src="images/menu-add.jpg" alt="Menu Add" title="Menu Add">
                                    </div>
                                </li>
                            </ul>
                            <div class="clr"></div>
                        </li><!-- end ngRepeat: catagories in top_categories -->

                        <div class="menuhead1">Other Categories</div>
                        <!-- ngRepeat: catagory in other_categories --><li data-ng-repeat="catagory in other_categories" class="ng-scope">
                            <a data-ng-href="/product-list/4/Stainless-Steel-Circle" class="ng-binding" href="/product-list/4/Stainless-Steel-Circle">
                                Stainless Steel Circle
                            </a>
                        </li><!-- end ngRepeat: catagory in other_categories --><li data-ng-repeat="catagory in other_categories" class="ng-scope">
                            <a data-ng-href="/product-list/3/Stainless-Steel-Coil" class="ng-binding" href="/product-list/3/Stainless-Steel-Coil">
                                Stainless Steel Coil
                            </a>
                        </li><!-- end ngRepeat: catagory in other_categories --><li data-ng-repeat="catagory in other_categories" class="ng-scope">
                            <a data-ng-href="/product-list/13/Stainless-Steel-Scrap" class="ng-binding" href="/product-list/13/Stainless-Steel-Scrap">
                                Stainless Steel Scrap
                            </a>
                        </li><!-- end ngRepeat: catagory in other_categories --><li data-ng-repeat="catagory in other_categories" class="ng-scope">
                            <a data-ng-href="/product-list/16/Stainless-Steel-Patta-Patti" class="ng-binding" href="/product-list/16/Stainless-Steel-Patta-Patti">
                                Stainless Steel Patta-Patti
                            </a>
                        </li><!-- end ngRepeat: catagory in other_categories --><li data-ng-repeat="catagory in other_categories" class="ng-scope">
                            <a data-ng-href="/product-list/22/Stainless-Steel-Design-Sheets" class="ng-binding" href="/product-list/22/Stainless-Steel-Design-Sheets">
                                Stainless Steel Design Sheets
                            </a>
                        </li><!-- end ngRepeat: catagory in other_categories -->

                        <div class="menuview top-spc"><a href="/sitemap">View All Categories</a></div>

                    </ul>
                </div>

            </div>
            <div class="hqr top-spc4">
                <div class="hqr1">
                    <img src="http://metalbaba.com/images/metalbaba-qr-code.png" alt="Metalbaba App Link" title="">
                </div>
                <div class="hqr2">
                    <p>Get Daily Market Prices on Your Mobile</p>
                    <span>Scan to download App</span>
                </div>
            </div>

        </aside>



									 <?php

									 $client = new Client();
									 // Grab the client's handler instance.
									 $clientHandler = $client->getConfig('handler');
									 // Create a middleware that echoes parts of the request.
									 $tapMiddleware = Middleware::tap(function ($request) {
												$request->getHeaderLine('Content-Type');
											 // application/json
												$request->getBody();

									 });
									 //product list
			        $response = $client->request('POST', Config::get('ayra.apiList.HOME'), [
			               'json'    => [
			                 'API_TOKEN' =>'',
			                 'page' => '1'
			           	],
			           'handler' => $tapMiddleware($clientHandler)
			       ]);
			        $home_data=json_decode($response->getBody()->getContents());

						  ?>
						<div class="col-sm-9 col-md-8">
											 <div class="row">
													 <div class="col-md-10">
														 <div class="slider_wall">
															 <div class="owl-carousel slider owl-theme">
																<?php
																foreach ($home_data->data->data[0]->card_data as $key => $value) {
																		?>
																		<div class="item">
																				<figure>
																						<a href="javascript:void(0);">
																								<img src="{{ $value->image }}" alt="" />

																						</a>
																				</figure>
																		</div><!-- end item -->
																		<?php
																}
																?>

															</div><!-- end owl carousel -->
														 </div>

													 </div><!-- end col -->
													 <!-- for next col -->
													 <div class="col-sm-2 col-md-2">
														<div class="navbar-vertical" style="width:224px;">
																<ul class="nav nav-stacked" >
																		<li class="headeraj">
																				<h6 class="text-uppercase" style="color:#FFF; text-align: center;";>Latest Prices </h6>
																		</li>
																			<!--sample-->
																			<div class="demo1 demof" style="min-height:300px;">
																						<ul style="list-style-type: none;">
																							<?php

																							foreach ($home_data->data->data[1]->card_data as $key_p => $value_pArr) {
																								 $tot=$value_pArr->timestamp;

																							 ?>

																							 <li>

																									<div class="card">
																												<span style="font-size:12px;">{{$value_pArr->product_name}}</span>
																												<br>
																												<span style="font-size:12px; color:<?php  echo $value_pArr->is_incremented ==1 ? 'green':'red'?>">
																												<?php
																												if($value_pArr->is_incremented){
																													?>
																													 <i  style="color:green" class="fa fa-caret-up" aria-hidden="true"></i>
																													<?php
																												}else{
																													?>
																													 <i  style="color:red" class="fa fa-caret-down" aria-hidden="true"></i>
																													<?php
																												}
																												?>
																																																					<i class="fa fa-inr" aria-hidden="true"></i>
																												{{$value_pArr->price}}<br>
																											</span>
																											<span style="font-size:12px;">
																												{{ \Carbon\Carbon::createFromTimestamp($tot)->format('F d, h:i A')}}
																											</span>




																									</div>
																									</li>
																									<hr>
																							 <?php
																						 }
																							?>
																						 </ul>
																						 <span class="view_more_prices">
																							<a href="{{ URL::to('/prices')}}">View All Prices</a>
																						</span>
																			</div>



																			<!--sample-->

																</ul>
														</div><!-- end navbar-vertical -->

													</div>

													 <!-- for next col -->

											 </div><!-- end row -->
											 <!--tranding product -->
											 <div class="row">
												 <div class="col-md-12">
													 <div class="pr_tranding_img">
														 	sfsfdf
													 </div>

												 </div>
											 </div>
											 <!--tranding product -->



										 </div><!-- end col -->


									 </div>

										 <hr class="spacer-20 no-border">
											 <div class="row">
													 <div class="col-sm-12">
															 <h6 class="ml-5 mb-20 text-uppercase"><span class="text-primary">Recommended </span> Products</h6>
													 </div><!-- end col -->
													 <div class="col-sm-12">
															 <div class="owl-carousel column-5 owl-theme">
																 <?php
																 foreach ($home_data->data->data[3]->card_data as $key => $value) {

																			?>
																			<div class="item">
	 																			 <div class="thumbnail store style1">
	 																					 <div class="header">
	 																							 <figure class="layer">
	 																									 <a href="javascript:void(0);">
	 																											  <img src="{{$value->image}}" alt="{{$value->name}}"/>

	 																									 </a>
	 																							 </figure>
	 																							 <div class="icons">
	 																								 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
	 																							 </div>
	 																					 </div>
	 																					 <div class="caption">
	 																							 <h6 class="regular"><a href="shop-single-product-v1.html">{{$value->name}}</a></h6>
	 																							 <div class="price">
	 																									 <small class="amount">{{$value->detail}}</small><br>
	 																									 <span class="amount text-primary">{{$value->price}}</span>
	 																							 </div>

	 																					 </div><!-- end caption -->
	 																			 </div><!-- end thumbnail -->
	 																	 </div><!-- end item -->
																			<?php
																	}
																 ?>
															 </div><!-- end owl carousel -->
													 </div><!-- end col -->
											 </div><!-- end row -->

							 </div><!-- end row -->
					 </div><!-- end container -->
			 </section>
			 <!-- end section -->


			 <!-- start section -->
			 <section class="section dark-background">
					 <div class="container">
							 <div class="row">
									 <div class="col-sm-4">
											 <div class="icon-boxes" style="padding:4px">
													 <div class="box-content">
														 <img src="{{ asset('local/public/themes/default/assets/core/img/aj/three-ss1.jpg') }} " alt="" width="99%" style="min-height:195px">
													 </div>
											 </div><!-- icon-box -->
									 </div><!-- end col -->
									 <div class="col-sm-4">
											 <div class="icon-boxes">
													 <div class="box-content">
														 <img src="{{ asset('local/public/themes/default/assets/core/img/aj/three-ss2.jpg') }}" alt="" width="99%" style="min-height:195px">
													 </div>
											 </div><!-- icon-box -->
									 </div><!-- end col -->

									 <div class="col-sm-4">
											 <div class="icon-boxes">
													 <div class="box-content">
														 <img src="{{ asset('local/public/themes/default/assets/core/img/aj/three-ss3.jpg') }} " alt="" width="99%" style="min-height:195px" >
													 </div>
											 </div><!-- icon-box -->
									 </div><!-- end col -->

							 </div><!-- end row -->
					 </div><!-- end container -->
			 </section>
			 <!-- end section -->


			 <!-- start section -->
			 <section class="section white-background">
					 <div class="container">
							 <div class="row">
									 <div class="col-sm-12">
											 <!-- Nav tabs -->
											 <ul class="nav nav-tabs style1" role="tablist">
													 <li role="presentation" class="active">
															 <a href="#featured" aria-controls="featured" role="tab" data-toggle="tab"><h6 class="text-uppercase">Trending Products</h6></a>
													 </li>

											 </ul><!-- nav-tabs -->

											 <!-- Tab panes -->
											 <div class="tab-content">
													 <div role="tabpanel" class="tab-pane fade in active" id="featured">
															 <div class="row column-4">
																 <?php

																	 foreach ($home_data->data->data[2]->card_data as $key => $value) {

																		 ?>
																		 <div class="col-sm-6 col-md-3">
																				<div class="thumbnail store style1">
																						<div class="header">
																								<div class="badges">

																										<span class="product-badge top right text-warning">
																												<i class="fa fa-star"></i>
																												<i class="fa fa-star"></i>
																												<i class="fa fa-star"></i>
																												<i class="fa fa-star"></i>
																												<i class="fa fa-star-half-o"></i>
																										</span>
																								</div>
																								<figure class="layer">
																										<a href="javascript:void(0);">
																											<img src="{{ $value->image}} " alt="{{$value->name}}">

																										</a>
																								</figure>
																								<div class="icons">

																										<a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																								</div>
																						</div>
																						<div class="caption">
																								<h6 class="regular"><a href="shop-single-product-v1.html">{{$value->name}}</a></h6>
																								<div class="price">

																										<span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i>{{$value->price}}</span>
																								</div>

																						</div><!-- end caption -->
																				</div><!-- end thumbnail -->
																		</div><!-- end col -->


																		 <?php
																	 }
																 ?>
															 </div><!-- end row -->
													 </div><!-- end tab -->
													 <div role="tabpanel" class="tab-pane fade" id="special">
															 <div class="row column-4">
																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <div class="badges">
																									 <span class="product-badge top left primary-background text-white semi-circle">Sale</span>
																									 <span class="product-badge top right text-warning">
																											 <i class="fa fa-star"></i>
																											 <i class="fa fa-star"></i>
																											 <i class="fa fa-star"></i>
																											 <i class="fa fa-star"></i>
																											 <i class="fa fa-star-half-o"></i>
																									 </span>
																							 </div>
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																										<img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">
																									 </a>
																							 </figure>
																							 <div class="icons">
																									 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <div class="badges">
																									 <span class="product-badge top right danger-background text-white semi-circle">-20%</span>
																							 </div>
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											 <img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">
																									 </a>
																							 </figure>
																							 <div class="icons">
																								 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <div class="badges">
																									 <span class="product-badge bottom left warning-background text-white semi-circle">Out of Stock</span>
																							 </div>
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											<img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">
																									 </a>
																							 </figure>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <div class="badges">
																									 <span class="product-badge bottom right info-background text-white semi-circle">New</span>
																							 </div>
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											<img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">
																									 </a>
																							 </figure>
																							 <div class="icons">
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											 <img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">
																									 </a>
																							 </figure>
																							 <div class="icons">
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											<img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">
																									 </a>
																							 </figure>
																							 <div class="icons">
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											 <img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">
																									 </a>
																							 </figure>
																							 <div class="icons">

																									 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											<img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">
																									 </a>
																							 </figure>
																							 <div class="icons">
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->
															 </div><!-- end row -->
													 </div><!-- end tab -->
													 <div role="tabpanel" class="tab-pane fade" id="bestsellers">
															 <div class="row column-4">
																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <div class="badges">
																									 <span class="product-badge top left primary-background text-white semi-circle">Sale</span>
																									 <span class="product-badge top right text-warning">
																											 <i class="fa fa-star"></i>
																											 <i class="fa fa-star"></i>
																											 <i class="fa fa-star"></i>
																											 <i class="fa fa-star"></i>
																											 <i class="fa fa-star-half-o"></i>
																									 </span>
																							 </div>
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											<img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">																									 																									 </a>
																							 </figure>
																							 <div class="icons">
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <div class="badges">
																									 <span class="product-badge top right danger-background text-white semi-circle">-20%</span>
																							 </div>
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											 <img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">
																									 </a>
																							 </figure>
																							 <div class="icons">
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <div class="badges">
																									 <span class="product-badge bottom left warning-background text-white semi-circle">Out of Stock</span>
																							 </div>
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											 <img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">

																									 </a>
																							 </figure>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <div class="badges">
																									 <span class="product-badge bottom right info-background text-white semi-circle">New</span>
																							 </div>
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											<img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">
																									 </a>
																							 </figure>
																							 <div class="icons">
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											 <img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">
																									 </a>
																							 </figure>
																							 <div class="icons">
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																										 <img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">

																									 </a>
																							 </figure>
																							 <div class="icons">
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											 <img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">
																									 </a>
																							 </figure>
																							 <div class="icons">
																								 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->

																	 <div class="col-sm-6 col-md-3">
																			 <div class="thumbnail store style1">
																					 <div class="header">
																							 <figure class="layer">
																									 <a href="javascript:void(0);">
																											 <img src="{{ asset('local/public/themes/default/assets/core/img/products/technology_03.jpg') }} " alt="">
																									 </a>
																							 </figure>
																							 <div class="icons">
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
																									 <a class="icon semi-circle" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
																							 </div>
																					 </div>
																					 <div class="caption">
																							 <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
																							 <div class="price">
																									 <small class="amount off"><i class="fa fa-inr" aria-hidden="true"></i> 68.99</small>
																									 <span class="amount text-primary"><i class="fa fa-inr" aria-hidden="true"></i> 59.99</span>
																							 </div>

																					 </div><!-- end caption -->
																			 </div><!-- end thumbnail -->
																	 </div><!-- end col -->
															 </div><!-- end row -->
													 </div><!-- end tab -->
											 </div><!-- end tab content -->
									 </div><!-- end col -->
							 </div><!-- end row -->

							 <hr class="spacer-10"/>


							 <div class="row" style="backgorund-color:#FFF;">
									 <div class="col-sm-4">
											 <div class="box-banner-img">
													 <figure>
															 <a href="javascript:void(0);">
																	 <img width="90%" src="{{ asset('local/public/themes/default/assets/core/img/banners/banner_04.jpg') }} " alt="App Shots" title="App Shots"/>


															 </a>
													 </figure>
											 </div><!-- end box-banner-img -->
									 </div><!-- end col -->
									 <div class="col-sm-8">
											 <div class="box-banner-img" style="padding:24px; margin-top:105px;">
													 <div class="">
														 <h2>Download Metalbaba App Now</h2><br>
														 <h5>Buy & Sell Your Products in Bulk Easily</h5><br>
														 <span><h5  style="color:grey;">All it takes is 30 seconds to Download.</h5></span>
													 </div>

													 <br>
													 <a href="https://play.google.com/store/apps/details?id=com.app.metalbaba" target="blank">
														 <img class="" src="{{ asset('local/public/themes/default/assets/core/img/google-play.png') }} " alt="Google Play" title="Google Play">
													 </a>
													 <a href="https://itunes.apple.com/us/app/metalbaba/id1116385170?mt=8" target="blank">
														 <img class="" src="{{ asset('local/public/themes/default/assets/core/img/app-store.png') }} " alt="Apple Store" title="Apple Store">
													 </a>

											 </div><!-- end box-banner-img -->
									 </div><!-- end col -->
							 </div><!-- end row -->

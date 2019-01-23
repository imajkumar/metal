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


$response = $client->request('POST', Config::get('ayra.apiList.HOME'), [
			 'json'    => [
				 'API_TOKEN' =>'',
				 'page' => '1'
		],
	 'handler' => $tapMiddleware($clientHandler)
]);
$home_data=json_decode($response->getBody()->getContents());

?>
<section class="section light-backgorund">
	<div class="container">
			<div class="row">
				<div class="col-md-2">
					<!-- aside -->
					<aside class="hsidepnl" style="width:199px;">
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

					<!-- aside -->
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-9">
							<!-- slide -->
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

							<!-- slide -->
						</div>
						<div class="col-md-3">
						  <!-- latest price -->
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
																					?>																																														<i class="fa fa-inr" aria-hidden="true"></i>
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

						  <!-- latest price -->

						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						 	<!-- tranding product -->
							<div class="rlshimar" style="margin-left:5px;">
                <h6>Trending Products</h6>
								<!-- swipper container -->
                <div class="swiper-container swiper-container-horizontal">
                    <div class="swiper-wrapper">

												<?php
												 foreach ($home_data->data->data[2]->card_data as $key => $value) {
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
													 								<div class="prh5 ng-binding">{{$value->detail}}</div>
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
						 	<!-- tranding product -->
						</div>

					</div>

				</div>
			</div>
	</div>
</section>
<!-- end section -->
<div class="container">


<!-- Recommended Products -->
<div class="row">
<div class="col-md-12">
	<div class="rlshimar">
	            <!-- ngIf: card.card_type == 7 --><div data-ng-if="card.card_type == 7" data-ng-show="card.card_data.length" class="ng-scope">
	                <div class="pd-common hslidru">
	                    <h2 class="ng-binding">Recommended Products</h2>
											<!-- swipper container -->
			                <div class="swiper-container swiper-container-horizontal">
			                    <div class="swiper-wrapper">

															<?php
															 foreach ($home_data->data->data[3]->card_data as $key => $value) {
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
																 								<div class="prh5 ng-binding">{{$value->detail}}</div>
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
<!-- Recommended Products -->


<!-- Trending Products -->
<div class="row">
<div class="col-md-12">
<div class="rlshimar">
					<!-- ngIf: card.card_type == 7 --><div data-ng-if="card.card_type == 7" data-ng-show="card.card_data.length" class="ng-scope">
							<div class="pd-common hslidru">
									<h2 class="ng-binding">Trending Products</h2>
									<!-- swipper container -->
									<div class="swiper-container swiper-container-horizontal">
											<div class="swiper-wrapper">

													<?php
													 foreach ($home_data->data->data[2]->card_data as $key => $value) {
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
																						<div class="prh5 ng-binding">{{$value->detail}}</div>
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

<!-- Trending Products -->
<!-- post resume -->
<div class="row">
	<div class="col-md-12">
		<div class="rlshimar">
            <!-- ngIf: card.card_type == 5 --><div data-ng-if="card.card_type == 5" data-ng-show="card.card_data.length" class="ng-scope">
                <!-- ngRepeat: buylead in card.card_data --><div class="uniqadd top-spc3 ng-scope" data-ng-repeat="buylead in card.card_data">
                    <a href="#" data-ng-click="placeBuylead();">
                        <div afkl-lazy-image="http://metalbaba.com/images/post-banner.jpg" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: &quot;Banner&quot;}, {&quot;alt&quot;: &quot;Banner&quot;}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Banner" alt="Banner" class="optional-image-class afkl-lazy-image" src="http://metalbaba.local/images/post-banner.jpg"></div>
                    </a>
                </div><!-- end ngRepeat: buylead in card.card_data -->
            </div><!-- end ngIf: card.card_type == 5 -->
        </div>

	</div>
</div>
<!-- post resume -->
<!-- there col banner -->
<div class="row">
	<div class="col-12">
		<div class="rlshimar">
            <!-- ngIf: card.card_type == 1 --><div data-ng-if="card.card_type == 1" data-ng-show="card.card_data.length" class="ng-scope">
                <div class="multiadd top-spc3">
                    <!--<div class="multiaddin uniqfade" ng-repeat="image in card.card_data">-->
                    <div class="multiaddin uniqfade">
                        <img src="http://metalbaba.com/images/three-ss1.jpg" alt="image" title="">
                    </div>
                    <div class="multiaddin uniqfade">
                        <img src="http://metalbaba.com/images/three-ss2.jpg" alt="image" title="">
                    </div>
                    <div class="multiaddin uniqfade">
                        <a href="/enquiry-buylead-list">
                            <img src="http://metalbaba.com/images/three-ss3.jpg" alt="image" title="">
                        </a>
                    </div>
                </div>
            </div><!-- end ngIf: card.card_type == 1 -->
        </div>

	</div>
</div>
<!-- there col banner -->

<!-- make in india -->
<div class="row">
	<div class="col-md-12">
		<div class="rlshimar">
		            <!-- ngIf: card.card_type == 2 --><div data-ng-if="card.card_type == 2" ng-show="card.card_data.length" class="ng-scope">
		                <div class="pd-common bxcate top-spc3">
		                    <div class="bxcatel">
		                        <div class="bxcatel1">
		                            <h4 class="ng-binding">Stainless Steel</h4>
		                            <ul>
		                                <!-- ngRepeat: category in card.card_data --><li data-ng-repeat="category in card.card_data" class="ng-scope">
		                                    <a property="url" href="/product-list/2/Stainless-Steel" target="_blank" class="ng-binding">Stainless Steel</a>
		                                </li><!-- end ngRepeat: category in card.card_data --><li data-ng-repeat="category in card.card_data" class="ng-scope">
		                                    <a property="url" href="/product-list/12/Metal-Scrap" target="_blank" class="ng-binding">Metal Scrap</a>
		                                </li><!-- end ngRepeat: category in card.card_data --><li data-ng-repeat="category in card.card_data" class="ng-scope">
		                                    <a property="url" href="/product-list/23/Metal-Finished-Goods" target="_blank" class="ng-binding">Metal Finished Goods</a>
		                                </li><!-- end ngRepeat: category in card.card_data -->
		                            </ul>
		                        </div>
		                        <div class="bxcatel2 uniqfade">
		                            <a property="url" href="#">
		                                <div afkl-lazy-image="http://metalbaba.com/images/sscategory1.jpg" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: &quot;Stainless Steel Category&quot;}, {&quot;alt&quot;: &quot;SS Category&quot;}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Category" alt="SS Category"
																			class="optional-image-class afkl-lazy-image" src="http://metalbaba.com/images/sscategory1.jpg"></div>
		                            </a>
		                        </div>
		                    </div>
		                    <div class="bxcater">
		                        <div class="bxcater1 uniqfade">
		                            <a href="#">
		                                <div afkl-lazy-image="http://metalbaba.com/images/sscategory2.jpg" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: &quot;Stainless Steel Category&quot;}, {&quot;alt&quot;: &quot;SS Category&quot;}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Category" alt="SS Category"
																			 class="optional-image-class afkl-lazy-image" src="http://metalbaba.com/images/sscategory2.jpg"></div>
		                            </a>
		                        </div>
		                        <div class="bxcater1 uniqfade">
		                            <a href="#">
		                                <div afkl-lazy-image="http://metalbaba.com/images/sscategory3.jpg" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: &quot;Stainless Steel Category&quot;}, {&quot;alt&quot;: &quot;SS Category&quot;}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Category" alt="SS Category"
																			class="optional-image-class afkl-lazy-image" src="http://metalbaba.com/images/sscategory3.jpg"></div>
		                            </a>
		                        </div>
		                    </div>
		                </div>
		            </div><!-- end ngIf: card.card_type == 2 -->
		        </div>
	</div>
</div>

<!-- make in india -->
<!-- More items to consider -->
<div class="row">
	<div class="col-md-12">
		<div class="rlshimar">
		            <!-- ngIf: card.card_type == 7 --><div data-ng-if="card.card_type == 7" data-ng-show="card.card_data.length" class="ng-scope">
		                <div class="pd-common hslidru">
		                    <h2 class="ng-binding">More items to consider</h2>
												<!-- swipper container -->
 		 									<div class="swiper-container swiper-container-horizontal">
 		 											<div class="swiper-wrapper">

 		 													<?php

 		 													 foreach ($home_data->data->data[9]->card_data as $key => $value) {
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
 		 																						<div class="prh5 ng-binding">{{$value->detail}}</div>
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

<!-- More items to consider -->
<!-- You Maybe Interested in -->
<div class="row">
	<div class="col-md-12">
		<div class="rlshimar">
            <!-- ngIf: card.card_type == 6 --><div data-ng-if="card.card_type == 6" data-ng-show="card.card_data.length" class="ng-scope">
                <div class="pd-common hslidru">
                    <h2 class="ng-binding">You Maybe Interested in</h2>
										<!-- swipper container -->
									<div class="swiper-container swiper-container-horizontal">
											<div class="swiper-wrapper">

													<?php

													 foreach ($home_data->data->data[11]->card_data as $key => $value) {
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
																						<div class="prh5 ng-binding">{{$value->detail}}</div>
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
            </div><!-- end ngIf: card.card_type == 6 -->
        </div>

	</div>
</div>
<!-- You Maybe Interested in -->
<!-- single product banner -->
<div class="row">
	<div class="col-md-12">
		<div class="rlshimar">
            <!-- ngIf: card.card_type == 8 --><div data-ng-if="card.card_type == 8" data-ng-show="card.card_data.length" class="ng-scope">
                <!-- Single Product -->
                <!-- ngRepeat: product in card.card_data --><div class="twoaddin uniqfade top-spc2 ng-scope" data-ng-repeat="product in card.card_data">
                    <div afkl-lazy-image="http://metalbaba.com/images/two-ss1.jpg" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: &quot;Stainless Steel Sheet&quot;}, {&quot;alt&quot;: &quot;Stainless Steel Sheet&quot;}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Sheet" alt="Stainless Steel Sheet"
											class="optional-image-class afkl-lazy-image" src="http://metalbaba.com/images/two-ss1.jpg"></div>
                </div><!-- end ngRepeat: product in card.card_data -->
                <!-- ngRepeat: product in card.card_data --><div class="twoaddin1 uniqfade top-spc2 ng-scope" data-ng-repeat="product in card.card_data">
                    <div afkl-lazy-image="http://metalbaba.com/images/two-ss2.jpg" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: &quot;Stainless Steel Flat&quot;}, {&quot;alt&quot;: &quot;Stainless Steel Flat&quot;}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Flat" alt="Stainless Steel Flat"
											 class="optional-image-class afkl-lazy-image" src="http://metalbaba.com/images/two-ss2.jpg"></div>
                </div><!-- end ngRepeat: product in card.card_data -->
            </div><!-- end ngIf: card.card_type == 8 -->
        </div>
	</div>
</div>
<!-- single product banner -->

<!-- app download -->
<div class="row">
	<div class="col-md-12">
		<div class="rlshimar ng-scope">
    <div class="appmain top-spc5">
        <div class="appmainbx">
            <div class="appleft">
                <img src="http://metalbaba.com/images/app-shots.png" alt="App Shots" title="App Shots">
            </div>
            <div class="appright">
                <h2>Download Metalbaba App Now</h2>
                <h3>Buy &amp; Sell Your Products in Bulk Easily</h3>
                <h4>All it takes is 30 seconds to Download.</h4>
                <div class="clr"></div>
                <a href="https://play.google.com/store/apps/details?id=com.app.metalbaba" target="blank">
                    <img class="apprightbtn" src="http://metalbaba.com/images/google-play.png" alt="Google Play" title="Google Play">
                </a>
                <a href="https://itunes.apple.com/us/app/metalbaba/id1116385170?mt=8" target="blank">
                    <img class="apprightbtn" src="http://metalbaba.com/images/app-store.png" alt="Apple Store" title="Apple Store">
                </a>
            </div>
        </div>
    </div>
</div>
	</div>
</div>
<!-- app download -->
</div>  <!--container end-->

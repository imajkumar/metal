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
							<div class="rlshimar">
                <h4>Trending Products</h4>
                <div class="swiper-container swiper-container-horizontal">
                    <div class="swiper-wrapper">
                        <!-- ngRepeat: product in trending_products --><div class="swiper-slide col-item ng-scope swiper-slide-active" data-ng-repeat="product in trending_products" style="width: 229.111px;">
                            <a data-ng-href="/product-detail/58/Stainless-Steel-Circle-201-2B-AOD-0-27mm" title=".." target="_blank" href="/product-detail/58/Stainless-Steel-Circle-201-2B-AOD-0-27mm">
                                <div class="photo">
                                    <img data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-2012B-AOD-027mm76204" alt="Stainless Steel Circle 201/2B AOD 0.27mm" title="Stainless Steel Circle 201/2B AOD 0.27mm" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-2012B-AOD-027mm76204">
                                </div>
                                <div class="info">
                                    <div class="price">
                                        <div class="prh4 ng-binding">Stainless Steel Circle 201/2B AOD 0.27</div>
                                        <div class="prh5 ng-binding">201 0.27 mm 2B 6 - 17 Inch</div>
                                        <div class="prh3 price-text-color ng-binding">
                                            <!-- ngIf: product.is_international == 1 -->
                                            <!-- ngIf: product.is_international == 0 --><i class="fa fa-inr ng-scope" ng-if="product.is_international == 0"></i><!-- end ngIf: product.is_international == 0 -->
                                            126.00/Kg
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div><!-- end ngRepeat: product in trending_products --><div class="swiper-slide col-item ng-scope swiper-slide-next" data-ng-repeat="product in trending_products" style="width: 229.111px;">
                            <a data-ng-href="/product-detail/66/Stainless-Steel-Circle-201-2B-Induction-0-21mm" title=".." target="_blank" href="/product-detail/66/Stainless-Steel-Circle-201-2B-Induction-0-21mm">
                                <div class="photo">
                                    <img data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-2012B-Induction-021mm70430" alt="Stainless Steel Circle 201/2B Induction 0.21mm" title="Stainless Steel Circle 201/2B Induction 0.21mm" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-2012B-Induction-021mm70430">
                                </div>
                                <div class="info">
                                    <div class="price">
                                        <div class="prh4 ng-binding">Stainless Steel Circle 201/2B Inductio</div>
                                        <div class="prh5 ng-binding">201 0.21 mm 2B 4.5 - 21 Inch Induction</div>
                                        <div class="prh3 price-text-color ng-binding">
                                            <!-- ngIf: product.is_international == 1 -->
                                            <!-- ngIf: product.is_international == 0 --><i class="fa fa-inr ng-scope" ng-if="product.is_international == 0"></i><!-- end ngIf: product.is_international == 0 -->
                                            134.00/Kg
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div><!-- end ngRepeat: product in trending_products --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in trending_products" style="width: 229.111px;">
                            <a data-ng-href="/product-detail/67/Stainless-Steel-Coil-AOD-201-2B-0-27mm" title=".." target="_blank" href="/product-detail/67/Stainless-Steel-Coil-AOD-201-2B-0-27mm">
                                <div class="photo">
                                    <img data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-AOD-2012B-027mm43802" alt="Stainless Steel Coil AOD 201/2B 0.27mm" title="Stainless Steel Coil AOD 201/2B 0.27mm" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-AOD-2012B-027mm43802">
                                </div>
                                <div class="info">
                                    <div class="price">
                                        <div class="prh4 ng-binding">Stainless Steel Coil AOD 201/2B 0.27mm</div>
                                        <div class="prh5 ng-binding">201 0.27mm 2B AOD China</div>
                                        <div class="prh3 price-text-color ng-binding">
                                            <!-- ngIf: product.is_international == 1 -->
                                            <!-- ngIf: product.is_international == 0 --><i class="fa fa-inr ng-scope" ng-if="product.is_international == 0"></i><!-- end ngIf: product.is_international == 0 -->
                                            110.00/Kg
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div><!-- end ngRepeat: product in trending_products --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in trending_products" style="width: 229.111px;">
                            <a data-ng-href="/product-detail/10/Stainless-Steel-Coil-AOD-Loose-201-2B-0-5mm" title=".." target="_blank" href="/product-detail/10/Stainless-Steel-Coil-AOD-Loose-201-2B-0-5mm">
                                <div class="photo">
                                    <img data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-AOD-Loose-2012B-05mm29350" alt="Stainless Steel Coil AOD Loose 201/2B 0.5mm" title="Stainless Steel Coil AOD Loose 201/2B 0.5mm" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-AOD-Loose-2012B-05mm29350">
                                </div>
                                <div class="info">
                                    <div class="price">
                                        <div class="prh4 ng-binding">Stainless Steel Coil AOD Loose 201/2B </div>
                                        <div class="prh5 ng-binding">201 0.50mm 2B</div>
                                        <div class="prh3 price-text-color ng-binding">
                                            <!-- ngIf: product.is_international == 1 -->
                                            <!-- ngIf: product.is_international == 0 --><i class="fa fa-inr ng-scope" ng-if="product.is_international == 0"></i><!-- end ngIf: product.is_international == 0 -->
                                            135.00/Kg
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div><!-- end ngRepeat: product in trending_products --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in trending_products" style="width: 229.111px;">
                            <a data-ng-href="/product-detail/2937/Stainless-Steel-Scrap-304" title=".." target="_blank" href="/product-detail/2937/Stainless-Steel-Scrap-304">
                                <div class="photo">
                                    <img data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Scrap-30453594" alt="Stainless Steel Scrap 304" title="Stainless Steel Scrap 304" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Scrap-30453594">
                                </div>
                                <div class="info">
                                    <div class="price">
                                        <div class="prh4 ng-binding">Stainless Steel Scrap 304</div>
                                        <div class="prh5 ng-binding">304  (Ni: 8.0% ,Cr: 18.0%) Indian</div>
                                        <div class="prh3 price-text-color ng-binding">
                                            <!-- ngIf: product.is_international == 1 -->
                                            <!-- ngIf: product.is_international == 0 --><i class="fa fa-inr ng-scope" ng-if="product.is_international == 0"></i><!-- end ngIf: product.is_international == 0 -->
                                            93.00/Ton
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div><!-- end ngRepeat: product in trending_products --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in trending_products" style="width: 229.111px;">
                            <a data-ng-href="/product-detail/2851/Stainless-Steel-Pipes---Grade---202---0-60mm" title=".." target="_blank" href="/product-detail/2851/Stainless-Steel-Pipes---Grade---202---0-60mm">
                                <div class="photo">
                                    <img data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes--Grade---202--060mm87120" alt="Stainless Steel Pipes , Grade - 202 , 0.60mm" title="Stainless Steel Pipes , Grade - 202 , 0.60mm" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes--Grade---202--060mm87120">
                                </div>
                                <div class="info">
                                    <div class="price">
                                        <div class="prh4 ng-binding">Stainless Steel Pipes , Grade - 202 , </div>
                                        <div class="prh5 ng-binding">202 0.60mm Welded/ Polished Sagar</div>
                                        <div class="prh3 price-text-color ng-binding">
                                            <!-- ngIf: product.is_international == 1 -->
                                            <!-- ngIf: product.is_international == 0 --><i class="fa fa-inr ng-scope" ng-if="product.is_international == 0"></i><!-- end ngIf: product.is_international == 0 -->
                                            145.00/Kg
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div><!-- end ngRepeat: product in trending_products --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in trending_products" style="width: 229.111px;">
                            <a data-ng-href="/product-detail/2914/Stainless-Steel-Soup-Plate" title=".." target="_blank" href="/product-detail/2914/Stainless-Steel-Soup-Plate">
                                <div class="photo">
                                    <img data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Soup-Plate45214" alt="Stainless Steel Soup Plate" title="Stainless Steel Soup Plate" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Soup-Plate45214">
                                </div>
                                <div class="info">
                                    <div class="price">
                                        <div class="prh4 ng-binding">Stainless Steel Soup Plate</div>
                                        <div class="prh5 ng-binding">8 - 11cm stainless steel utensils Anjali Steel Soup Plate</div>
                                        <div class="prh3 price-text-color ng-binding">
                                            <!-- ngIf: product.is_international == 1 -->
                                            <!-- ngIf: product.is_international == 0 --><i class="fa fa-inr ng-scope" ng-if="product.is_international == 0"></i><!-- end ngIf: product.is_international == 0 -->
                                            250.00/Pc
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div><!-- end ngRepeat: product in trending_products --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in trending_products" style="width: 229.111px;">
                            <a data-ng-href="/product-detail/1373/Stainless-Steel-Sheet-JT-1-0mm" title=".." target="_blank" href="/product-detail/1373/Stainless-Steel-Sheet-JT-1-0mm">
                                <div class="photo">
                                    <img data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Sheet-JT-10mm74366" alt="Stainless Steel Sheet JT 1.0mm" title="Stainless Steel Sheet JT 1.0mm" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Sheet-JT-10mm74366">
                                </div>
                                <div class="info">
                                    <div class="price">
                                        <div class="prh4 ng-binding">Stainless Steel Sheet JT 1.0mm</div>
                                        <div class="prh5 ng-binding">JT (Ni 02-0.5% : Cu 0.5-0.10% : Cr 14-16% : Mn 9.0-11.0% : C 0.12%max : p 0.08%max : S 0.015%max : Si 0.075%max : N 0.1-0.2%) 1.0mm 1000 , 1250 , 1500 mm</div>
                                        <div class="prh3 price-text-color ng-binding">
                                            <!-- ngIf: product.is_international == 1 -->
                                            <!-- ngIf: product.is_international == 0 --><i class="fa fa-inr ng-scope" ng-if="product.is_international == 0"></i><!-- end ngIf: product.is_international == 0 -->
                                            122.00/Kg
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div><!-- end ngRepeat: product in trending_products --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in trending_products" style="width: 229.111px;">
                            <a data-ng-href="/product-detail/2706/Stainless-Steel-Design-Sheets---304---2-0mm" title=".." target="_blank" href="/product-detail/2706/Stainless-Steel-Design-Sheets---304---2-0mm">
                                <div class="photo">
                                    <img data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Design-Sheets--304--20mm76301" alt="Stainless Steel Design Sheets , 304 , 2.0mm" title="Stainless Steel Design Sheets , 304 , 2.0mm" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Design-Sheets--304--20mm76301">
                                </div>
                                <div class="info">
                                    <div class="price">
                                        <div class="prh4 ng-binding">Stainless Steel Design Sheets , 304 , </div>
                                        <div class="prh5 ng-binding">304  (Ni: 8.0% ,Cr: 18.0%) 2.0mm</div>
                                        <div class="prh3 price-text-color ng-binding">
                                            <!-- ngIf: product.is_international == 1 -->
                                            <!-- ngIf: product.is_international == 0 --><i class="fa fa-inr ng-scope" ng-if="product.is_international == 0"></i><!-- end ngIf: product.is_international == 0 -->
                                            15000.00/Pc
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div><!-- end ngRepeat: product in trending_products --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in trending_products" style="width: 229.111px;">
                            <a data-ng-href="/product-detail/1313/Stainless-Steel-Patta-Patti-J8-1-0mm" title=".." target="_blank" href="/product-detail/1313/Stainless-Steel-Patta-Patti-J8-1-0mm">
                                <div class="photo">
                                    <img data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Patta-Patti-J8-10mm84563" alt="Stainless Steel Patta-Patti J8 1.0mm" title="Stainless Steel Patta-Patti J8 1.0mm" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Patta-Patti-J8-10mm84563">
                                </div>
                                <div class="info">
                                    <div class="price">
                                        <div class="prh4 ng-binding">Stainless Steel Patta-Patti J8 1.0mm</div>
                                        <div class="prh5 ng-binding">J8 1.0mm</div>
                                        <div class="prh3 price-text-color ng-binding">
                                            <!-- ngIf: product.is_international == 1 -->
                                            <!-- ngIf: product.is_international == 0 --><i class="fa fa-inr ng-scope" ng-if="product.is_international == 0"></i><!-- end ngIf: product.is_international == 0 -->
                                            96.00/Kg
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div><!-- end ngRepeat: product in trending_products -->
                    </div>
                    <div class="swiperl">
                        <div class="swiper-button-next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="swiperr">
                        <div class="swiper-button-prev swiper-button-disabled">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
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
	                    <div class="swiper-container swiper-container-horizontal">
	                        <div class="swiper-wrapper">
	                            <!-- ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope swiper-slide-active" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
	                                <a href="/product-detail/2219/Stainless-Steel-Plain-Dinner-set--51-Pcs-" title="Stainless Steel Plain Dinner set (51 Pcs)" target="_blank">
	                                    <div class="photo">
	                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Plain-Dinner-set-51-Pcs73118" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Plain Dinner set (51 Pcs)" alt="Stainless Steel Plain Dinner set (51 Pcs)" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Plain-Dinner-set-51-Pcs73118"></div>

	                                    </div>
	                                    <div class="info">
	                                        <div class="price">
	                                            <div class="prh4 ng-binding">Stainless Steel Plain Dinner set (51 P</div>
	                                            <div class="prh5 ng-binding">Stainless Steel Garuda Dinner set</div>
	                                            <div class="prh3 price-text-color ng-binding">
	                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
	                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
	                                                250.00/Kg
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope swiper-slide-next" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
	                                <a href="/product-detail/2594/Cookware" title="Cookware" target="_blank">
	                                    <div class="photo">
	                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Cookware66448" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Cookware" alt="Cookware" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Cookware66448"></div>

	                                    </div>
	                                    <div class="info">
	                                        <div class="price">
	                                            <div class="prh4 ng-binding">Cookware</div>
	                                            <div class="prh5 ng-binding">12*15 ss 202 colors Induction and Gas</div>
	                                            <div class="prh3 price-text-color ng-binding">
	                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
	                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
	                                                175.00/Kg
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
	                                <a href="/product-detail/930/Stainless-Steel-Pipes-Indian-304-0-90mm" title="Stainless Steel Pipes Indian 304 0.90mm" target="_blank">
	                                    <div class="photo">
	                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes-Indian-304-090mm48214" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Pipes Indian 304 0.90mm" alt="Stainless Steel Pipes Indian 304 0.90mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes-Indian-304-090mm48214"></div>

	                                    </div>
	                                    <div class="info">
	                                        <div class="price">
	                                            <div class="prh4 ng-binding">Stainless Steel Pipes Indian 304 0.90m</div>
	                                            <div class="prh5 ng-binding">304 (Ni: 8.0% ,Cr: 18.0%) 0.90mm 05 - 21 Inch</div>
	                                            <div class="prh3 price-text-color ng-binding">
	                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
	                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
	                                                185.00/Kg
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
	                                <a href="/product-detail/663/Stainless-Steel-Round-Bar-Imported-304" title="Stainless Steel Round Bar Imported 304" target="_blank">
	                                    <div class="photo">
	                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Round-Bar-Imported-30476571" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Round Bar Imported 304" alt="Stainless Steel Round Bar Imported 304" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Round-Bar-Imported-30476571"></div>

	                                    </div>
	                                    <div class="info">
	                                        <div class="price">
	                                            <div class="prh4 ng-binding">Stainless Steel Round Bar Imported 304</div>
	                                            <div class="prh5 ng-binding">304  (Ni: 8.0% ,Cr: 18.0%) All Sizes</div>
	                                            <div class="prh3 price-text-color ng-binding">
	                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
	                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
	                                                170.00/Kg
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
	                                <a href="/product-detail/330/Stainless-Steel-Round-Bar-Imported--Monel-400" title="Stainless Steel Round Bar Imported	 Monel-400" target="_blank">
	                                    <div class="photo">
	                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Round-Bar-Imported-Monel-40056586" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Round Bar Imported	 Monel-400" alt="Stainless Steel Round Bar Imported	 Monel-400" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Round-Bar-Imported-Monel-40056586"></div>

	                                    </div>
	                                    <div class="info">
	                                        <div class="price">
	                                            <div class="prh4 ng-binding">Stainless Steel Round Bar Imported	 Mo</div>
	                                            <div class="prh5 ng-binding">Monel-400 (Ni 63-70% : Cu 25-37% : Mn 2%) 12 - 120mm Europe</div>
	                                            <div class="prh3 price-text-color ng-binding">
	                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
	                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
	                                                2200.00/Kg
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
	                                <a href="/product-detail/444/Stainless-Steel-Pipes--304-1-50mm" title="Stainless Steel Pipes  304 1.50mm" target="_blank">
	                                    <div class="photo">
	                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes--304-150mm16955" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Pipes  304 1.50mm" alt="Stainless Steel Pipes  304 1.50mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes--304-150mm16955"></div>

	                                    </div>
	                                    <div class="info">
	                                        <div class="price">
	                                            <div class="prh4 ng-binding">Stainless Steel Pipes  304 1.50mm</div>
	                                            <div class="prh5 ng-binding">304  (Ni: 8.0% ,Cr: 18.0%) 1.50 Indian</div>
	                                            <div class="prh3 price-text-color ng-binding">
	                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
	                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
	                                                160.00/Kg
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
	                                <a href="/product-detail/944/Stainless-Steel-Pipes-304-1-20mm" title="Stainless Steel Pipes 304 1.20mm" target="_blank">
	                                    <div class="photo">
	                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes-304-120mm99368" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Pipes 304 1.20mm" alt="Stainless Steel Pipes 304 1.20mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes-304-120mm99368"></div>

	                                    </div>
	                                    <div class="info">
	                                        <div class="price">
	                                            <div class="prh4 ng-binding">Stainless Steel Pipes 304 1.20mm</div>
	                                            <div class="prh5 ng-binding">304  (Ni: 8.0% ,Cr: 18.0%) 1.20mm 05 - 20 Inch</div>
	                                            <div class="prh3 price-text-color ng-binding">
	                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
	                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
	                                                182.00/Kg
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
	                                <a href="/product-detail/2523/Stainless-Steel-Coil-304-2-0mm" title="Stainless Steel Coil 304 2.0mm" target="_blank">
	                                    <div class="photo">
	                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-304-20mm70345" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Coil 304 2.0mm" alt="Stainless Steel Coil 304 2.0mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-304-20mm70345"></div>

	                                    </div>
	                                    <div class="info">
	                                        <div class="price">
	                                            <div class="prh4 ng-binding">Stainless Steel Coil 304 2.0mm</div>
	                                            <div class="prh5 ng-binding">304  (Ni: 8.0% ,Cr: 18.0%) 2.0mm All Size</div>
	                                            <div class="prh3 price-text-color ng-binding">
	                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
	                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
	                                                200.00/Kg
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
	                                <a href="/product-detail/156/Stainless-Steel-Pipes-Indian-304-1-5mm" title="Stainless Steel Pipes Indian 304/1.5mm" target="_blank">
	                                    <div class="photo">
	                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes-Indian-30415mm45432" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Pipes Indian 304/1.5mm" alt="Stainless Steel Pipes Indian 304/1.5mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes-Indian-30415mm45432"></div>

	                                    </div>
	                                    <div class="info">
	                                        <div class="price">
	                                            <div class="prh4 ng-binding">Stainless Steel Pipes Indian 304/1.5mm</div>
	                                            <div class="prh5 ng-binding">304 1.5mm 1.75 - 25.4 Inch</div>
	                                            <div class="prh3 price-text-color ng-binding">
	                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
	                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
	                                                181.00/Kg
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
	                                <a href="/product-detail/533/Stainless-Steel-Pipes-Indian-304-Grade-0-90mm" title="Stainless Steel Pipes Indian 304 Grade 0.90mm" target="_blank">
	                                    <div class="photo">
	                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes-Indian-304-Grade-090mm67672" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Pipes Indian 304 Grade 0.90mm" alt="Stainless Steel Pipes Indian 304 Grade 0.90mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes-Indian-304-Grade-090mm67672"></div>

	                                    </div>
	                                    <div class="info">
	                                        <div class="price">
	                                            <div class="prh4 ng-binding">Stainless Steel Pipes Indian 304 Grade</div>
	                                            <div class="prh5 ng-binding">304  (Ni: 8.0% ,Cr: 18.0%) 0.90mm 2 , 4 , 6 , 8 , 10 , 12 , 16 , 25.4 Inch</div>
	                                            <div class="prh3 price-text-color ng-binding">
	                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
	                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
	                                                110.00/Kg
	                                            </div>
	                                        </div>
	                                    </div>
	                                </a>
	                            </div><!-- end ngRepeat: product in card.card_data -->
	                        </div>
	                        <div class="swiperl">
	                            <div class="swiper-button-next">
	                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
	                            </div>
	                        </div>
	                        <div class="swiperr">
	                            <div class="swiper-button-prev swiper-button-disabled">
	                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
	                            </div>
	                        </div>
	                    </div>
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
									<div class="swiper-container swiper-container-horizontal">
											<div class="swiper-wrapper">
													<!-- ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope swiper-slide-active" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
															<a href="/product-detail/2996/Stainless-Steel-Colour-Sheet---Grade-304---0-80mm--Blue-" title="Stainless Steel Colour Sheet , Grade 304 , 0.80mm (Blue)" target="_blank">
																	<div class="photo">
																			<div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Colour-Sheet--Grade-304--080mm-Blue77044" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Colour Sheet , Grade 304 , 0.80mm (Blue)" alt="Stainless Steel Colour Sheet , Grade 304 , 0.80mm (Blue)" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Colour-Sheet--Grade-304--080mm-Blue77044"></div>

																	</div>
																	<div class="info">
																			<div class="price">
																					<div class="prh4 ng-binding">Stainless Steel Colour Sheet , Grade 3</div>
																					<div class="prh5 ng-binding"></div>
																					<div class="prh3 price-text-color ng-binding">
																							<i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
																							<i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
																							8000.00/Pc
																					</div>
																			</div>
																	</div>
															</a>
													</div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope swiper-slide-next" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
															<a href="/product-detail/3014/Stainless-Steel-Circle-202-0-27mm" title="Stainless Steel Circle 202 0.27mm" target="_blank">
																	<div class="photo">
																			<div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-202-027mm72854" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Circle 202 0.27mm" alt="Stainless Steel Circle 202 0.27mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-202-027mm72854"></div>

																	</div>
																	<div class="info">
																			<div class="price">
																					<div class="prh4 ng-binding">Stainless Steel Circle 202 0.27mm</div>
																					<div class="prh5 ng-binding">202 0.27mm All Size</div>
																					<div class="prh3 price-text-color ng-binding">
																							<i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
																							<i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
																							147.00/Kg
																					</div>
																			</div>
																	</div>
															</a>
													</div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
															<a href="/product-detail/183/Stainless-Steel-Coil-Indian-JSL-304-1-50-mm" title="Stainless Steel Coil Indian	JSL 304 1.50 mm" target="_blank">
																	<div class="photo">
																			<div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-IndianJSL-304-150-mm49551" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Coil Indian	JSL 304 1.50 mm" alt="Stainless Steel Coil Indian	JSL 304 1.50 mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-IndianJSL-304-150-mm49551"></div>

																	</div>
																	<div class="info">
																			<div class="price">
																					<div class="prh4 ng-binding">Stainless Steel Coil Indian	JSL 304 1.</div>
																					<div class="prh5 ng-binding">304 1.50 JSL 1000 , 1250 , 1500 mm</div>
																					<div class="prh3 price-text-color ng-binding">
																							<i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
																							<i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
																							165.00/Kg
																					</div>
																			</div>
																	</div>
															</a>
													</div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
															<a href="/product-detail/2940/Stainless-Steel-Circle-304-2-0mm" title="Stainless Steel Circle 304 2.0mm" target="_blank">
																	<div class="photo">
																			<div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-304-20mm85795" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Circle 304 2.0mm" alt="Stainless Steel Circle 304 2.0mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-304-20mm85795"></div>

																	</div>
																	<div class="info">
																			<div class="price">
																					<div class="prh4 ng-binding">Stainless Steel Circle 304 2.0mm</div>
																					<div class="prh5 ng-binding">304  (Ni: 8.0% ,Cr: 18.0%) 2.0mm 2 inch</div>
																					<div class="prh3 price-text-color ng-binding">
																							<i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
																							<i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
																							187.00/Kg
																					</div>
																			</div>
																	</div>
															</a>
													</div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
															<a href="/product-detail/1357/Stainless-Steel-Pipes-Indian-202-1-60mm" title="Stainless Steel Pipes Indian 202 1.60mm" target="_blank">
																	<div class="photo">
																			<div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes-Indian-202-160mm27470" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Pipes Indian 202 1.60mm" alt="Stainless Steel Pipes Indian 202 1.60mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes-Indian-202-160mm27470"></div>

																	</div>
																	<div class="info">
																			<div class="price">
																					<div class="prh4 ng-binding">Stainless Steel Pipes Indian 202 1.60m</div>
																					<div class="prh5 ng-binding">202 (Ni 0.6 % : Cu 1%) 1.60mm 1 - 20 Inch</div>
																					<div class="prh3 price-text-color ng-binding">
																							<i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
																							<i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
																							116.00/Kg
																					</div>
																			</div>
																	</div>
															</a>
													</div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
															<a href="/product-detail/569/Stainless-Steel-Coil-AOD-Loose-304-2B-1-0mm" title="Stainless Steel Coil AOD Loose 304/2B 1.0mm" target="_blank">
																	<div class="photo">

																			<div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-AOD-Loose-3042B-10mm70400" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Coil AOD Loose 304/2B 1.0mm" alt="Stainless Steel Coil AOD Loose 304/2B 1.0mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-AOD-Loose-3042B-10mm70400"></div>
																	</div>
																	<div class="info">
																			<div class="price">
																					<div class="prh4 ng-binding">Stainless Steel Coil AOD Loose 304/2B </div>
																					<div class="prh5 ng-binding">304  (Ni: 8.0% ,Cr: 18.0%) 1.0mm 2B All Sizes</div>
																					<div class="prh3 price-text-color ng-binding">
																							<i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
																							<i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
																							180.00/Kg
																					</div>
																			</div>
																	</div>
															</a>
													</div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
															<a href="/product-detail/68/Stainless-Steel-Circle-201-2B-AOD-0-21mm" title="Stainless Steel Circle 201/2B AOD 0.21mm" target="_blank">
																	<div class="photo">
																			<div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-2012B-AOD-021mm61757" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Circle 201/2B AOD 0.21mm" alt="Stainless Steel Circle 201/2B AOD 0.21mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-2012B-AOD-021mm61757"></div>

																	</div>
																	<div class="info">
																			<div class="price">
																					<div class="prh4 ng-binding">Stainless Steel Circle 201/2B AOD 0.21</div>
																					<div class="prh5 ng-binding">201 0.21mm 2B 5 - 17 Inch AOD China</div>
																					<div class="prh3 price-text-color ng-binding">
																							<i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
																							<i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
																							136.00/Kg
																					</div>
																			</div>
																	</div>
															</a>
													</div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
															<a href="/product-detail/1866/Stainless-Steel-Coil-J4-Grade" title="Stainless Steel Coil J4 Grade" target="_blank">
																	<div class="photo">
																			<div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-J4-Grade16619" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Coil J4 Grade" alt="Stainless Steel Coil J4 Grade" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-J4-Grade16619"></div>

																	</div>
																	<div class="info">
																			<div class="price">
																					<div class="prh4 ng-binding">Stainless Steel Coil J4 Grade</div>
																					<div class="prh5 ng-binding">J4 All Thickness All Sizes</div>
																					<div class="prh3 price-text-color ng-binding">
																							<i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
																							<i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
																							150.00/Kg
																					</div>
																			</div>
																	</div>
															</a>
													</div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
															<a href="/product-detail/1995/Kitchen-Basket" title="Kitchen Basket" target="_blank">
																	<div class="photo">
																			<div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Kitchen-Basket63683" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Kitchen Basket" alt="Kitchen Basket" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Kitchen-Basket63683"></div>

																	</div>
																	<div class="info">
																			<div class="price">
																					<div class="prh4 ng-binding">Kitchen Basket</div>
																					<div class="prh5 ng-binding"></div>
																					<div class="prh3 price-text-color ng-binding">
																							<i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
																							<i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
																							475.00/Pc
																					</div>
																			</div>
																	</div>
															</a>
													</div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
															<a href="/product-detail/2777/Stainless-Steel-Pipes---Grade---202---0-50mm" title="Stainless Steel Pipes , Grade - 202 , 0.50mm" target="_blank">
																	<div class="photo">
																			<div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes--Grade---202--050mm84621" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Pipes , Grade - 202 , 0.50mm" alt="Stainless Steel Pipes , Grade - 202 , 0.50mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Pipes--Grade---202--050mm84621"></div>

																	</div>
																	<div class="info">
																			<div class="price">
																					<div class="prh4 ng-binding">Stainless Steel Pipes , Grade - 202 , </div>
																					<div class="prh5 ng-binding">202 0.50mm Polished All Sizes</div>
																					<div class="prh3 price-text-color ng-binding">
																							<i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
																							<i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
																							138.00/Kg
																					</div>
																			</div>
																	</div>
															</a>
													</div><!-- end ngRepeat: product in card.card_data -->
											</div>
											<div class="swiperl">
													<div class="swiper-button-next">
															<i class="fa fa-chevron-right" aria-hidden="true"></i>
													</div>
											</div>
											<div class="swiperr">
													<div class="swiper-button-prev swiper-button-disabled">
															<i class="fa fa-chevron-left" aria-hidden="true"></i>
													</div>
											</div>
									</div>
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
		                    <div class="swiper-container swiper-container-horizontal">
		                        <div class="swiper-wrapper">
		                            <!-- ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope swiper-slide-active" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
		                                <a href="/product-detail/1688/Stainless-Steel-Circle-AOD-Loose-316-10" title="Stainless Steel Circle AOD	Loose 316 10" target="_blank">
		                                    <div class="photo">
		                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-AODLoose-316-1012832" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Circle AOD	Loose 316 10" alt="Stainless Steel Circle AOD	Loose 316 10" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Circle-AODLoose-316-1012832"></div>

		                                    </div>
		                                    <div class="info">
		                                        <div class="price">
		                                            <div class="prh4 ng-binding">Stainless Steel Circle AOD	Loose 316 1</div>
		                                            <div class="prh5 ng-binding">316 (Ni 8-10% : Cr 18-20 : Mo 2%) 10mm All Size</div>
		                                            <div class="prh3 price-text-color ng-binding">
		                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
		                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
		                                                200.00/Kg
		                                            </div>
		                                        </div>
		                                    </div>
		                                </a>
		                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope swiper-slide-next" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
		                                <a href="/product-detail/390/Stainless-Steel-Coil-Indian-JSL-DD-3-0mm" title="Stainless Steel Coil Indian	JSL DD 3.0mm" target="_blank">
		                                    <div class="photo">
		                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-IndianJSL-DD-30mm44711" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Coil Indian	JSL DD 3.0mm" alt="Stainless Steel Coil Indian	JSL DD 3.0mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-IndianJSL-DD-30mm44711"></div>

		                                    </div>
		                                    <div class="info">
		                                        <div class="price">
		                                            <div class="prh4 ng-binding">Stainless Steel Coil Indian	JSL DD 3.0</div>
		                                            <div class="prh5 ng-binding">DD 3.0mm JSL AOD 1000 ,1250 ,1500mm</div>
		                                            <div class="prh3 price-text-color ng-binding">
		                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
		                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
		                                                117.00/Kg
		                                            </div>
		                                        </div>
		                                    </div>
		                                </a>
		                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
		                                <a href="/product-detail/2494/Stainless-Steel-Sheet---Grade---304" title="Stainless Steel Sheet , Grade - 304" target="_blank">
		                                    <div class="photo">
		                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Sheet--Grade---30419447" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Sheet , Grade - 304" alt="Stainless Steel Sheet , Grade - 304" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Sheet--Grade---30419447"></div>

		                                    </div>
		                                    <div class="info">
		                                        <div class="price">
		                                            <div class="prh4 ng-binding">Stainless Steel Sheet , Grade - 304</div>
		                                            <div class="prh5 ng-binding">304  (Ni: 8.0% ,Cr: 18.0%) 0.50 - 5.0mm</div>
		                                            <div class="prh3 price-text-color ng-binding">
		                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
		                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
		                                                220.00/Kg
		                                            </div>
		                                        </div>
		                                    </div>
		                                </a>
		                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
		                                <a href="/product-detail/2687/Titanium-Pipes-Grade-2-0-70mm" title="Titanium Pipes Grade-2 0.70mm" target="_blank">
		                                    <div class="photo">
		                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Titanium-Pipes-Grade-2-070mm65510" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Titanium Pipes Grade-2 0.70mm" alt="Titanium Pipes Grade-2 0.70mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Titanium-Pipes-Grade-2-070mm65510"></div>

		                                    </div>
		                                    <div class="info">
		                                        <div class="price">
		                                            <div class="prh4 ng-binding">Titanium Pipes Grade-2 0.70mm</div>
		                                            <div class="prh5 ng-binding">Grade-2 0.70mm 22 OD</div>
		                                            <div class="prh3 price-text-color ng-binding">
		                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
		                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
		                                                550.00/Kg
		                                            </div>
		                                        </div>
		                                    </div>
		                                </a>
		                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
		                                <a href="/product-detail/662/Stainless-Steel-Coil-304-1-0mm" title="Stainless Steel Coil 304 1.0mm" target="_blank">
		                                    <div class="photo">
		                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-304-10mm53114" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Coil 304 1.0mm" alt="Stainless Steel Coil 304 1.0mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-304-10mm53114"></div>

		                                    </div>
		                                    <div class="info">
		                                        <div class="price">
		                                            <div class="prh4 ng-binding">Stainless Steel Coil 304 1.0mm</div>
		                                            <div class="prh5 ng-binding"></div>
		                                            <div class="prh3 price-text-color ng-binding">
		                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
		                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
		                                                177.00/Kg
		                                            </div>
		                                        </div>
		                                    </div>
		                                </a>
		                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
		                                <a href="/product-detail/2323/Stainless-Steel-Grain-Kitchen-Trolley" title="Stainless Steel Grain Kitchen Trolley" target="_blank">
		                                    <div class="photo">
		                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Grain-Kitchen-Trolley30063" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Grain Kitchen Trolley" alt="Stainless Steel Grain Kitchen Trolley" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Grain-Kitchen-Trolley30063"></div>

		                                    </div>
		                                    <div class="info">
		                                        <div class="price">
		                                            <div class="prh4 ng-binding">Stainless Steel Grain Kitchen Trolley</div>
		                                            <div class="prh5 ng-binding"></div>
		                                            <div class="prh3 price-text-color ng-binding">
		                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
		                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
		                                                208.00/in
		                                            </div>
		                                        </div>
		                                    </div>
		                                </a>
		                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
		                                <a href="/product-detail/1411/Stainless-Steel-Sheet-304-2-00mm" title="Stainless Steel Sheet 304 2.00mm" target="_blank">
		                                    <div class="photo">
		                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Sheet-304-200mm92774" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Sheet 304 2.00mm" alt="Stainless Steel Sheet 304 2.00mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Sheet-304-200mm92774"></div>

		                                    </div>
		                                    <div class="info">
		                                        <div class="price">
		                                            <div class="prh4 ng-binding">Stainless Steel Sheet 304 2.00mm</div>
		                                            <div class="prh5 ng-binding">304 2.00mm</div>
		                                            <div class="prh3 price-text-color ng-binding">
		                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
		                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
		                                                180.00/Kg
		                                            </div>
		                                        </div>
		                                    </div>
		                                </a>
		                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
		                                <a href="/product-detail/1884/C-Frame-Single-Action-Power-Press-Rigid-Series" title="C Frame Single Action Power Press Rigid Series" target="_blank">
		                                    <div class="photo">
		                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/C-Frame-Single-Action-Power-Press-Rigid-Series50013" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="C Frame Single Action Power Press Rigid Series" alt="C Frame Single Action Power Press Rigid Series" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/C-Frame-Single-Action-Power-Press-Rigid-Series50013"></div>

		                                    </div>
		                                    <div class="info">
		                                        <div class="price">
		                                            <div class="prh4 ng-binding">C Frame Single Action Power Press Rigi</div>
		                                            <div class="prh5 ng-binding"></div>
		                                            <div class="prh3 price-text-color ng-binding">
		                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
		                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
		                                                1000000.00/Unit
		                                            </div>
		                                        </div>
		                                    </div>
		                                </a>
		                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
		                                <a href="/product-detail/2322/MS-Scrap" title="MS Scrap" target="_blank">
		                                    <div class="photo">
		                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/MS-Scrap68461" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="MS Scrap" alt="MS Scrap" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/MS-Scrap68461"></div>

		                                    </div>
		                                    <div class="info">
		                                        <div class="price">
		                                            <div class="prh4 ng-binding">MS Scrap</div>
		                                            <div class="prh5 ng-binding">nil nil</div>
		                                            <div class="prh3 price-text-color ng-binding">
		                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
		                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
		                                                24.00/Kg
		                                            </div>
		                                        </div>
		                                    </div>
		                                </a>
		                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
		                                <a href="/product-detail/2324/Stainless-Steel-Railing-Designer-Stainless-Steel-Railing" title="Stainless Steel Railing Designer Stainless Steel Railing" target="_blank">
		                                    <div class="photo">
		                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Railing-Designer-Stainless-Steel-Railing28215" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Railing Designer Stainless Steel Railing" alt="Stainless Steel Railing Designer Stainless Steel Railing" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Railing-Designer-Stainless-Steel-Railing28215"></div>

		                                    </div>
		                                    <div class="info">
		                                        <div class="price">
		                                            <div class="prh4 ng-binding">Stainless Steel Railing Designer Stain</div>
		                                            <div class="prh5 ng-binding"></div>
		                                            <div class="prh3 price-text-color ng-binding">
		                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
		                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
		                                                55.00/in
		                                            </div>
		                                        </div>
		                                    </div>
		                                </a>
		                            </div><!-- end ngRepeat: product in card.card_data -->
		                        </div>
		                        <div class="swiperl">
		                            <div class="swiper-button-next">
		                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
		                            </div>
		                        </div>
		                        <div class="swiperr">
		                            <div class="swiper-button-prev swiper-button-disabled">
		                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
		                            </div>
		                        </div>
		                    </div>
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
                    <div class="swiper-container swiper-container-horizontal">
                        <div class="swiper-wrapper">
                            <!-- ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope swiper-slide-active" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
                                <a href="/product-detail/3170/Stainless-Steel-Flat" title="Stainless Steel Flat" target="_blank">
                                    <div class="photo">
                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Flat16804" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Flat" alt="Stainless Steel Flat" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Flat16804"></div>

                                    </div>
                                    <div class="info">
                                        <div class="price">
                                            <div class="prh4 ng-binding">Stainless Steel Flat</div>
                                            <div class="prh5 ng-binding">202</div>
                                            <div class="prh3 price-text-color ng-binding">
                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
                                                39.20/Kg
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope swiper-slide-next" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
                                <a href="/product-detail/3169/Stainless-Steel-201-Circle" title="Stainless Steel 201 Circle" target="_blank">
                                    <div class="photo">
                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-201-Circle44413" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel 201 Circle" alt="Stainless Steel 201 Circle" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-201-Circle44413"></div>

                                    </div>
                                    <div class="info">
                                        <div class="price">
                                            <div class="prh4 ng-binding">Stainless Steel 201 Circle</div>
                                            <div class="prh5 ng-binding">201</div>
                                            <div class="prh3 price-text-color ng-binding">
                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
                                                40.00/Kg
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
                                <a href="/product-detail/3168/Stainless-Sianteel-Pipes-Indian-304-0-3mm" title="Stainless Sianteel Pipes Indian 304 0.3mm" target="_blank">
                                    <div class="photo">
                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Sianteel-Pipes-Indian-304-03mm28729" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Sianteel Pipes Indian 304 0.3mm" alt="Stainless Sianteel Pipes Indian 304 0.3mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Sianteel-Pipes-Indian-304-03mm28729"></div>

                                    </div>
                                    <div class="info">
                                        <div class="price">
                                            <div class="prh4 ng-binding">Stainless Sianteel Pipes Indian 304 0.</div>
                                            <div class="prh5 ng-binding">304</div>
                                            <div class="prh3 price-text-color ng-binding">
                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
                                                42.00/Kg
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
                                <a href="/product-detail/3167/Stainless-Steel-Patta---Patti-202-0-35mm" title="Stainless Steel Patta - Patti 202 0.35mm" target="_blank">
                                    <div class="photo">
                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Patta---Patti-202-035mm61629" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Patta - Patti 202 0.35mm" alt="Stainless Steel Patta - Patti 202 0.35mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Patta---Patti-202-035mm61629"></div>

                                    </div>
                                    <div class="info">
                                        <div class="price">
                                            <div class="prh4 ng-binding">Stainless Steel Patta - Patti 202 0.35</div>
                                            <div class="prh5 ng-binding">202</div>
                                            <div class="prh3 price-text-color ng-binding">
                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
                                                40.00/Kg
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
                                <a href="/product-detail/3166/Stainless-Steel-Flat-202" title="Stainless Steel Flat 202" target="_blank">
                                    <div class="photo">
                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Flat-20273768" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Flat 202" alt="Stainless Steel Flat 202" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Flat-20273768"></div>

                                    </div>
                                    <div class="info">
                                        <div class="price">
                                            <div class="prh4 ng-binding">Stainless Steel Flat 202</div>
                                            <div class="prh5 ng-binding">202</div>
                                            <div class="prh3 price-text-color ng-binding">
                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
                                                43.00/Kg
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
                                <a href="/product-detail/3165/Stainless-Steel-Coil--304-1-20mm" title="Stainless Steel Coil  304 1.20mm" target="_blank">
                                    <div class="photo">
                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil--304-120mm51297" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Coil  304 1.20mm" alt="Stainless Steel Coil  304 1.20mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil--304-120mm51297"></div>

                                    </div>
                                    <div class="info">
                                        <div class="price">
                                            <div class="prh4 ng-binding">Stainless Steel Coil  304 1.20mm</div>
                                            <div class="prh5 ng-binding">202 &amp; 304</div>
                                            <div class="prh3 price-text-color ng-binding">
                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
                                                48.00/Kg
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
                                <a href="/product-detail/3164/Stainless-Steel-Coil---Grade---201-DD---0-50mm" title="Stainless Steel Coil , Grade - 201/DD , 0.50mm" target="_blank">
                                    <div class="photo">
                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil--Grade---201DD--050mm18397" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Coil , Grade - 201/DD , 0.50mm" alt="Stainless Steel Coil , Grade - 201/DD , 0.50mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil--Grade---201DD--050mm18397"></div>

                                    </div>
                                    <div class="info">
                                        <div class="price">
                                            <div class="prh4 ng-binding">Stainless Steel Coil , Grade - 201/DD </div>
                                            <div class="prh5 ng-binding">201 0.50 mm DD</div>
                                            <div class="prh3 price-text-color ng-binding">
                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
                                                142.00/Kg
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
                                <a href="/product-detail/3163/Cookware-Stainless-Steel-High-Sauce-Pan" title="Cookware Stainless Steel High Sauce Pan" target="_blank">
                                    <div class="photo">
                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Cookware-Stainless-Steel-High-Sauce-Pan28015" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Cookware Stainless Steel High Sauce Pan" alt="Cookware Stainless Steel High Sauce Pan" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Cookware-Stainless-Steel-High-Sauce-Pan28015"></div>

                                    </div>
                                    <div class="info">
                                        <div class="price">
                                            <div class="prh4 ng-binding">Cookware Stainless Steel High Sauce Pa</div>
                                            <div class="prh5 ng-binding">Stainless Steel Stainless Steel High Sauce Pan</div>
                                            <div class="prh3 price-text-color ng-binding">
                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
                                                220.00/Pc
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
                                <a href="/product-detail/3162/Cookware-frying-pan" title="Cookware frying pan" target="_blank">
                                    <div class="photo">
                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Cookware-frying-pan46374" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Cookware frying pan" alt="Cookware frying pan" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Cookware-frying-pan46374"></div>

                                    </div>
                                    <div class="info">
                                        <div class="price">
                                            <div class="prh4 ng-binding">Cookware frying pan</div>
                                            <div class="prh5 ng-binding">Avon Appliances stainless steel utensils</div>
                                            <div class="prh3 price-text-color ng-binding">
                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
                                                200.00/Pc
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- end ngRepeat: product in card.card_data --><div class="swiper-slide col-item ng-scope" data-ng-repeat="product in card.card_data" style="width: 281.778px;">
                                <a href="/product-detail/3161/Stainless-Steel-Coil-202--0-30mm" title="Stainless Steel Coil 202, 0.30mm" target="_blank">
                                    <div class="photo">
                                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-202-030mm36627" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: product.name}, {&quot;alt&quot;: product.name}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Stainless Steel Coil 202, 0.30mm" alt="Stainless Steel Coil 202, 0.30mm" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Coil-202-030mm36627"></div>

                                    </div>
                                    <div class="info">
                                        <div class="price">
                                            <div class="prh4 ng-binding">Stainless Steel Coil 202, 0.30mm</div>
                                            <div class="prh5 ng-binding">202 0.30mm</div>
                                            <div class="prh3 price-text-color ng-binding">
                                                <i class="fa fa-dollar ng-hide" data-ng-show="product.is_international == 1"></i>
                                                <i class="fa fa-inr" data-ng-show="product.is_international == 0"></i>
                                                175.00/Kg
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div><!-- end ngRepeat: product in card.card_data -->
                        </div>
                        <div class="swiperl">
                            <div class="swiper-button-next">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="swiperr">
                            <div class="swiper-button-prev swiper-button-disabled">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
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

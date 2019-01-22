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
									 <div class="col-sm-4 col-md-3">
											 <div class="navbar-vertical">
													 <ul class="nav nav-stacked">
															 <li class="header">
																	 <h6 class="text-uppercase">TOP CATEGORY </h6>
															 </li>


															 <?php
															 //echo "<pre>";
															 foreach ($home_cat_data->data->top_category as $key => $value) {
															 	  //print_r($value);
															 }
															 ?>
															 <li><a href="javascript:void(0);">Alluminium</a></li>
															 <li><a href="javascript:void(0);">Gold</a></li>

													 </ul>
											 </div><!-- end navbar-vertical -->
											 <hr class="spacer-20 no-border">
											 <div class="navbar-vertical">
													 <ul class="nav nav-stacked">
															 <li class="header">
																	 <h6 class="text-uppercase">TOP CATEGORY</h6>
															 </li>
															 <li><a href="javascript:void(0);">Bronze</a></li>
															 <li><a href="javascript:void(0);">XYZ</a></li>

													 </ul>
											 </div><!-- end navbar-vertical -->
											 <br>
											 <div class="row">
												 <div class="col-md-4">
													 <img src="http://metalbaba.local/images/metalbaba-qr-code.png">
												 </div>
												 <div class="col-md-8">
													 <span>
														 <p>
															 Get Daily Market Prices
															 on Your Mobile
															 Scan to download App
														 </p>
													 </span>
												 </div>

											 </div>
									 </div><!-- end col -->


									 <?php
									// use GuzzleHttp\Client;
									// use GuzzleHttp\Middleware;
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
						<div class="col-sm-9 col-md-6">
											 <div class="row">
													 <div class="col-sm-12">
															 <div class="owl-carousel slider owl-theme">
																 <?php
																 foreach ($home_data->data->data[0]->card_data as $key => $value) {
																		 ?>
																		 <div class="item">
																				 <figure>
																						 <a href="javascript:void(0);">
																								 <img src="{{ $value->image }}" alt=""/>

																						 </a>
																				 </figure>
																		 </div><!-- end item -->
																		 <?php
																 }
																 ?>

															 </div><!-- end owl carousel -->
													 </div><!-- end col -->
											 </div><!-- end row -->
											 <!--tranding product -->
											 <div class="row">
												 <div class="col-md-12">


												 </div>
											 </div>
											 <!--tranding product -->

										 </div><!-- end col -->
										 <div class="col-sm-2 col-md-3">
											 <div class="navbar-vertical">
													 <ul class="nav nav-stacked">
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

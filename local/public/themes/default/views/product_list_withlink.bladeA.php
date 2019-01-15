<style>
.list_attribute {
    float: left;
    width: 50%;
    padding-left:20px;
}
.list_attribute_itemname{
  color: #000;
}
.list_attribute_a {
    float: left;
    width: 50%;
    padding-left:20px;

}
.attr_item_m{
    color: #ccc;
    float: left;
    position: absolute;
    margin-left: -26px;
    margin-top: 2px;
}
.list_attribute_a p {
  font-size: 12px;
    color: #212121;
    font-weight: 600;
    padding-right: 32px;
    float: left;

}
span.list_attribute_itemname_a {
    float: left;
    margin-top: 5px;
}
</style>
<section class="section light-backgorund">
    <div class="container">
        <div class="row">
             <div class="col-md-4">
               <div class="related_categorylist" style="background:#FFF">
                  <div class="related_categorylist-items">
                    Related Category <br>
                    <?php

                    $link_item_parent=$prodt_data->data->parent_category->name;
                    $link_item=$prodt_data->data->main_category->name;


                    $filter_arr=$prodt_data->data->filters;
                    foreach ($filter_arr as $key => $value) {
                      // code...
                    }
                    // echo "<pre>";
                    // print_r($filter_arr[1]);
                    //
                    // foreach ($filter_arr as $key => $value) { //Bakware
                    //
                    // }
                    // die;

                    //------------------------------re

                     use GuzzleHttp\Client;
                     $client = new Client();
                     $response = $client->post('http://api.metalbaba.local/customer_web/product_filter');
                     $product_data=json_decode($response->getBody()->getContents());
                    // echo "<pre>";
                     $related_cat_data=$product_data->data->parent_category->name;
                    // echo "<pre>";
                     $main_category_name=$related_cat=$product_data->data->main_category->name;
                     $main_category_child=$related_cat=$product_data->data->main_category->child;
                     //------------------------

                     //print_r($main_category_child);

                     ?>
                     <div class="related_categorylist-items_val">
                      {{ $link_item_parent }}
                     </div>

                     <ul>
                       <li class="filtersin4">
                         {{$link_item}}
                         <ul class="filtersin_a">
                           @foreach ($main_category_child as $value_child)
                           <li>
                             <a href="{{ route('product_list_cat', [$value_child->id, preg_replace('/\s+/', '-', strtolower($value_child->meta_title))]) }}" class="filtersin_a_itme_link">{{ $value_child->name }}</>
                           </li>

                           @endforeach

                         </ul>
                       </li>
                     </ul>
                  </div>

                  <!-- Product Feature -->
                  <div class="related_categorylist-items">
                  Product Feature <br>

                     <!-- <div class="related_categorylist-items_val">
                      {{$filter_arr[1]->title}}
                     </div> -->




  <div class="panel-group" id="accordion">
    <?php
  //  echo "<pre>";
    $i=1;
    $dit_word = array(
 "",
 "one",
 "two",
 "three",
 "four",
 "five",
 "six",
 "seven",
 "eight",
 "nine",
 "ten",
 "eleven",
 "twelve",
 "thirteen",
 "ourteen",
 "fifteen",
 "sixteen",
 "seventeen",
 "eighteen",
 "nineteen",
 "twenty"
);


$filter_arr_data=$prodt_data->data->filters;

   foreach ($filter_arr_data as $key_item => $value_item) {
       $iv=$i++;



           ?>
           <div class="panel panel-default" style="border:none">
             <div class="panel-heading" style="background:transparent">
               <h5 class="panel-title">
                 <a class="fa fa-arrow-up" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo ucwords($dit_word[$iv]);?>">
                   {{$value_item->title}}
                 </a>
               </h5>
             </div>
             <div id="collapse{{ucwords($dit_word[$iv])}}" class="panel-collapse collapse in">
               <div class="panel-body">
                 <div id="menu1">
                  <ul class="term-list">
                    <?php
                    foreach ($value_item->filter as $key_i => $value_i) {
                    //  print_r($value_i->id);
                    //  print_r($value_i->name);
                      ?>
                      <li class="term-item ">
                        <div class="pretty p-svg p-curve">
                             <input type="checkbox" />
                             <div class="state p-success">
                                 <!-- svg path -->
                                 <svg class="svg svg-icon" viewBox="0 0 20 20">
                                     <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                 </svg>
                                 <label>{{ $value_i->name }}</label>
                             </div>
                         </div>

                      </li>
                      <?php
                    }

                    ?>







                  </ul>
                  </div>
               </div>
             </div>
           </div>

           <?php

   }



    ?>

</div>
</div>
<!-- Product Feature -->
               </div>
             </div>
             <div class="col-md-8">
               <!-- hedaer for product filter  -->
                <div class="row" style="margin-top:12px;">
                    <div class="col-md-6">
                      <div class="p_list_item_filter_layour">
                        <a href="#" class="aj_button"><span>PRODUCTS </span></a>
                        <a href="{{ URL::to('/seller-list')}}" class="aj_button"><span>SUPPLIERS </span></a>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="p_list_item_withrequest_layour">
                        <a href="#" class="btn btn-primary buy_leads">Latest Buy Leads</a>
                        <a href="#" class="btn btn-primary submit_form">SUBMIT BUYING REQUEST</a>
                      </div>


                    </div>
                </div>
                <br>
               <!-- hedaer for product filter  -->
               <?php
                //use GuzzleHttp\Client;
                $client = new Client();
                $response = $client->post('http://api.metalbaba.local/customer_web_api/product_list');
                $product_data=json_decode($response->getBody()->getContents());


                foreach ($product_data->data->data as $key => $value) {
                //  echo "<pre>";
                //  print_r($value->attribute_list);
                  ?>
                  <div class="product_list_card" style="margin-top: 23px; ;background:#FFF;min-height:160px">
                     <div class="row">
                         <div class="col-md-2">
                           <div class="img_product_list">
                             <img  class="img-pro_1" style="margin: 20px;" src="{{$value->image_id}}" alt="" width="100%">
                           </div>
                         </div>
                         <div class="col-md-6">
                           <h2>
                           <a data-ng-href="/product-detail/58/Stainless-Steel-Circle-201-2B-AOD-0-27mm" target="_blank" href="/product-detail/58/Stainless-Steel-Circle-201-2B-AOD-0-27mm">
                               <span itemprop="name" style="color:#2F57AF;margin: 5px;font-size: 16px;font-weight: 600;"class="ng-binding">{{ $value->name}}</span>
                           </a>

                           </h2>


                           <span class="starme" style="float: right; margin-top: -29px;font-size: 22px;">            <a href="" A:link { COLOR: black; TEXT-DECORATION: none; font-weight: normal }
                             A:visited { COLOR: black; TEXT-DECORATION: none; font-weight: normal }
                             A:active { COLOR: black; TEXT-DECORATION: none }
                             A:hover { COLOR: blue; TEXT-DECORATION: none; font-weight: none }> <i class="fa fa-star-o" aria-hidden="true"></i></a>
                           </span>
                           <div class="row">
                             <?php
                             foreach ($value->attribute_list as $attr_key => $attr_value) {
                               //echo "<pre>";
                               //print_r($attr_value->value);


                               if(!empty($attr_value->value)){

                                 ?>
                                 <div class="list_attribute">
                                   {{$attr_value->name}}:<span class="list_attribute_itemname">{{$attr_value->value}}</span>
                                 </div>
                                 <?php
                               }
                             }
                             ?>
                             <?php
                             if(!empty($value->moq)){
                               $moq=$value->moq;
                               ?>
                               <div class="list_attribute_a">
                                 <p>{{$moq}} {{$value->unit_title}} </p><span class="attr_item_m">(Min. Order)</span>
                               </div>
                               <?php
                             }
                              ?>


                             <div class="list_attribute_a">
                              <span class="list_attribute_itemname_a">
                                <span style="color: #000;padding-right:4px; margin-left:5px;padding-bottom: 2px; font-size: 12px;float: left; width: 100%;"><span><i style="color:red" class="fa fa-inr" aria-hidden="true"> <strong>{{$value->price}}</strong></i> <span style="color:#ccc">/ {{$value->unit_code}}</span></span></span>
                                </span>
                             </div>

                           </div>

                           </div>
                         <div class="col-md-4">
                           <div class="gold_starme_text" style="margin-top:5px;">
                             <span>{{$value->seller_company}}</span><br>
                             <span style="margin-top:5px;">{{$value->location}} {{$value->country_name}}</span>
                           </div>
                           <div class="gold_starme">
                               <img src="http://res.cloudinary.com/metb/image/upload/ABGLIM472338483" alt"" width="75px" style="float: right; margin-top: -42px;">
                           </div>
                           <br>
                           <span><button style="margin-top:20px" type="button" name="button" class="btn btn-primary btn-md">PLACE ENQUIRY</button></span>
                         </div>
                     </div>
                  </div>


                  <?php

                }


               ?>


             </div>
        </div>
      </div>
</section>

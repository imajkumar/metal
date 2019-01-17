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
                     use GuzzleHttp\Client;
                     $client = new Client();
                     $response = $client->post(Config::get('ayra.apiList.PRODUCT_FILTER'));
                     $product_data=json_decode($response->getBody()->getContents());
                    // echo "<pre>";


                     $related_cat_data=$product_data->data->parent_category->name;
                    // echo "<pre>";

                     $main_category_name=$related_cat=$product_data->data->main_category->name;
                     $main_category_child=$related_cat=$product_data->data->main_category->child;


                     //print_r($main_category_child);

                     ?>
                     <div class="related_categorylist-items_val">
                      {{ $related_cat_data }}
                     </div>

                     <ul>
                       <li class="filtersin4">
                         {{$main_category_name}}
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
                $response = $client->post(Config::get('ayra.apiList.PRODUCT_LIST'));
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

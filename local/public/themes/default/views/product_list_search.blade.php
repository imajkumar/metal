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
                        <a href="{{ URL::to('/enquiry-buylead-list')}}" class="btn btn-primary buy_leads">Latest Buy Leads</a>
                        <a href="javascript:void(0)" onclick="placeBuylead()" class="btn btn-primary submit_form">SUBMIT BUYING REQUEST</a>
                      </div>


                    </div>
                </div>
                <br>
                <style type="text/css">
               /* .contents{margin: 20px;padding: 20px;list-style: none;background: #F9F9F9;border: 1px solid #ddd;border-radius: 5px;} */
               .contents li{margin-bottom: 10px;}
               .loading-div{position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: 999;display:none;}
               .loading-div img {margin-top: 20%;margin-left: 50%;}
                </style>
                 <div class="loading-div"><img src="{{ asset('local/public/themes/default/assets/core/img/ajax-loader.gif') }}" ></div>
                 <div id="results-app">

                 </div>

               <!-- hedaer for product filter  -->

             </div>
        </div>
      </div>
</section>

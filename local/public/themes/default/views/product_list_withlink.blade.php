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
<?php
if(Request::segment(1)=='product-list'){
    $pid=Request::segment(2);
  }
?>
<input type="hidden" name="txtpidID" id="txtpidID" value="{{$pid}}">

<section class="section light-backgorund">
    <div class="container">
        <div class="row">
             <div class="col-md-3">
               <div class="related_categorylist" style="background:#FFF">
                  <div class="related_categorylist-items">
                    Related Category <br>
                    <?php
                    $link_item_parent=$prodt_data->data->parent_category->name;
                    $link_item=$prodt_data->data->main_category->name;
                    $filter_arr=$prodt_data->data->filters;
                    ?>
                     <div class="related_categorylist-items_val">
                      {{ $link_item_parent }}
                     </div>
                     <ul>
                       <li class="filtersin4">
                         {{$link_item}}
                       </li>
                     </ul>
                  </div>
                  <!-- Product Feature -->
                  <div class="related_categorylist-items">
                  Product Feature
                  <br>
  <div class="panel-group" id="accordion">
<?php
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
       $iv=$i++;           ?>
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
                    ?>
                      <li class="term-item ">
                        <div class="pretty p-svg p-curve">
                             <input type="checkbox" class="aj_itemdata" name="aj_itemdata" value="{{ $value_item->title }}{{'@'.$value_i->id}}"/>
                             <div class="state p-success">
                                 <!-- svg path -->
                                 <svg class="svg svg-icon" viewBox="0 0 20 20">
                                     <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                 </svg>
                                 <label>{{ strlen($value_i->name)>=20 ? substr($value_i->name, 0, 20)."..." : $value_i->name }}</label>

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
             <div class="col-md-9">
               <!-- hedaer for product filter  -->
                <div class="row" style="margin-top:12px;">
                    <div class="col-md-6">
                      <div class="p_list_item_filter_layour">
                        <a href="{{ URL::to('/product-list')}}" class="aj_button"><span>PRODUCTS </span></a>
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

                <!-- ajcode -->
                <style type="text/css">
               /* .contents{margin: 20px;padding: 20px;list-style: none;background: #F9F9F9;border: 1px solid #ddd;border-radius: 5px;} */
               .contents li{margin-bottom: 10px;}
               .loading-div{position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: 999;display:none;}
               .loading-div img {margin-top: 20%;margin-left: 50%;}
                </style>
                 <div class="loading-div"><img src="{{ asset('local/public/themes/default/assets/core/img/ajax-loader.gif') }}" ></div>
                 <div id="results">
                  
                 </div>
                 <!-- ajcode  -->



                </div>
        </div>
      </div>

</section>

<?php
$html .='<div class="pr_display_card">
<div class="row">
<div class="col-md-2">
 <div class="pr_thumbnail">
   <img width="145px" src="'.$value->image.'">
 </div>
</div>
<div class="col-md-7">
<div class="pr_content_card">
 <div class="pr_title_show">
   <a href="#" class="title">'.$value->name.'</a>
 </div>
 <div class="pr_title_star">
   <i class="fa fa-star-o" title="Follow" aria-hidden="true"></i>
 </div>
 <div class="clearfix"></div>';
 $html.='<div class="pr_item_li">
 <ul class="list-inline">';
 foreach ($value->attribute_list as $key => $value_attr) {
  if(!empty($value_attr->value)){
    $html .='<li>
      '.$value_attr->name.':<span class="nb-bold"> '.$value_attr->value.'</span>
      </li>';
  }
 }
    $html .='</ul><ul class="list-inline">
       <li class="item_w">
         <span>'.$value->moq.' '.$value->unit_title.'</span>(Min. Order)
       </li>
           <span class="inr_p">'.$value->price.'</span>/'.$value->unit_code.'
     </ul>';
     $html .='
 </div>
 </div>
</div>
<div class="col-md-3">
 <span class="comp_name">'.$value->seller_name.'</span>
 <span class="comp_location">'.$value->location.' ,'.$value->country_name.'
 <span class="comp_img_tag">
   <img src="http://res.cloudinary.com/metb/image/upload/ABGLIM472338483" alt"" width="75px">
 </span>
 <span>
   <button type="button" class="btn btn-primary btn-md" name="button">PLACE ENQUIRY</button>
 </span>
</div>
</div>
</div>';
}

echo $html .='</ul>';
echo '<div align="center">';
// To generate links, we call the pagination function here.
echo $this->paginate_function($item_per_page, $page_number, $get_total_rows, $total_pages);
echo '</div>';
$html='<div class="product_list_card" style="margin-top: 23px; ;background:#FFF;min-height:160px">
        <div class="row">
            <div class="col-md-2">
              <div class="img_product_list">
                <img  class="img-pro_1" style="margin: 20px;" src="#" alt="" width="100%">
              </div>
            </div>
            <div class="col-md-6">
              <h2>
              <a data-ng-href="/product-detail/58/Stainless-Steel-Circle-201-2B-AOD-0-27mm" target="_blank" href="/product-detail/58/Stainless-Steel-Circle-201-2B-AOD-0-27mm">
                  <span itemprop="name" style="color:#2F57AF;margin: 5px;font-size: 16px;font-weight: 600;"class="ng-binding">5555</span>
              </a>
              </h2>
              <span class="starme" style="float: right; margin-top: -29px;font-size: 22px;">            <a href="" A:link { COLOR: black; TEXT-DECORATION: none; font-weight: normal }
                A:visited { COLOR: black; TEXT-DECORATION: none; font-weight: normal }
                A:active { COLOR: black; TEXT-DECORATION: none }
                A:hover { COLOR: blue; TEXT-DECORATION: none; font-weight: none }> <i class="fa fa-star-o" aria-hidden="true"></i></a>
              </span>
              <div class="row">
              <div class="list_attribute">
                333:<span class="list_attribute_itemname">333</span>
              </div>
              <div class="list_attribute_a">
                <p>hjhj:jkj </p><span class="attr_item_m">(Min. Order)</span>
              </div>
                <div class="list_attribute_a">
                 <span class="list_attribute_itemname_a">
                   <span style="color: #000;padding-right:4px; margin-left:5px;padding-bottom: 2px; font-size: 12px;float: left; width: 100%;"><span><i style="color:red" class="fa fa-inr" aria-hidden="true"> <strong>5454</strong></i> <span style="color:#ccc">/4545</span></span></span>
                   </span>
                </div>
              </div>
              </div>
            <div class="col-md-4">
              <div class="gold_starme_text" style="margin-top:5px;">
                <span>4545</span><br>
                <span style="margin-top:5px;">454 45</span>
              </div>
              <div class="gold_starme">
                  <img src="http://res.cloudinary.com/metb/image/upload/ABGLIM472338483" alt"" width="75px" style="float: right; margin-top: -42px;">
              </div>
              <br>
              <span><button style="margin-top:20px" type="button" name="button" class="btn btn-primary btn-md">PLACE ENQUIRY</button></span>
            </div>
        </div>
     </div>';
   $html;



   <div class="col-md-6">

     <img src="http://res.cloudinary.com/metb/image/upload/c_fit,h_173,w_247/Stainless-Steel-Flat16804" width="150px">
     <span class="ist">3434343333333</span>
     <span class="isst">3434343333333</span>
   </div>

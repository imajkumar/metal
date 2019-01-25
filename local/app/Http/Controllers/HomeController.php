<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Theme;
use Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use YoHang88\LetterAvatar\LetterAvatar;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

// getUserLogin
public function getUserLogin(Request $request){
  $username=$request->username;
  $password=$request->password;
  $type=$request->type;
  if($username!==""){

    $client = new Client();
    $clientHandler = $client->getConfig('handler');
    $tapMiddleware = Middleware::tap(function ($request) {
         $request->getHeaderLine('Content-Type');
         $request->getBody();
    });
    $response = $client->request('POST', 'http://api.metalbaba.local/customer_web/login', [
              'json'    => [
                'API_TOKEN' => '',
                'type' =>'2',
                'username' =>$username,
                'password' =>$password

          ],
          'handler' => $tapMiddleware($clientHandler)
      ]);
  $user_arr=json_decode($response->getBody()->getContents());

  if($user_arr->status==1){
     session(['MYTOKEN' => $user_arr->api_token]);
     return json_encode($user_arr);
  }else{
  return json_encode($user_arr);
  }

  }



}
// getUserLogin


    // getSeller_catalogue
    public function getSeller_catalogue(){
      $theme = Theme::uses('default')->layout('layout');
      $data = ['info' => 'Hello World'];
      return $theme->scope('getSeller_catalogue', $data)->render();
    }
    // getSeller_catalogue


    public function getProductDetail(Request $request){
      $theme = Theme::uses('default')->layout('layout');
      $data = ['info' => 'Hello World'];
      return $theme->scope('view_product_details', $data)->render();

    }

    function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
    {
        $pagination = '';
        if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ //verify total pages and current page number
            $pagination .= '<ul class="pagination">';

            $right_links    = $current_page + 3;
            $previous       = $current_page - 3; //previous link
            $next           = $current_page + 1; //next link
            $first_link     = true; //boolean var to decide our first link

            if($current_page > 1){
    			      $previous_link = ($previous==0)?1:$previous;
                $pagination .= '<li class="first"><a href="#" data-page="1" title="First">«</a></li>'; //first link
                $pagination .= '<li><a href="#" data-page="'.$previous_link.'" title="Previous"><</a></li>'; //previous link
                    for($i = ($current_page-2); $i < $current_page; $i++){ //Create left-hand side links
                        if($i > 0){
                            $pagination .= '<li><a href="#" data-page="'.$i.'" title="Page'.$i.'">'.$i.'</a></li>';
                        }
                    }
                $first_link = false; //set first link to false
            }

            if($first_link){ //if current active page is first link
                $pagination .= '<li class="first active"><a href="#">'.$current_page.'</a></li>';
            }elseif($current_page == $total_pages){ //if it's the last active link
                $pagination .= '<li class="last active"><a href="#">'.$current_page.'</a></li>';
            }else{ //regular current link
                $pagination .= '<li class="active"><a href="#">'.$current_page.'</a></li>';
            }

            for($i = $current_page+1; $i < $right_links ; $i++){ //create right-hand side links
                if($i<=$total_pages){
                    $pagination .= '<li><a href="#" data-page="'.$i.'" title="Page '.$i.'">'.$i.'</a></li>';
                }
            }
            if($current_page < $total_pages){
    				$next_link = ($i > $total_pages)? $total_pages : $i;
                    $pagination .= '<li><a href="#" data-page="'.$next_link.'" title="Next">></a></li>'; //next link
                    $pagination .= '<li class="last"><a href="#" data-page="'.$total_pages.'" title="Last">»</a></li>'; //last link
            }
            $pagination .= '</ul>';
        }
        return $pagination; //return pagination links
    }




//this is used to get list of selller

public function getSellerList(Request $request){
  $pid=$request->pid;
   if(!empty($pid)){
     $pid_val=$pid;
   }else{
     $pid_val="";
   }

  $filter_type=[]; //code is still need to improved
  //Get page number from Ajax
  if(isset($_POST["page"])){
   $page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
   if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
  }else{
   $page_number = 1; //if there's no page number, set it to 1
  }
  $client = new Client();
  // Grab the client's handler instance.
  $clientHandler = $client->getConfig('handler');
  // Create a middleware that echoes parts of the request.
  $tapMiddleware = Middleware::tap(function ($request) {
       $request->getHeaderLine('Content-Type');
      // application/json
       $request->getBody();

  });


  $response = $client->request('POST', 'http://api.metalbaba.local/customer_web/seller_list', [
           'json'    => [
             'API_TOKEN' => '',
             'category_id' =>$pid_val,
             'filters' => $filter_type,
             'is_gold_supplier' => '0',
             'is_trade_assurance' => '0',
             'moq' => '0',
             'order' => 'asc',
             'page' => $page_number,
             'search_keyword' => '',
             'sort' => '',
       ],
       'handler' => $tapMiddleware($clientHandler)
   ]);
  // echo $response->getBody()->getContents();
$data_arr=json_decode($response->getBody()->getContents());

$item_per_page 		= $data_arr->data->per_page; //item to display per page
//get total number of records from database

$get_total_rows = $data_arr->data->total; //hold total records in variable
//break records into pages
$total_pages = ceil($get_total_rows/$item_per_page);
//position of records
$page_position = (($page_number-1) * $item_per_page);
//Limit our results within a specified range.






//Display records fetched from database.
$html='<ul class="contents">';
// echo "<pre>";
foreach ($data_arr->data->data as $key => $value) {

  if($value->image==""){
    $avatar = new LetterAvatar($value->name);

  }else{
  $avatar=$value->image;
  }
  $html='<div class="pr_display_card">
  <div class="row">

  <div class="col-md-2">
     <div class="pr_thumbnail">

      <img width="145px" class="img_circle" src="'.$avatar.'"  >
   </div>
  </div>
  <div class="col-md-8">
    <div class="pr_content_card">
      <div class="company_list_card">
      <ul class="list-inline">
         <li>
           <span class="sh1">'.$value->name.'</span> <span> '.$value->location.'</span>
         </li>
     </ul>
     <span class="splbxinh24" >Main Product</span>
     </div>
    </div>
     <div class="navcontainer_aj">
       <ul>';
        foreach ($value->main_products as $key => $mp_value) {
          // echo "<pre>";
          // print_r($mp_value);

          $html .='<li><a href="#">
            <img src="'.$mp_value->image.'" width="110%" style="min-height:110px;">
            <span class="ist">'.$mp_value->name.'</span>

          </a>
          </li>';
        }



       $html .='</ul>
       </div>
     </div>
  <div class="col-md-1">
   <span class="comp_img_tag_img">
     <img src="'.$value->group_image.'" alt"" width="75px">
   </span>
     <button type="button" class="btn btn-primary btn-ms aj_button_req" name="button">View Details</button>                   </div>
  </div>
  </div>';

  echo $html .='</ul>';


}
echo '<div align="center">';
// To generate links, we call the pagination function here.
echo $this->paginate_function($item_per_page, $page_number, $get_total_rows, $total_pages);
echo '</div>';

}
//this is used to get list of selller

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
public function getProductList(Request $request){
$pid=$request->pid;
 if(!empty($pid)){
   $pid_val=$pid;
 }else{
   $pid_val="";
 }

$filter_type = array();
if(empty($request->filer_items)){
 $filter_type = [];
}else{
$data=explode("i_A",$request->filer_items);
$filter_type = array();
foreach ($data as $key => $value) {
    $data_arr=explode("@",$value);
    $filter_type_vale[] =array('id' =>$data_arr[1]);
    $filter_type = array(
    'id' =>$data_arr[0],
    'filter' =>$filter_type_vale,
    );
  }
}
    //print_r($filter_type);
      $filter_type=[]; //code is still need to improved
       //Get page number from Ajax
       if(isset($_POST["page"])){
       	$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
       	if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
       }else{
       	$page_number = 1; //if there's no page number, set it to 1
       }


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

    //   print_r($filter_type);

        $response = $client->request('POST', 'http://api.metalbaba.local/customer_web/product_list', [
                 'json'    => [
                   'API_TOKEN' => '',
                   'category_id' =>$pid_val,
                   'filters' => $filter_type,
                   'is_gold_supplier' => '0',
                   'is_trade_assurance' => '0',
                   'moq' => '0',
                   'order' => 'asc',
                   'page' => $page_number,
                   'search_keyword' => '',
                   'sort' => '',
             ],
             'handler' => $tapMiddleware($clientHandler)
         ]);
$data_arr=json_decode($response->getBody()->getContents());
$item_per_page 		= $data_arr->data->per_page; //item to display per page
//get total number of records from database

$get_total_rows = $data_arr->data->total; //hold total records in variable
//break records into pages
$total_pages = ceil($get_total_rows/$item_per_page);
//position of records
$page_position = (($page_number-1) * $item_per_page);
//Limit our results within a specified range.

//Display records fetched from database.
$html='<ul class="contents">';
foreach ($data_arr->data->data as $key => $value) {
$pname=str_replace('/', '-',  $value->name);

$P_URL=route('getProductDetail', ['productid' => 1, 'product_name' => str_replace(' ', '-',  $pname)]);


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
         <a href="'.$P_URL.'" class="title">'.$value->name.'</a>
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



     }
     public function seller_filter_ajax(Request $request){
       // code for seller filter

     }

     public function product_filer_ajax(Request $request){

          if($request->filer_items){
            $data=explode("i_A",$request->filer_items);
            $filter_type = array();
            foreach ($data as $key => $value) {
                 $data_arr=explode("@",$value);
                   $filter_type_vale[] =array('id' =>$data_arr[1]);
                   $filter_type = array(
                     'id' =>$data_arr[0],
                     'filter' =>$filter_type_vale,
                   );
            }

             //Get page number from Ajax
             if(isset($_POST["page"])){
             	$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
             	if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
             }else{
             	$page_number = 1; //if there's no page number, set it to 1
             }

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
             $response = $client->request('POST', 'http://api.metalbaba.local/customer_web/product_list', [
               'json'    => [
                 'API_TOKEN' => '',
                 'category_id' => $request->pcatID,
                 'filters' => array($filter_type ),
                 'is_gold_supplier' => '0',
                 'is_trade_assurance' => '0',
                 'moq' => '0',
                 'order' => 'asc',
                 'page' => $page_number,
                 'search_keyword' => '',
                 'sort' => '',
           ],
           'handler' => $tapMiddleware($clientHandler)
       ]);
         // return $response->getBody()->getContents();
         $data_arr=json_decode($response->getBody()->getContents());


         $item_per_page 		= $data_arr->data->per_page; //item to display per page
         //get total number of records from database

         $get_total_rows = $data_arr->data->total; //hold total records in variable
         //break records into pages
         $total_pages = ceil($get_total_rows/$item_per_page);
         //position of records
         $page_position = (($page_number-1) * $item_per_page);
         //Limit our results within a specified range.

         //Display records fetched from database.
         $html='<ul class="contents">';
         foreach ($data_arr->data->data as $key => $value) {
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


         //ajcode end

      }


     }


     public function view_all_prices(){
       $theme = Theme::uses('default')->layout('layout');
       $data = ['info' => 'Hello World'];
       return $theme->scope('view_all_prices', $data)->render();
     }
     // about_us
     public function about_us(){
       $theme = Theme::uses('default')->layout('layout');
        $data = ['info' => 'Hello World'];
       return $theme->scope('about_us', $data)->render();
     }
     // about_us
     // privacy_policy
     public function privacy_policy(){
       $theme = Theme::uses('default')->layout('layout');
        $data = ['info' => 'Hello World'];
       return $theme->scope('privacy_policy', $data)->render();
     }
     // privacy_policy
     // refund_policy
     public function refund_policy(){
       $theme = Theme::uses('default')->layout('layout');
        $data = ['info' => 'Hello World'];
       return $theme->scope('refund_policy', $data)->render();
     }
     // refund_policy
     // cancellation_policy
     public function cancellation_policy(){
       $theme = Theme::uses('default')->layout('layout');
        $data = ['info' => 'Hello World'];
       return $theme->scope('cancellation_policy', $data)->render();
     }
     // cancellation_policy
     // terms_conditions
     public function terms_conditions(){
       $theme = Theme::uses('default')->layout('layout');
        $data = ['info' => 'Hello World'];
       return $theme->scope('terms_conditions', $data)->render();
     }
     // terms_conditions
     // our_team
     public function our_team(){
       $theme = Theme::uses('default')->layout('layout');
        $data = ['info' => 'Hello World'];
       return $theme->scope('our_team', $data)->render();
     }
     // our_team
     // news
     public function news(){
       $theme = Theme::uses('default')->layout('layout');
       $data = ['info' => 'Hello World'];
       return $theme->scope('news', $data)->render();
     }
     // news
     // contact_us
     public function contact_us(){
       $theme = Theme::uses('default')->layout('layout');
       $data = ['info' => 'Hello World'];
       return $theme->scope('contact_us', $data)->render();
     }
     // contact_us








     public function product_seller_list(){

       $theme = Theme::uses('default')->layout('layout');
       $data = ['info' => 'Hello World'];
       return $theme->scope('seller_list', $data)->render();

     }
   //seller list cat
   public function seller_list_cat($id,$item_name){
    $client = new Client();
    // Grab the client's handler instance.
    $clientHandler = $client->getConfig('handler');
    // Create a middleware that echoes parts of the request.
    $tapMiddleware = Middleware::tap(function ($request) {
         $request->getHeaderLine('Content-Type');
        // application/json
         $request->getBody();
        // {"foo":"bar"}
    });
    $response = $client->request('POST', 'http://api.metalbaba.local/customer_web/product_filter', [
      'json'    => [
        'API_TOKEN' => '',
        'category_id' => $id,
        'filters' => '[]',
        'is_gold_supplier' => '0',
        'is_trade_assurance' => '0',
        'moq' => '0',
        'order' => 'asc',
        'page' => '1',
        'search_keyword' => '',
        'sort' => '',
  ],
  'handler' => $tapMiddleware($clientHandler)
]);
    $product_filter_link_data=json_decode($response->getBody()->getContents());
    //product list
    $response = $client->request('POST', 'http://api.metalbaba.local/customer_web/product_list', [
      'json'    => [
        'API_TOKEN' => '',
        'category_id' => $id,
        'filters' => '[]',
        'is_gold_supplier' => '0',
        'is_trade_assurance' => '0',
        'moq' => '0',
        'order' => 'asc',
        'page' => '1',
        'search_keyword' => '',
        'sort' => '',
  ],
  'handler' => $tapMiddleware($clientHandler)
]);
    $product_keyword_data=json_decode($response->getBody()->getContents());

    //product list




     $theme = Theme::uses('default')->layout('layout');
     $data = [
       'prodt_data' => $product_filter_link_data,
       'pro_data_keyword' => $product_keyword_data,

   ];
    return $theme->scope('seller_list_withlink', $data)->render();
   }

   //seller list cat

     public function product_list_cat($id,$item_name){
      $client = new Client();
      // Grab the client's handler instance.
      $clientHandler = $client->getConfig('handler');
      // Create a middleware that echoes parts of the request.
      $tapMiddleware = Middleware::tap(function ($request) {
           $request->getHeaderLine('Content-Type');
          // application/json
           $request->getBody();
          // {"foo":"bar"}
      });
      $response = $client->request('POST', 'http://api.metalbaba.local/customer_web/product_filter', [
        'json'    => [
          'API_TOKEN' => '',
          'category_id' => $id,
          'filters' => '[]',
          'is_gold_supplier' => '0',
          'is_trade_assurance' => '0',
          'moq' => '0',
          'order' => 'asc',
          'page' => '1',
          'search_keyword' => '',
          'sort' => '',
    ],
    'handler' => $tapMiddleware($clientHandler)
]);
      $product_filter_link_data=json_decode($response->getBody()->getContents());
      //product list
      $response = $client->request('POST', 'http://api.metalbaba.local/customer_web/product_list', [
        'json'    => [
          'API_TOKEN' => '',
          'category_id' => $id,
          'filters' => '[]',
          'is_gold_supplier' => '0',
          'is_trade_assurance' => '0',
          'moq' => '0',
          'order' => 'asc',
          'page' => '1',
          'search_keyword' => '',
          'sort' => '',
    ],
    'handler' => $tapMiddleware($clientHandler)
]);
      $product_keyword_data=json_decode($response->getBody()->getContents());

      //product list




       $theme = Theme::uses('default')->layout('layout');
       $data = [
         'prodt_data' => $product_filter_link_data,
         'pro_data_keyword' => $product_keyword_data,

     ];
      return $theme->scope('product_list_withlink', $data)->render();
     }
     public function product_list(){
       $theme = Theme::uses('default')->layout('layout');
       $data = ['info' => 'Hello World'];
       return $theme->scope('product_list', $data)->render();
     }
    public function index()
    {
       $userRoles=[];
       if (Auth::user()) {   // Check is user logged in
        $user = auth()->user();
        $userRoles = $user->getRoleNames();
        $user_role = $userRoles[0];
       }else{
        $user_role='GUEST';
       }
       switch($user_role){
        case 'Admin':
        return $this->AdminDashboard();
        break;
        case 'User':
        return $this->UserDashboard();
        break;
        default:
        return $this->Front();
        break;
       }


        //return view('home');
    }
    public function AdminDashboard(){
        $theme = Theme::uses('admin')->layout('layout');
        $data = ['info' => 'Hello World'];
        //return $theme->scope('index', $data)->render();
    }
    public function UserDashboard(){

        $theme = Theme::uses('users')->layout('layout');
        $data = ['info' => 'This is user information'];
        return $theme->scope('index', $data)->render();
    }
    public function Front(){
        $theme = Theme::uses('default')->layout('layout');
        $data = ['info' => 'Hello World'];
        return $theme->scope('index', $data)->render();
    }

    public function update_data(Request $request){
      $name=$request->name;
      User::where('id', 1)
          ->update(['name' => $name]);


    }

}

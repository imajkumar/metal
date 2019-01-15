<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Theme;
use Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
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

//this controller is used for indentify users

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


     public function product_seller_list(){
       echo "string";
       die;
       $theme = Theme::uses('default')->layout('layout');
       $data = ['info' => 'Hello World'];
       return $theme->scope('product_list', $data)->render();

     }
     public function product_list_cat($id,$item_name){
       // print_r($id);
       // print_r($item_name);
       // echo "string";
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


       //$users = User::role('admin')->get();
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
        return $theme->scope('index', $data)->render();
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

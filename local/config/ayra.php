<?php

return [

  'sex'=>[
     [
       'name' =>'Male' ,
       'value' =>'1'
     ],
     [
       'name' =>'Female' ,
       'value' =>'0'
     ]
  ],
  'name' => env('APP_NAME', 'Laravel'),
  'baseURL' => env('APP_BASEURL', 'localhost'),
  'apiURL'=>[
    'PRICE_LIST'=>'price_list',
    'PRODUCT_LIST'=>'a666a'
  ],
  'apiList' => [
        'PRICE_LIST' => env('APP_BASEURL', 'localhost').'price_list',
        'HOME' => env('APP_BASEURL', 'localhost').'home',
        'NOTIFICATION_LIST' => env('APP_BASEURL', 'localhost').'notification_list',
        'PRODUCT_LIST' => env('APP_BASEURL', 'localhost').'product_list',
        'PRODUCT_FILTER' => env('APP_BASEURL', 'localhost').'product_filter',
        'CATEGORY_HOME_LIST' => env('APP_BASEURL', 'localhost').'category_home_list',
        'SELLER_LIST' => env('APP_BASEURL', 'localhost').'seller_list',
        'SELLER_FILTER' => env('APP_BASEURL', 'localhost').'seller_filter',

        'en' => 'www.domain.us'.env('APP_BASEURL', 'localhost')
        // etc
    ]
];

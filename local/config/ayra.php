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
        'SELLER_DETAIL' => env('APP_BASEURL', 'localhost').'seller_detail',
        'SELLER_FILTER' => env('APP_BASEURL', 'localhost').'seller_filter',
        'APP_LOGIN' => env('APP_BASEURL', 'localhost').'login',
        'APP_REGISTER' => env('APP_BASEURL', 'localhost').'signup',
        'USER_PROFILE' => env('APP_BASEURL', 'localhost').'profile_detail',
        'APP_LOGOUT' => env('APP_BASEURL', 'localhost').'logout',
        'BUY_LEAD_ADD' => env('APP_BASEURL', 'localhost').'buylead_add',
        'NEWS_LIST' => env('APP_BASEURL', 'localhost').'news_list',

        'en' => 'www.domain.us'.env('APP_BASEURL', 'localhost')
        // etc
    ]
];

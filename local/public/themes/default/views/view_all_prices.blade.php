
    <section class="section light-backgorund">
        <div class="container">
            <div class="row">
                 <div class="col-md-2">
                   HI
                   </div>
                 <div class="col-md-10">
                   <div class="table-responsive">
                     <style media="screen">
                     tbody {
                       background-color: #FFF;
                     }
                     table tr th {
            /*...all th attributes like padding etc*/
                      background-color:#B4B4B4;
                      padding: 0px;
                    }
                    table tr { height: 10px; }

                     </style>
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
  			             $response = $client->request('POST', Config::get('ayra.apiList.PRICE_LIST'), [
  			               'json'    => [
  			                 'API_TOKEN' =>'',
  			                 'page' => '1'
  			           	],
  			           'handler' => $tapMiddleware($clientHandler)
  			       ]);
  			        $price_data=json_decode($response->getBody()->getContents());
                  //echo "<pre>";

                  foreach ($price_data->data as $key => $pro_val) {

                      foreach ($pro_val as $key => $value) {

                        ?>
                        <table class="table">
                          <thead>
                            <tr>
                              <td scope="col" class="ajcol"><b>{{$pro_val->name}}</b></td>
                            </tr>
                            <tr>
                              <th scope="col">Particular/Delivery</th>
                              <th scope="col"><i class="fa fa-bookmark-o" aria-hidden="true"></i></th>
                              <th scope="col"><i class="fa fa-bar-chart barchart" aria-hidden="true"></i></th>
                              <th scope="col">Size, Grade, Origin</th>
                              <th scope="col">Taxes</th>
                              <th scope="col">Price</th>
                              <th scope="col">Change</th>
                              <th scope="col">1W</th>
                              <th scope="col">1M</th>
                            </tr>
                          </thead>
                          <tbody style="backgorund:#FFF">
                            <?php
                            foreach ($pro_val->prices as $key => $price) {
                            ?>
                            <tr>
                              <td>{{$price->name}} <span><a style="color:blue"  href="{{URL::to('/price-detail')}}{{ "/".$price->id}}">({{$price->location}})</a></span></td>
                              <td>{{$price->change_frequency}}</td>
                              <td>-</td>
                              <td>{{$price->size==""?"":$price->size}} {{$price->grade==""?"":$price->grade}}  {{$price->origin==""?"":$price->origin}} </td>
                              <td>{{$price->taxes==""?"-":$price->taxes}}</td>
                              <td>Subscribe</td>
                              <td>Subscribe</td>
                              <td>Subscribe</td>
                              <td>Subscribe</td>
                            </tr>
                            <?php
                            }
                            ?>
                          </tbody>
                    </table>
                    <hr>
                        <?php
                      }
                  }
                  ?>
               </div>
             </div>
        </div>
    </div>
</section>

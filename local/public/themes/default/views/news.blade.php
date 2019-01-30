<script>

			var session_keepalive;

			$j(document).ready( function() {

				session_keepalive = setTimeout(do_session_keepalive, 1000 * 60 * 5);

			});

			function do_session_keepalive () {

				var the_page = "https://www.abclive.php";

				$j.post(the_page, null, function () {
					session_keepalive = setTimeout(do_session_keepalive, 1000 * 60 * 5);
				});
			}

		</script>

<?php
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
$client = new Client();
$clientHandler = $client->getConfig('handler');
$tapMiddleware = Middleware::tap(function ($request) {
        $request->getHeaderLine('Content-Type');
        $request->getBody();
});
$response = $client->request('POST', Config::get('ayra.apiList.NEWS_LIST'), [
         'json'    => [
           'API_TOKEN' => '',
           'page' =>''

           ],
     'handler' => $tapMiddleware($clientHandler)
 ]);
$news_arr=json_decode($response->getBody()->getContents());
//echo "<pre>";
//print_r($news_arr);



?>

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <!-- new section -->
      <div id="content" class="ng-view ng-scope" autoscroll="true"><div class="ng-scope">

    <div class="blg">
        <div class="container-fluid">
            <div class="sitebread">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">
                        <a href="/news">News</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="blgbx1 bot-spc" id="list-top-div">
            <!-- ngRepeat: news in news_list -->
            <?php
            foreach ($news_arr->data->news_list->data as $key => $value) {
              //print_r($value);
            ?>

            <div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/{{$value->id}}/{{$value->meta_title}}" data-ng-href="/news-detail/43/Japan-s-stainless-steel-scrap-imports-record-12--jump-in-2016">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABHCOS235438330" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="{{$value->meta_title}}" alt="Japan’s stainless steel scrap imports record 12% jump in 2016" class="optional-image-class afkl-lazy-image" src="{{$value->image}}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/{{$value->id}}/{{$value->meta_title}}" data-ng-href="/news-detail/{{$value->id}}/{{$value->meta_title}}" class="ng-binding">
                            {{$value->title}}

                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">

                      {{$value->description}}
                    </p>
                    <div class="clr"></div>
                    <br>


                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.com/news-detail/{{$value->id}}/{{$value->meta_title}}" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F43%2FJapan-s-stainless-steel-scrap-imports-record-12--jump-in-2016&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="fe2b58c7e4a6a4" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df2928543441905c%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F43%2FJapan-s-stainless-steel-scrap-imports-record-12--jump-in-2016&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>

                    <div class="clr"></div>
                    <h6 class="ng-binding">14 Feb, 2017, 10:53PM</h6>
                </div>
            </div>

            <?php
            }
            ?>


            <!-- end ngRepeat: news in news_list -->
            <div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/42/Extension-of-Anti-Dumping-Duty-on-Cold-Rolled-Flat-Products" data-ng-href="/news-detail/42/Extension-of-Anti-Dumping-Duty-on-Cold-Rolled-Flat-Products">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABHCJN431263467" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Extension of Anti-Dumping Duty on Cold Rolled Flat Products" alt="Extension of Anti-Dumping Duty on Cold Rolled Flat Products" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABHCJN431263467"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/42/Extension-of-Anti-Dumping-Duty-on-Cold-Rolled-Flat-Products" data-ng-href="/news-detail/42/Extension-of-Anti-Dumping-Duty-on-Cold-Rolled-Flat-Products" class="ng-binding">
                            Extension of Anti-Dumping Duty on Cold Rolled Flat Products
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">To view the notification click hereTo view original notification click here...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/42/Extension-of-Anti-Dumping-Duty-on-Cold-Rolled-Flat-Products" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F42%2FExtension-of-Anti-Dumping-Duty-on-Cold-Rolled-Flat-Products&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f35c911c4e9e34c" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df1996b37d2b5818%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F42%2FExtension-of-Anti-Dumping-Duty-on-Cold-Rolled-Flat-Products&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">09 Feb, 2017, 06:13PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/41/Budget-overlooks-plight-of-Stainless-Steel-Industry--ISSDA" data-ng-href="/news-detail/41/Budget-overlooks-plight-of-Stainless-Steel-Industry--ISSDA">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABHCCT384013741" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Budget overlooks plight of Stainless Steel Industry: ISSDA" alt="Budget overlooks plight of Stainless Steel Industry: ISSDA" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABHCCT384013741"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/41/Budget-overlooks-plight-of-Stainless-Steel-Industry--ISSDA" data-ng-href="/news-detail/41/Budget-overlooks-plight-of-Stainless-Steel-Industry--ISSDA" class="ng-binding">
                            Budget overlooks plight of Stainless Steel Industry: ISSDA
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">KOLKATA: Indian Stainless&nbsp;Steel&nbsp;Development Association (ISSDA), a stainless steel industry body has said that the union budget 2017-18 has overlooked the plight of stainless ste...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/41/Budget-overlooks-plight-of-Stainless-Steel-Industry--ISSDA" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F41%2FBudget-overlooks-plight-of-Stainless-Steel-Industry--ISSDA&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f3094f001672808" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df5ee6dd363b29%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F41%2FBudget-overlooks-plight-of-Stainless-Steel-Industry--ISSDA&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">03 Feb, 2017, 12:08AM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/40/Indonesia-To-Damage-The-Stainless-Steel-Sector" data-ng-href="/news-detail/40/Indonesia-To-Damage-The-Stainless-Steel-Sector">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABHBOP432217428" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Indonesia To Damage The Stainless Steel Sector" alt="Indonesia To Damage The Stainless Steel Sector" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABHBOP432217428"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/40/Indonesia-To-Damage-The-Stainless-Steel-Sector" data-ng-href="/news-detail/40/Indonesia-To-Damage-The-Stainless-Steel-Sector" class="ng-binding">
                            Indonesia To Damage The Stainless Steel Sector
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">Indonesia has announced that it is going to ease up&nbsp;its&nbsp;export ban on&nbsp;nickel ore. It&nbsp;appears it is going to allow nickel miners to export as long as they dedicate at least 30 p...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/40/Indonesia-To-Damage-The-Stainless-Steel-Sector" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F40%2FIndonesia-To-Damage-The-Stainless-Steel-Sector&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f3173e4158f06b" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Dfe89ecf7e6d728%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F40%2FIndonesia-To-Damage-The-Stainless-Steel-Sector&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">14 Jan, 2017, 08:13PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/39/Hike-import-duty-on-flat-products--Stainless-steel-industry" data-ng-href="/news-detail/39/Hike-import-duty-on-flat-products--Stainless-steel-industry">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABHBMP450788413" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Hike import duty on flat products: Stainless steel industry" alt="Hike import duty on flat products: Stainless steel industry" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABHBMP450788413"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/39/Hike-import-duty-on-flat-products--Stainless-steel-industry" data-ng-href="/news-detail/39/Hike-import-duty-on-flat-products--Stainless-steel-industry" class="ng-binding">
                            Hike import duty on flat products: Stainless steel industry
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">New Delhi: Stainless steel industry body Indian Stainless Steel Development Association (ISSDA) has demanded a hike in import duty on stainless steel flat products and abolition of...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/39/Hike-import-duty-on-flat-products--Stainless-steel-industry" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F39%2FHike-import-duty-on-flat-products--Stainless-steel-industry&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="fbe973a8783cdc" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df2ea6863252588%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F39%2FHike-import-duty-on-flat-products--Stainless-steel-industry&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">12 Jan, 2017, 08:15PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/38/Steel-firms-plan-biggest-price-hike-from-January" data-ng-href="/news-detail/38/Steel-firms-plan-biggest-price-hike-from-January">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGMRK510558654" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}" afkl-lazy-image-loaded="done"><img title="Steel firms plan biggest price hike from January" alt="Steel firms plan biggest price hike from January" class="optional-image-class afkl-lazy-image" src="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGMRK510558654"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/38/Steel-firms-plan-biggest-price-hike-from-January" data-ng-href="/news-detail/38/Steel-firms-plan-biggest-price-hike-from-January" class="ng-binding">
                            Steel firms plan biggest price hike from January
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">Major domestic steel companies are planning to raise product prices by a whopping Rs 6,000 per tonne from January as an unprecedented rise in coking coal rates and weak retail sale...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/38/Steel-firms-plan-biggest-price-hike-from-January" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F38%2FSteel-firms-plan-biggest-price-hike-from-January&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f1844cc412c6e4" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df333b94ace8e724%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F38%2FSteel-firms-plan-biggest-price-hike-from-January&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">17 Dec, 2016, 03:21PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/37/India-proposes-hike-in-basic-import-duty-on-stainless-steel" data-ng-href="/news-detail/37/India-proposes-hike-in-basic-import-duty-on-stainless-steel">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGMNP171354122" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/37/India-proposes-hike-in-basic-import-duty-on-stainless-steel" data-ng-href="/news-detail/37/India-proposes-hike-in-basic-import-duty-on-stainless-steel" class="ng-binding">
                            India proposes hike in basic import duty on stainless steel
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">In a bid to check rampant circumvention of antidumping duty on imported stainless steel, India’s Ministry of Steel has proposed hiking basic customs duty on the product to10 perc...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/37/India-proposes-hike-in-basic-import-duty-on-stainless-steel" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F37%2FIndia-proposes-hike-in-basic-import-duty-on-stainless-steel&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f315ea6779c741" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df12d4557356304c%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F37%2FIndia-proposes-hike-in-basic-import-duty-on-stainless-steel&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">13 Dec, 2016, 07:47PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/36/Stainless-Steel-Quality-Control-Order-Postponed-for-2-Months-by-Govt" data-ng-href="/news-detail/36/Stainless-Steel-Quality-Control-Order-Postponed-for-2-Months-by-Govt">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGMGQ401994170" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/36/Stainless-Steel-Quality-Control-Order-Postponed-for-2-Months-by-Govt" data-ng-href="/news-detail/36/Stainless-Steel-Quality-Control-Order-Postponed-for-2-Months-by-Govt" class="ng-binding">
                            Stainless Steel Quality Control Order Postponed for 2 Months by Govt
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">By the Order of Indian Government the Stainless Steel Quality Control Order has been postponed by another two months. Please see the attached order by Ministry of Steel...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/36/Stainless-Steel-Quality-Control-Order-Postponed-for-2-Months-by-Govt" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F36%2FStainless-Steel-Quality-Control-Order-Postponed-for-2-Months-by-Govt&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f3c15a28b861e84" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df888175605eb34%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F36%2FStainless-Steel-Quality-Control-Order-Postponed-for-2-Months-by-Govt&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">06 Dec, 2016, 09:10PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/35/Stainless-Steel-manufacturers-request-for-quality-order-to-be-postponed-by-an-year" data-ng-href="/news-detail/35/Stainless-Steel-manufacturers-request-for-quality-order-to-be-postponed-by-an-year">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGMFR565837782" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/35/Stainless-Steel-manufacturers-request-for-quality-order-to-be-postponed-by-an-year" data-ng-href="/news-detail/35/Stainless-Steel-manufacturers-request-for-quality-order-to-be-postponed-by-an-year" class="ng-binding">
                            Stainless Steel manufacturers request for quality order to be postponed by an year
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">MUMBAI, DEC 5:&nbsp;&nbsp;Metal and Stainless Steel Merchants’ Association, an apex body of stainless steel producers, importers and stockiest, has urged the Government to postpone the q...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/35/Stainless-Steel-manufacturers-request-for-quality-order-to-be-postponed-by-an-year" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F35%2FStainless-Steel-manufacturers-request-for-quality-order-to-be-postponed-by-an-year&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="ff44490e6fd36" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df34660601f75338%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F35%2FStainless-Steel-manufacturers-request-for-quality-order-to-be-postponed-by-an-year&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">05 Dec, 2016, 10:26PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/34/Govt-extends-MIP-on-19-steel-products-till-Feb-4" data-ng-href="/news-detail/34/Govt-extends-MIP-on-19-steel-products-till-Feb-4">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGMFL524584526" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/34/Govt-extends-MIP-on-19-steel-products-till-Feb-4" data-ng-href="/news-detail/34/Govt-extends-MIP-on-19-steel-products-till-Feb-4" class="ng-binding">
                            Govt extends MIP on 19 steel products till Feb 4
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">NEW DELHI: In order to protect domestic steel industry from below-cost imports, government today extended further the minimum import price (MIP) on 19 products for two months, till...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/34/Govt-extends-MIP-on-19-steel-products-till-Feb-4" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F34%2FGovt-extends-MIP-on-19-steel-products-till-Feb-4&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f1f02379f23142c" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df1fd7fcc9eb5ca8%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F34%2FGovt-extends-MIP-on-19-steel-products-till-Feb-4&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">05 Dec, 2016, 04:22PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/33/Indian-Ferrochrome-Industry-is-recovering-due-to-Chinese-demand-and-price-increase" data-ng-href="/news-detail/33/Indian-Ferrochrome-Industry-is-recovering-due-to-Chinese-demand-and-price-increase">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGMBR104765237" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/33/Indian-Ferrochrome-Industry-is-recovering-due-to-Chinese-demand-and-price-increase" data-ng-href="/news-detail/33/Indian-Ferrochrome-Industry-is-recovering-due-to-Chinese-demand-and-price-increase" class="ng-binding">
                            Indian Ferrochrome Industry is recovering due to Chinese demand and price increase
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">Green signals are emerging in the ferrochrome industry in&nbsp;India, as a revival in demand from&nbsp;China&nbsp;and higher prices have spurred producers to bring idled capacity back into pro...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/33/Indian-Ferrochrome-Industry-is-recovering-due-to-Chinese-demand-and-price-increase" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F33%2FIndian-Ferrochrome-Industry-is-recovering-due-to-Chinese-demand-and-price-increase&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f23221888b3d7a8" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df3879d771583894%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F33%2FIndian-Ferrochrome-Industry-is-recovering-due-to-Chinese-demand-and-price-increase&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">01 Dec, 2016, 09:40PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/32/Stainless-Steel-Transaction-Values-Climb-Significantly-during-November" data-ng-href="/news-detail/32/Stainless-Steel-Transaction-Values-Climb-Significantly-during-November">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGMBR035834471" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/32/Stainless-Steel-Transaction-Values-Climb-Significantly-during-November" data-ng-href="/news-detail/32/Stainless-Steel-Transaction-Values-Climb-Significantly-during-November" class="ng-binding">
                            Stainless Steel Transaction Values Climb Significantly during November
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">Stainless steel transaction values climbed significantly during November. MEPS All Products Average figure for grade 304 increased by 3.5 percent, month-on-month. The rise was pred...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/32/Stainless-Steel-Transaction-Values-Climb-Significantly-during-November" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F32%2FStainless-Steel-Transaction-Values-Climb-Significantly-during-November&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f2ba17d456ee15c" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df2a3411e2dfa77c%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F32%2FStainless-Steel-Transaction-Values-Climb-Significantly-during-November&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">01 Dec, 2016, 09:33PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/31/High-Ferrochrome-prices-could-cause-sector-consolidation" data-ng-href="/news-detail/31/High-Ferrochrome-prices-could-cause-sector-consolidation">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGL4Q484138458" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/31/High-Ferrochrome-prices-could-cause-sector-consolidation" data-ng-href="/news-detail/31/High-Ferrochrome-prices-could-cause-sector-consolidation" class="ng-binding">
                            High Ferrochrome prices could cause sector consolidation
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">Rocketing ferrochrome prices are expected to accelerate consolidation among producers in South Africa, increasing the global stainless steel industry's reliance on mining group Gle...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/31/High-Ferrochrome-prices-could-cause-sector-consolidation" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F31%2FHigh-Ferrochrome-prices-could-cause-sector-consolidation&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f348c32996cb5c" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df139b09241cca84%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F31%2FHigh-Ferrochrome-prices-could-cause-sector-consolidation&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">30 Nov, 2016, 09:18PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/30/Rising-Nickel-Prices-give-strength-to-Stainless-Steel-Scrap-Rates" data-ng-href="/news-detail/30/Rising-Nickel-Prices-give-strength-to-Stainless-Steel-Scrap-Rates">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGL4Q454156341" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/30/Rising-Nickel-Prices-give-strength-to-Stainless-Steel-Scrap-Rates" data-ng-href="/news-detail/30/Rising-Nickel-Prices-give-strength-to-Stainless-Steel-Scrap-Rates" class="ng-binding">
                            Rising Nickel Prices give strength to Stainless Steel Scrap Rates
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">The drastic change in market’s supply fundamentals on account of ban on nickel mine production by the Philippines administration led to sharp rally in Nickel prices during recent...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/30/Rising-Nickel-Prices-give-strength-to-Stainless-Steel-Scrap-Rates" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F30%2FRising-Nickel-Prices-give-strength-to-Stainless-Steel-Scrap-Rates&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f2345418507d74" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df3a905f3b0eee%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F30%2FRising-Nickel-Prices-give-strength-to-Stainless-Steel-Scrap-Rates&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">30 Nov, 2016, 09:15PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/29/Railways--decision-to-make-stainless-steel-coaches-will-bring-increased-demand-to-domestic-Stainless-Steel-Industry" data-ng-href="/news-detail/29/Railways--decision-to-make-stainless-steel-coaches-will-bring-increased-demand-to-domestic-Stainless-Steel-Industry">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGL4N185887645" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/29/Railways--decision-to-make-stainless-steel-coaches-will-bring-increased-demand-to-domestic-Stainless-Steel-Industry" data-ng-href="/news-detail/29/Railways--decision-to-make-stainless-steel-coaches-will-bring-increased-demand-to-domestic-Stainless-Steel-Industry" class="ng-binding">
                            Railways’ decision to make stainless steel coaches will bring increased demand to domestic Stainless Steel Industry
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">The Indian Railways’ recent&nbsp;decision&nbsp;to shift towards German Linke Hofmann Busch (LHB) coaches, made of stainless steel, may come as a boon for the domestic steel industry.The ...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/29/Railways--decision-to-make-stainless-steel-coaches-will-bring-increased-demand-to-domestic-Stainless-Steel-Industry" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F29%2FRailways--decision-to-make-stainless-steel-coaches-will-bring-increased-demand-to-domestic-Stainless-Steel-Industry&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f2440d883166c9" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df27ffa83eb77e9c%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F29%2FRailways--decision-to-make-stainless-steel-coaches-will-bring-increased-demand-to-domestic-Stainless-Steel-Industry&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">30 Nov, 2016, 05:48PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/28/Need-to-design--build-safer-stainless-steel-rail-coaches-for-passenger-safety--ISSDA" data-ng-href="/news-detail/28/Need-to-design--build-safer-stainless-steel-rail-coaches-for-passenger-safety--ISSDA">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGL3N470737505" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/28/Need-to-design--build-safer-stainless-steel-rail-coaches-for-passenger-safety--ISSDA" data-ng-href="/news-detail/28/Need-to-design--build-safer-stainless-steel-rail-coaches-for-passenger-safety--ISSDA" class="ng-binding">
                            Need to design, build safer stainless steel rail coaches for passenger safety: ISSDA
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">KOLKATA: Indian&nbsp;Stainless Steel&nbsp;Development Association (ISSDA), an apex body representing the stainless steel industry, has called for need to design and build safer stainless s...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/28/Need-to-design--build-safer-stainless-steel-rail-coaches-for-passenger-safety--ISSDA" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F28%2FNeed-to-design--build-safer-stainless-steel-rail-coaches-for-passenger-safety--ISSDA&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f39d89c03d7c24" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df1c73b9bf9991a8%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F28%2FNeed-to-design--build-safer-stainless-steel-rail-coaches-for-passenger-safety--ISSDA&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">29 Nov, 2016, 06:17PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/27/Extend-implementation-of-steel-QC-order-by-9-months--Industry" data-ng-href="/news-detail/27/Extend-implementation-of-steel-QC-order-by-9-months--Industry">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGL3N075169130" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/27/Extend-implementation-of-steel-QC-order-by-9-months--Industry" data-ng-href="/news-detail/27/Extend-implementation-of-steel-QC-order-by-9-months--Industry" class="ng-binding">
                            Extend implementation of steel QC order by 9 months: Industry
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">NEW DELHI: An industry body has asked the government to extend by another nine months the date of implementation of the Stainless Steel products Quality Control (QC) Order 2016, wh...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/27/Extend-implementation-of-steel-QC-order-by-9-months--Industry" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F27%2FExtend-implementation-of-steel-QC-order-by-9-months--Industry&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f3e053c5657724" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df188a64fa42a738%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=106&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F27%2FExtend-implementation-of-steel-QC-order-by-9-months--Industry&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">29 Nov, 2016, 05:37PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/26/Railways-to-use-aluminium-and-stainless-steel-coaches" data-ng-href="/news-detail/26/Railways-to-use-aluminium-and-stainless-steel-coaches">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGL0M430923185" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/26/Railways-to-use-aluminium-and-stainless-steel-coaches" data-ng-href="/news-detail/26/Railways-to-use-aluminium-and-stainless-steel-coaches" class="ng-binding">
                            Railways to use aluminium and stainless steel coaches
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">The Indian Railways, which earlier used Corten steel to manufacture coaches at its Integral Coach Factory (ICF), is gradually shifting towards stainless steel which is used to manu...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/26/Railways-to-use-aluminium-and-stainless-steel-coaches" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=0&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F26%2FRailways-to-use-aluminium-and-stainless-steel-coaches&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f31a8455922e28" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df3433957e718bf4%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F26%2FRailways-to-use-aluminium-and-stainless-steel-coaches&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">26 Nov, 2016, 05:13PM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/24/40-Grades-of-Stainless-Steel-Exempted-from-Stainless-Steel-QC-Order" data-ng-href="/news-detail/24/40-Grades-of-Stainless-Steel-Exempted-from-Stainless-Steel-QC-Order">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGLYW413530452" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/24/40-Grades-of-Stainless-Steel-Exempted-from-Stainless-Steel-QC-Order" data-ng-href="/news-detail/24/40-Grades-of-Stainless-Steel-Exempted-from-Stainless-Steel-QC-Order" class="ng-binding">
                            40 Grades of Stainless Steel Exempted from Stainless Steel QC Order
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">NEW DELHI: The government has excluded 40-odd grades of stainless&nbsp;steel&nbsp;used in auto and engineering sectors from the&nbsp;Stainless Steel Quality Control&nbsp;(QC) Order, 2016.The Burea...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/24/40-Grades-of-Stainless-Steel-Exempted-from-Stainless-Steel-QC-Order" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=0&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F24%2F40-Grades-of-Stainless-Steel-Exempted-from-Stainless-Steel-QC-Order&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f2de79ce3da788" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df1759fa8d1ee68%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F24%2F40-Grades-of-Stainless-Steel-Exempted-from-Stainless-Steel-QC-Order&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">25 Nov, 2016, 03:11AM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list --><div class="blgbx1in ng-scope" data-ng-repeat="news in news_list">
                <div class="blgbx1in1">
                    <a href="/news-detail/23/Stainless-steel-imports-rise-by-25-percent-to-2-3-Lac-Tonnes-in-Apr-Aug" data-ng-href="/news-detail/23/Stainless-steel-imports-rise-by-25-percent-to-2-3-Lac-Tonnes-in-Apr-Aug">
                        <div afkl-lazy-image="http://res.cloudinary.com/metb/image/upload/h_160,w_160/ABGLYW410423764" class="demo-no-use-of-aspect-ratio" afkl-lazy-image-options="{&quot;imgAttrs&quot;: [{&quot;title&quot;: news.title}, {&quot;alt&quot;: news.title}, {&quot;class&quot;: &quot;optional-image-class&quot;}]}"></div>
                    </a>
                </div>
                <div class="blgbx1in2">
                    <h3>
                        <a href="/news-detail/23/Stainless-steel-imports-rise-by-25-percent-to-2-3-Lac-Tonnes-in-Apr-Aug" data-ng-href="/news-detail/23/Stainless-steel-imports-rise-by-25-percent-to-2-3-Lac-Tonnes-in-Apr-Aug" class="ng-binding">
                            Stainless steel imports rise by 25 percent to 2.3 Lac Tonnes in Apr-Aug
                        </a>
                    </h3>
                    <p data-ng-bind-html="news.description" class="ng-binding">NEW DELHI: Imports of&nbsp;stainless steel, mainly used for making utensils and&nbsp;kitchen appliances, jumped 25 per cent in the first five months of this fiscal to 2.3 lakh tonnes (LT),...</p>
                    <div class="clr"></div>
                    <br>
                    <div fb-like="news.shareModel.Url" class="sshare1 ng-isolate-scope"><div class="fb-like fb_iframe_widget" data-href="http://metalbaba.local/news-detail/23/Stainless-steel-imports-rise-by-25-percent-to-2-3-Lac-Tonnes-in-Apr-Aug" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=230498527380799&amp;container_width=0&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F23%2FStainless-steel-imports-rise-by-25-percent-to-2-3-Lac-Tonnes-in-Apr-Aug&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f37f9ccd838a618" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=230498527380799&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FGMRn6XEBZ06.js%3Fversion%3D43%23cb%3Df103f72b277ded8%26domain%3Dmetalbaba.local%26origin%3Dhttp%253A%252F%252Fmetalbaba.local%252Ff1b466077fdb55c%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fmetalbaba.local%2Fnews-detail%2F23%2FStainless-steel-imports-rise-by-25-percent-to-2-3-Lac-Tonnes-in-Apr-Aug&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></div>
                    <!--
                    <div tweet="news.shareModel.Name" tweet-url="news.shareModel.Url"class="sshare1"></div>
                    <div pin-it="news.shareModel.Name" pin-it-image="news.shareModel.ImageUrl" pin-it-url="news.shareModel.Url"class="sshare1"></div>
                    -->
                    <div class="clr"></div>
                    <h6 class="ng-binding">25 Nov, 2016, 03:11AM</h6>
                </div>
            </div><!-- end ngRepeat: news in news_list -->
            <div class="col-sm-12 text-right">
                <ul class="pagination" id="pagination-news"><li class="active ng-scope"><span>1</span></li><li class="ng-scope"><a href="#" ng-click="paginateNews(2)"><span>2</span></a></li><li class="ng-scope"><a href="#" ng-click="paginateNews(3)"><span>3</span></a></li><li class="ng-scope"><a href="#" ng-click="paginateNews(2)"><span>&gt;</span></a></li><li class="ng-scope"><a href="#" ng-click="paginateNews(3)"><span>&gt;|</span></a></li></ul>
            </div>
        </div>
        <div class="blgbx2 bot-spc">
            <div class="trendn">
                <h2>Trending News</h2>
                <ul>
                    <!-- ngRepeat: news in trending_news_list --><li data-ng-repeat="news in trending_news_list" class="ng-scope">
                        <a href="/news-detail/43/Japan-s-stainless-steel-scrap-imports-record-12--jump-in-2016" data-ng-href="/news-detail/43/Japan-s-stainless-steel-scrap-imports-record-12--jump-in-2016">
                            <div class="trendn1">
                                <img src="http://res.cloudinary.com/metb/image/upload/c_fit,h_68,w_68/ABHCOS235438330" data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_68,w_68/ABHCOS235438330" alt="Japan’s stainless steel scrap imports record 12% jump in 2016" title="Japan’s stainless steel scrap imports record 12% jump in 2016">
                            </div>
                            <div class="trendn2">
                                <p class="ng-binding">Japan’s stainless steel scrap imports record 12% jump in 2016</p>
                            </div>
                        </a>
                    </li><!-- end ngRepeat: news in trending_news_list --><li data-ng-repeat="news in trending_news_list" class="ng-scope">
                        <a href="/news-detail/42/Extension-of-Anti-Dumping-Duty-on-Cold-Rolled-Flat-Products" data-ng-href="/news-detail/42/Extension-of-Anti-Dumping-Duty-on-Cold-Rolled-Flat-Products">
                            <div class="trendn1">
                                <img src="http://res.cloudinary.com/metb/image/upload/c_fit,h_68,w_68/ABHCJN431263467" data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_68,w_68/ABHCJN431263467" alt="Extension of Anti-Dumping Duty on Cold Rolled Flat Products" title="Extension of Anti-Dumping Duty on Cold Rolled Flat Products">
                            </div>
                            <div class="trendn2">
                                <p class="ng-binding">Extension of Anti-Dumping Duty on Cold Rolled Flat Products</p>
                            </div>
                        </a>
                    </li><!-- end ngRepeat: news in trending_news_list --><li data-ng-repeat="news in trending_news_list" class="ng-scope">
                        <a href="/news-detail/41/Budget-overlooks-plight-of-Stainless-Steel-Industry--ISSDA" data-ng-href="/news-detail/41/Budget-overlooks-plight-of-Stainless-Steel-Industry--ISSDA">
                            <div class="trendn1">
                                <img src="http://res.cloudinary.com/metb/image/upload/c_fit,h_68,w_68/ABHCCT384013741" data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_68,w_68/ABHCCT384013741" alt="Budget overlooks plight of Stainless Steel Industry: ISSDA" title="Budget overlooks plight of Stainless Steel Industry: ISSDA">
                            </div>
                            <div class="trendn2">
                                <p class="ng-binding">Budget overlooks plight of Stainless Steel Industry: ISSDA</p>
                            </div>
                        </a>
                    </li><!-- end ngRepeat: news in trending_news_list --><li data-ng-repeat="news in trending_news_list" class="ng-scope">
                        <a href="/news-detail/40/Indonesia-To-Damage-The-Stainless-Steel-Sector" data-ng-href="/news-detail/40/Indonesia-To-Damage-The-Stainless-Steel-Sector">
                            <div class="trendn1">
                                <img src="http://res.cloudinary.com/metb/image/upload/c_fit,h_68,w_68/ABHBOP432217428" data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_68,w_68/ABHBOP432217428" alt="Indonesia To Damage The Stainless Steel Sector" title="Indonesia To Damage The Stainless Steel Sector">
                            </div>
                            <div class="trendn2">
                                <p class="ng-binding">Indonesia To Damage The Stainless Steel Sector</p>
                            </div>
                        </a>
                    </li><!-- end ngRepeat: news in trending_news_list --><li data-ng-repeat="news in trending_news_list" class="ng-scope">
                        <a href="/news-detail/39/Hike-import-duty-on-flat-products--Stainless-steel-industry" data-ng-href="/news-detail/39/Hike-import-duty-on-flat-products--Stainless-steel-industry">
                            <div class="trendn1">
                                <img src="http://res.cloudinary.com/metb/image/upload/c_fit,h_68,w_68/ABHBMP450788413" data-ng-src="http://res.cloudinary.com/metb/image/upload/c_fit,h_68,w_68/ABHBMP450788413" alt="Hike import duty on flat products: Stainless steel industry" title="Hike import duty on flat products: Stainless steel industry">
                            </div>
                            <div class="trendn2">
                                <p class="ng-binding">Hike import duty on flat products: Stainless steel industry</p>
                            </div>
                        </a>
                    </li><!-- end ngRepeat: news in trending_news_list -->
                </ul>
            </div>
            <!-- ngRepeat: ads in advertisment_list -->
            <div class="blgsub top-spc2">
                <h2>Subscribe Our Newsletter</h2>
                <p>Join our mailing list to keep updates about our products &amp; services</p>
                <input type="text" data-ng-model="subscribe_email" placeholder="Email" class="blgsubf top-spc2 ng-pristine ng-untouched ng-valid ng-empty">
                <button type="button" class="blgsubb top-spc2" data-ng-click="subscribeEmail();">Subscribe</button>
            </div>
        </div>
    </div>
</div></div>

      <!-- new section -->
    </div>
  </div>
</div>

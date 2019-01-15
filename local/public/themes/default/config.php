<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Inherit from another theme
	|--------------------------------------------------------------------------
	|
	| Set up inherit from another if the file is not exists, this
	| is work with "layouts", "partials", "views" and "widgets"
	|
	| [Notice] assets cannot inherit.
	|
	*/

	'inherit' => null, //default

	/*
	|--------------------------------------------------------------------------
	| Listener from events
	|--------------------------------------------------------------------------
	|
	| You can hook a theme when event fired on activities this is cool
	| feature to set up a title, meta, default styles and scripts.
	|
	| [Notice] these event can be override by package config.
	|
	*/


	'events' => array(

		'before' => function($theme)
		{
			$theme->setTitle('Manufacturers and Suppliers for stainless steel pipe, stainless steel plate, stainless steel suppliers, stainless steel coil');
			$theme->setAuthor('Metalbaba');
			$theme->setKeywords('Scrap Metal Prices, Recycling News,Recycling Companies,Junk Yards, Sell Scrap Online');
			$theme->setDescription('Are you a buyer of stainless steel prime goods? Like Stainless Steel Sheets, Coils, Pipe, Circle, Round Bars, Wires, or scrap? Do you constantly have a problem finding the current rates and making a decision of when to buy raw material? Are you not able to get material on time when you need it most? Metalbaba solves these problems by providing a platform where you can easily find the latest Stainless Steel rates, and even book your material at those rates from real suppliers with ready stock! We provide you real support in all your transactions so you never have to worry about raw material procurement again! Download now and review our app!');


		},

		'asset' => function($asset)
		{
			$asset->themePath()->add([
										['style', 'css/style.css'],
										['script', 'js/script.js']
									 ]);

			// You may use elixir to concat styles and scripts.
			/*
			$asset->themePath()->add([
										['styles', 'dist/css/styles.css'],
										['scripts', 'dist/js/scripts.js']
									 ]);
			*/

			// Or you may use this event to set up your assets.
			/*
			$asset->themePath()->add('core', 'core.js');
			$asset->add([
							['jquery', 'vendor/jquery/jquery.min.js'],
							['jquery-ui', 'vendor/jqueryui/jquery-ui.min.js', ['jquery']]
						]);
			*/
		},


		'beforeRenderTheme' => function($theme)
		{
			// To render partial composer
			/*
	        $theme->partialComposer('header', function($view){
	            $view->with('auth', Auth::user());
	        });
			*/

		},

		'beforeRenderLayout' => array(

			'mobile' => function($theme)
			{
				// $theme->asset()->themePath()->add('ipad', 'css/layouts/ipad.css');
			}

		)

	)

);

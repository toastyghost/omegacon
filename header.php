<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<? #wp_enqueue_style('omegacon', get_stylesheet_directory_uri().'/library/less/style.less'); ?>
		
		<link rel="stylesheet/less" href="<?= get_stylesheet_directory_uri() ?>/library/less/style.less" type="text/css">
		<script src='http://cdnjs.cloudflare.com/ajax/libs/less.js/1.7.4/less.min.js'></script>
		<script>less.watch();</script>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>
	<body <?php body_class(); ?>>
		
		<!-- Facebook JS SDK -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!-- /Facebook JS SDK -->
		
		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
						
					<p id="logo" class="h1">
						<a href="<?php echo home_url(); ?>" rel="nofollow">
							<img src="<?= get_template_directory_uri() ?>/library/images/custom/logo.png" width="257" height="103" alt="OmegaCon">
							<img src="<?= random_panda_image() ?>" width="110" height="103" alt="Al the Panda">
						</a>
						<br>
						<span id="tagline">central virginia's gaming &amp; anime convention</span>
					</p>
					
					<div id="header-marketing">
						<!--<div id="banner">
							Banner Test
						</div>-->
						
						<div id="event-dates">
							Sept 27-29, 2013<br>
							Holiday Inn - University<br>
							Charlottesville, VA
						</div>
						
						<div class="fb-like" data-href="http://facebook.com/omegaconVA" data-send="true" data-width="300" data-show-faces="false"></div>
					</div>
					
					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>


					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->

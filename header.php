<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" type="image/x-icon">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  		 <script type="text/javascript" src="https://www.google.com/jsapi"></script>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->

		<!--[if lt IE 9]>
			<script>
				document.createElement('video');
			</script>
		<![endif]-->

	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">

			<div class="container">

				<a href="<?php bloginfo( 'url' ); ?>/online-request-form/" class="online-request">Online request</a>

				<a class="navbar-brand wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white.png" /></a>

				<div class="navbar-menu wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
					<button class="close-responsive-menu"><i class="fa fa-close"></i></button>
					<?php wp_nav_menu( array( 'menu' => 'other pages', 'container_class' => 'menu-main-menu-container' ) ); // Adjust using Menus in Wordpress Admin ?>
				</div>

				<button class="responsive-menu-trigger"><i class="fa fa-bars"></i></button>

			</div>
		
		</header> <!-- end header -->

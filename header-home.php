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

				

<script>
jQuery(function() {    
         jQuery("header").backstretch([
            <?php

            if ( have_rows('looping_images') ) :
                 while ( have_rows('looping_images') ) : the_row();
                        // display a sub field value
                        $loop_image = get_sub_field('loop_image');
                        echo '"' . $loop_image . '",'; 
                endwhile;
            endif;

            ?>
            ], {duration: 5000, fade: 1500});
});
</script>


		<header role="banner" id="headerbg">



			<a href="<?php bloginfo( 'url' ); ?>/online-request-form" class="online-request">Online request</a>



			<a class="navbar-brand wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">

				<img class="logo-normal" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Pan-Abode - The Original" />

				<img class="logo-white" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white.png" alt="Pan-Abode - The Original" />

			</a>



			<div class="container"><a href="#about" class="scroll-button"></a></div>



			<div class="container-fluid">



				<div class="col-sm-11 pull-right">



					<div class="col-xs-8 pull-right">



						<h2 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="3s"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/theoriginal.png" alt="Pan-Abode - The Original"/></h2>



						<div class="navbar-menu wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.3s">

							<a class="navbar-brand wow" href="#headerbg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white.png" alt="Pan-Abode - The Original" /></a>							

							<button class="close-responsive-menu"><i class="fa fa-close"></i></button>

							<?php wp_nav_menu( array( 'menu' => 'Main menu' ) ); // Adjust using Menus in Wordpress Admin ?>

						</div>



					</div>



				</div>



			</div>



			<button class="responsive-menu-trigger"><i class="fa fa-bars"></i></button>



		

		</header> <!-- end header -->